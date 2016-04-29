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

			// Number of applications
			if($this->session->userdata('param1_value')){
				$param1_value = $this->session->userdata('param1_value');
				$param1_type = $this->session->userdata('param1_type');
			}else{
				$param1_value = date("Y-m-d")."_".date("Y-m-d");
				$param1_type = "Today";
			}
			$data['total_application'] = $this->admin_model->get_total_application($param1_value);

			// Top positions
			if($this->session->userdata('param2_value')){
				$param2_value = $this->session->userdata('param2_value');
				$param2_type = $this->session->userdata('param2_type');
			}else{
				$param2_value = date("Y-m-d")."_".date("Y-m-d");
				$param2_type = "Today";
			}
			$data['top_position'] = $this->admin_model->get_top_position($param2_value);

			// top education
			if($this->session->userdata('param3_value')){
				$param3_value = $this->session->userdata('param3_value');
				$param3_type = $this->session->userdata('param3_type');
			}else{
				$param3_value = date("Y-m-d")."_".date("Y-m-d");
				$param3_type = "Today";
			}
			$data['top_education'] = $this->admin_model->get_top_education($param3_value);

			// top city
			if($this->session->userdata('param4_value')){
				$param4_value = $this->session->userdata('param4_value');
				$param4_type = $this->session->userdata('param4_type');
			}else{
				$param4_value = date("Y-m-d")."_".date("Y-m-d");
				$param4_type = "Today";
			}
			$data['top_city'] = $this->admin_model->get_top_city($param4_value);

			// top 10 position
			$list_top_ten_position =  $this->admin_model->get_top_ten_position();

			// top 10 education
			$list_top_ten_education =  $this->admin_model->get_top_ten_education();

			// top 10 city
			$list_top_ten_city =  $this->admin_model->get_top_ten_city();


			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('admin_layout/dashboard',
				array('data' => $data,
						'list_top_ten_position' => $list_top_ten_position,
						'list_top_ten_education' => $list_top_ten_education,
						'list_top_ten_city' => $list_top_ten_city
					));
			$this->load->view('admin_layout/footer');

 	}

	public function search($param, $value, $type) {

			if($param == 1){
				$this->session->set_userdata('param1_value', $value);
				$this->session->set_userdata('param1_type', $type);
			}

			if($param == 2){
				$this->session->set_userdata('param2_value', $value);
				$this->session->set_userdata('param2_type', $type);
			}

			if($param == 3){
				$this->session->set_userdata('param3_value', $value);
				$this->session->set_userdata('param3_type', $type);
			}

			if($param == 4){
				$this->session->set_userdata('param4_value', $value);
				$this->session->set_userdata('param4_type', $type);
			}


			redirect('admin');

 	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login_admin');
	}


}
