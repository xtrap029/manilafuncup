<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller {

	var $data = array();

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->model('registerModel');
	}
 
	public function index(){
		$this->data['title'] = "Registration Form";

		if($_POST){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('teamname', 'Team Name', 'required|max_length[50]');
			$this->form_validation->set_rules('division', 'Division', 'required|max_length[6]');
			$this->form_validation->set_rules('address', 'Address', 'required|max_length[200]');
			$this->form_validation->set_rules('landline', 'Landline', 'required|max_length[50]');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required|max_length[20]');
			$this->form_validation->set_rules('email', 'Email', 'required|max_length[50]|valid_email');

			$this->form_validation->set_rules('teamcoach', 'Team Coach', 'required|max_length[150]');
			$this->form_validation->set_rules('coachemail', 'Coach Email', 'required|max_length[50]|valid_email');
			$this->form_validation->set_rules('coachcontact', 'Coach Contact Number', 'required|max_length[50]');

			$this->form_validation->set_rules('teamcaptain[0]', 'Team Captain', 'required|max_length[150]');
			$this->form_validation->set_rules('teamcaptaincontact[0]', 'Team Captain Contact', 'max_length[50]');
			$this->form_validation->set_rules('teamcaptainemail[0]', 'Team Captain Email', 'max_length[50]|valid_email');

			$this->form_validation->set_rules('teamcaptain[1]', 'Team Captain', 'max_length[150]');
			$this->form_validation->set_rules('teamcaptaincontact[1]', 'Team Captain Contact', 'max_length[50]');
			$this->form_validation->set_rules('teamcaptainemail[1]', 'Team Captain Email', 'max_length[50]|valid_email');

			for ($i=0; $i < 14 ; $i++) { 
				$this->form_validation->set_rules('contact['.$i.']', 'Player Contact', 'max_length[50]');
				$this->form_validation->set_rules('playeremail['.$i.']', 'Player Email', 'max_length[50]|valid_email');
			}

			for ($j=0; $j < 9 ; $j++) { 
				$this->form_validation->set_rules('playername['.$j.']', 'Player Name', 'required|max_length[150]');
			}

			for ($k=9; $k < 14; $k++) { 
				$this->form_validation->set_rules('playername['.$k.']', 'Player Name', 'max_length[150]');
			}

			if ($this->form_validation->run() != FALSE){
				extract($_POST);

				$captcha = NULL;
				if(isset($_POST['g-recaptcha-response'])) $captcha=$_POST['g-recaptcha-response'];
				if(!$captcha){
					$this->data['error'] = "Please check the captcha form";
		        }
		        else{
			        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdJjBoTAAAAAPksL8U2WziQJZ_AkcCJCdk_Wezl&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
			        if($response['success'] == false)
			        {
			        	redirect(current_url());
			        }
			        else
			        {
						$this->store($teamname,$division,$address,$landline,$mobile,$email,$teamcoach,$coachcontact,$coachemail,$teamcaptain[0],$teamcaptaincontact[0],$teamcaptainemail[0],$teamcaptain[1],$teamcaptaincontact[1],$teamcaptainemail[1]);

						$id = $this->db->insert_id();

						for ($l=0; $l < 9; $l++) { 
							$this->store_players($playername[$l],$contact[$l],$playeremail[$l],$id);
						}
						for ($m=9; $m < 14; $m++) { 
							if($playername[$m] != ''){
								$this->store_players($playername[$m],$contact[$m],$playeremail[$m],$id);
							}
						}			        	
			        }
		        }


			}

		}
		$this->load->view('register', $this->data);
	}

	private function store($teamname,$division,$address,$landline,$mobile,$email,$teamcoach,$coachcontact,$coachemail,$teamcaptain,$teamcaptaincontact = '',$teamcaptainemail = '',$teamcaptain2 = '',$teamcaptaincontact2 = '',$teamcaptainemail2 = ''){

		$this->registerModel->storeTeam($teamname,$division,$address,$landline,$mobile,$email,$teamcoach,$coachcontact,$coachemail,$teamcaptain,$teamcaptaincontact,$teamcaptainemail,$teamcaptain2,$teamcaptaincontact2,$teamcaptainemail2);
	}

	private function store_players($playername,$contact = '',$playeremail = '',$id){
		$this->registerModel->storePlayer($playername,$contact,$playeremail,$id);
	}
}