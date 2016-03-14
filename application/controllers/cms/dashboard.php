<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller {

	var $data = array();

	public function __construct(){
		parent::__construct();

		$this->load->library('session');

		if(!$this->session->userdata('user')){
			header('location:'.base_url().'cms/login');
		}
	}

	public function index(){
		$this->data['title'] = "CMS | Dashboard";

		$this->load->view('cms/dashboard', $this->data);
	}
}