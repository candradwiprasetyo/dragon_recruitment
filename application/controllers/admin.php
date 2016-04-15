<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('session');
		$this->load->library('access');
		
		$logged_admin = $this->session->userdata('logged_admin');
		if($logged_admin == ""){
			redirect('login_admin');
		}
		
		
	}
 	
	public function index() {

			$data_head['title'] = "Dashboard";
			
			$data_user = array();
			$result = $this->admin_model->read_id($this->session->userdata('user_id'));
				
			if($result){
				$data_user  = $result;
			}
			
			
			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('admin_layout/home');
			$this->load->view('admin_layout/footer'); 

 	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('login_admin');
	}
	
	
}