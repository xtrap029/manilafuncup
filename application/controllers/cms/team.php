<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class team extends CI_Controller {

	var $data = array();

	public function __construct(){
		parent::__construct();

		$this->load->library('session');

		if(!$this->session->userdata('user')){
			header('location:'.base_url().'cms/login');
		}

		$this->load->model('cms/teamModel');
		$this->data['menu'] = "team";
	}

	public function index(){
		$this->data['title'] = "CMS | Playing Teams";

		$this->showDivision('men');
		$this->data['men'] = $this->teams;
		$this->showDivision('women');
		$this->data['women'] = $this->teams;
		$this->showDivision('coed');
		$this->data['coed'] = $this->teams;

		$this->load->view('cms/team', $this->data);
	}

	private function showDivision($div){
		$this->teams = $this->teamModel->showDivision($div);
	}
}