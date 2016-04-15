<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('login_admin_model');
		$this->load->library('session');
		$this->load->library('access');
	}
 	
	public function index() {
		
			$logged_admin = $this->session->userdata('logged_admin');
			$user_type_id = $this->session->userdata('user_type_id');
			
		if($logged_admin != "" && $user_type_id == 1){
			redirect('admin');
			
		}else{
			$data_head['title'] = "login admin";
			
			$this->load->view('admin_layout/login_admin', array('data_head' => $data_head));
		}
		
 	}
	
	public function login() {
		
		
		$username 	= $this->input->post('i_first_name');
		$password 	= $this->input->post('i_password');
		
		$user_id = $this->login_admin_model->is_valid($username, $password);

		if(!$user_id)
		{				
			
			redirect('login_admin?err=1');
			
		}else{
			$this->session->set_userdata('logged_admin', 1);
			$this->session->set_userdata('user_id', $user_id[0]);
			$this->session->set_userdata('user_type_id', $user_id[1]);
			
			redirect('admin?did=1');
			
		}
	
		
	}
	
	
}