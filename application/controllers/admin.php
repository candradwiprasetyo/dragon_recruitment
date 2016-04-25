<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('session');
		$this->load->library('access');

		$this->session->set_userdata('menu_active', 5);
		
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
			
			if($this->session->userdata('param1')){
				$param1_value = $this->session->userdata('param1_value');
				$param1_type = $this->session->userdata('param1_type');
			}else{
				$param1_value = date("Y-m-d")."_".date("Y-m-d");
				$param1_type = "Today";
			}

			$data['total_application'] = $this->admin_model->get_total_application($param1_value);
			
			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('admin_layout/dashboard', array('data' => $data));
			$this->load->view('admin_layout/footer'); 

 	}
	
	public function search($param, $value, $type) {

			if($param == 1){
				$this->session->set_userdata('param1_value', $value);
				$this->session->set_userdata('param1_type', $type);
			}
			

			redirect('admin');

 	}

 	
	
	
}