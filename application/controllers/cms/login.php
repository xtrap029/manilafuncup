<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	var $data = array();

	public function __construct(){
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('form');
		$this->load->model('cms/userModel');

		if($this->session->userdata('user')){
			header('location:'.base_url().'cms/dashboard');
		}
	}

	public function index(){
		$this->data['title'] = "CMS | Login";

		if($_POST){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required|max_length[20]');
			$this->form_validation->set_rules('password', 'Password', 'required|max_length[20]');

			if($this->form_validation->run() != FALSE){
				extract($_POST);

				$this->login($username,sha1($password));
				$login = $this->login;

				if(!empty($login)){
					$this->session->set_userdata('user', $username);
					header('location:'.base_url().'cms/dashboard');
				}
				else{
					$this->data['error'] = "Incorrect Username / Password";
				}
			}
		}

		$this->load->view('cms/login', $this->data);
	}

	public function logout(){
		$this->session->sess_destroy();
		header('location:'.base_url().'cms/login');
	}
	
	private function login($username,$password){
		$this->login = $this->userModel->login($username,$password);
	}
}