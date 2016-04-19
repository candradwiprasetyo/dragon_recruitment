<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('edit_admin_model');
		$this->load->library('session');
		$this->load->library('access');

		$this->session->set_userdata('menu_active', 1);
		
		$logged_admin = $this->session->userdata('logged_admin');
		if($logged_admin == ""){
			redirect('login_admin');
		}
	}
 	
	
	public function index() {
		
			$data_head['title'] = "Edit profile ";
			$data_head['action'] = site_url().'edit_admin/form_action/'.$this->session->userdata('user_id');
			$data_head['close_button'] = site_url().'edit_admin/';
			
			$data_user = array();
			$result_user = $this->access->get_data_user_admin($this->session->userdata('user_id'));
			
			if($result_user){
				$data_user  = $result_user;
			}
			
			
			$data = array();
			$data['row_id'] = "";
			
				$result = $this->edit_admin_model->read_id($this->session->userdata('user_id'));
				if($result){
					$data  = $result;
					$data['row_id'] = $data['user_id'];

					$data['user_img'] = ($data['user_img']) ? $data['user_img'] : "default.png";
				}
			
			
			
			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('edit_admin/form', array('data_head' => $data_head, 'data' => $data));
			$this->load->view('admin_layout/footer');
		
 	}
	
	public function form_action($id = 0) {
		
		
		 // simpan di table
		$data['user_name']	 				= $this->input->post('i_name');
		$data['user_email']	 				= $this->input->post('i_email');

		if($_FILES['i_img']['name']){
			$data['user_img']	 				= $this->session->userdata('user_id')."_".time()."_".$_FILES['i_img']['name'];

			$get_img = $this->edit_admin_model->get_img('users', 'user_img', ' user_id = '.$id);
			if($get_img){
				unlink("assets/admin/img/user/".$get_img);
			}

			move_uploaded_file($_FILES['i_img']['tmp_name'], "assets/admin/img/user/".$this->session->userdata('user_id')."_".time()."_".$_FILES['i_img']['name']);
		}
		
		if($this->input->post('i_password')){

			$options = array('cost' => 11);
			$hash = password_hash($this->input->post('i_password'), PASSWORD_BCRYPT, $options);

			$data['user_password']	 				= $hash;
		}

		if($id){
			$this->edit_admin_model->update($data, $id);
			redirect('edit_admin/?did=2');
		}
		
		
		
	}
	
	




	
}