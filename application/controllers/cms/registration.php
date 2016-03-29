<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registration extends CI_Controller {

	var $data = array();

	public function __construct(){
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('form');

		if(!$this->session->userdata('user')){
			header('location:'.base_url().'cms/login');
		}

		$this->load->model('cms/teamModel');
		$this->data['menu'] = "reg";
	}

	public function index(){
		$this->data['title'] = "CMS | Registration";

		$this->show_teams('all');
		$this->data['teams'] = $this->teams;

		$this->load->view('cms/registration', $this->data);
	}

	public function show($id){
		$this->data['title'] = "CMS | Read Registration";

		$this->get_team($id);
		$this->data['team'] = $this->team;

		$this->get_team_players($id);
		$this->data['players'] = $this->players;

		$this->load->view('cms/registration_show', $this->data);
	}

	public function edit($id){
		$this->data['title'] = "CMS | Edit Registration";

		if($_POST){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('team_name', 'Team Name', 'required|max_length[50]');
			$this->form_validation->set_rules('division', 'Division', 'required|max_length[6]');
			$this->form_validation->set_rules('address', 'Address', 'required|max_length[200]');
			$this->form_validation->set_rules('landline', 'Landline', 'required|max_length[50]');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required|max_length[20]');
			$this->form_validation->set_rules('email', 'Email', 'required|max_length[50]|valid_email');
			$this->form_validation->set_rules('notes', 'Notes', 'max_length[500]');
			$this->form_validation->set_rules('status', 'Status', 'required|max_length[10]');

			$this->form_validation->set_rules('team_coach', 'Team Coach', 'required|max_length[150]');
			$this->form_validation->set_rules('team_coach_email', 'Coach Email', 'max_length[50]');
			$this->form_validation->set_rules('team_coach_contact', 'Coach Contact Number', 'max_length[50]');

			$this->form_validation->set_rules('team_captain[0]', 'Team Captain', 'required|max_length[150]');
			$this->form_validation->set_rules('team_captain_contact[0]', 'Team Captain Contact', 'max_length[50]');
			$this->form_validation->set_rules('team_captain_email[0]', 'Team Captain Email', 'max_length[50]');

			$this->form_validation->set_rules('team_captain[1]', 'Team Captain', 'max_length[150]');
			$this->form_validation->set_rules('team_captain_contact[1]', 'Team Captain Contact', 'max_length[50]');
			$this->form_validation->set_rules('team_captain_email[1]', 'Team Captain Email', 'max_length[50]');

			for ($i=0; $i < 14 ; $i++) { 
				$this->form_validation->set_rules('player_contact['.$i.']', 'Player Contact', 'max_length[50]');
				$this->form_validation->set_rules('player_email['.$i.']', 'Player Email', 'max_length[50]');
			}

			for ($j=0; $j < 9 ; $j++) { 
				$this->form_validation->set_rules('player_name['.$j.']', 'Player Name', 'required|max_length[150]');
			}

			for ($k=9; $k < 14; $k++) { 
				$this->form_validation->set_rules('player_name['.$k.']', 'Player Name', 'max_length[150]');
			}

			if ($this->form_validation->run() != FALSE){
				extract($_POST);

				$this->update($id,$team_name,$division,$address,$landline,$mobile,$email,$notes,$status,$team_coach,$team_coach_email,$team_coach_contact,$team_captain[0],$team_captain_contact[0],$team_captain_email[0],$team_captain[1],$team_captain_contact[1],$team_captain_email[1]);

				for ($l=0; $l < 9; $l++) { 
					$this->update_players($player_name[$l],$player_contact[$l],$player_email[$l],$player_id[$l]);
				}
				for ($m=9; $m < 14; $m++) { 
					//update player
					if($player_name[$m] != '' && $player_id[$m] != ''){
						$this->update_players($player_name[$m],$player_contact[$m],$player_email[$m],$player_id[$m]);
					}
					//new player
					else if($player_name[$m] != ''){
						$this->store_players($player_name[$m],$player_contact[$m],$player_email[$m],$id);
					}
					//delete player
					else if($player_name[$m] == '' && $player_id[$m] != ''){
						$this->delete_players($player_id[$m]);
					}
				}
				$this->session->set_flashdata('message', 'success');
        		redirect(current_url());
			}
		}

		$this->get_team($id);
		$this->data['team'] = $this->team;

		$this->get_team_players($id);
		$this->data['players'] = $this->players;

		$this->load->view('cms/registration_edit', $this->data);
	}

	private function show_teams($sort){
		$this->teams = $this->teamModel->showTeam($sort);
	}

	private function get_team($id){
		$this->team = $this->teamModel->getTeam($id);
	}

	private function get_team_players($id){
		$this->players = $this->teamModel->getTeamPlayers($id);
	}

	private function update($id,$team_name,$division,$address,$landline,$mobile,$email,$notes,$status,$team_coach,$team_coach_email = '',$team_coach_contact = '',$team_captain,$team_captain_contact = '',$team_captain_email = '',$team_captain2 = '',$team_captain_contact2 = '',$team_captain_email2 = ''){

		$this->teamModel->updateTeam($id,$team_name,$division,$address,$landline,$mobile,$email,$notes,$status,$team_coach,$team_coach_email,$team_coach_contact,$team_captain,$team_captain_contact,$team_captain_email,$team_captain2,$team_captain_contact2,$team_captain_email2);
	}

	private function update_players($name,$contact = '',$email = '',$id){
		$this->teamModel->updatePlayer($name,$contact,$email,$id);
	}

	private function store_players($playername,$contact = '',$playeremail = '',$id){
		$this->teamModel->storePlayer($playername,$contact,$playeremail,$id);
	}

	private function delete_players($id){
		$this->teamModel->deletePlayer($id);
	}
}