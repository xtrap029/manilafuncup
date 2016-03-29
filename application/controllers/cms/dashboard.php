<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller {

	var $data = array();

	public function __construct(){
		parent::__construct();

		$this->load->library('session');
		$this->load->model('cms/teamModel');

		if(!$this->session->userdata('user')){
			header('location:'.base_url().'cms/login');
		}
		
		$this->data['menu'] = "dash";
	}

	public function index(){
		$this->data['title'] = "CMS | Dashboard";

		$this->count_status("approved");
		$this->data['team'] = $this->team;
		$this->count_status("new");
		$this->data['pending'] = $this->team;
		$this->count_status("declined");
		$this->data['declined'] = $this->team;

		$this->count_players("approved");
		$this->data['player'] = $this->players;
		$this->count_players("new");
		$this->data['pending_player'] = $this->players;
		$this->count_players("declined");
		$this->data['declined_player'] = $this->players;

		$this->latest_registration();
		$this->data['latest'] = $this->latest;
		$this->get_newest_team();
		$this->data['latest_team'] = $this->latest_team;

		$this->load->view('cms/dashboard', $this->data);
	}

	private function count_status($status){
		$this->team = $this->teamModel->countStatus($status);
	}

	private function count_players($status){
		$this->players = $this->teamModel->countPlayers($status);
	}

	private function latest_registration(){
		$this->latest = $this->teamModel->latestRegistration();
	}

	private function get_newest_team(){
		$this->latest_team = $this->teamModel->getLatestTeam();
	}
}