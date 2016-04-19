<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_user extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('admin_user_model');
		$this->load->library('session');
		$this->load->library('access');

		$this->session->set_userdata('menu_active', 4);
		
		$logged_admin = $this->session->userdata('logged_admin');
		if($logged_admin == ""){
			redirect('login_admin');
		}
	}
 	
	public function index() {
		
			$data_head['title'] = "user";
			$data_head['add_button'] = site_url().'admin_user/form/';
			
			$data_user = array();
			$result = $this->access->get_data_user_admin($this->session->userdata('user_id'));
			
			if($result){
				$data_user  = $result;
			}
			
			$list =  $this->admin_user_model->list_data();
			
			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('admin_user/list', array('data_head' => $data_head, 'list' => $list));
			$this->load->view('admin_layout/footer'); 
	
 	}
	
	public function form($id = 0) {
		
			$data_head['title'] = "user ";
			$data_head['action'] = site_url().'admin_user/form_action/'.$id;
			$data_head['close_button'] = site_url().'admin_user/';
			
			$data_user = array();
			$result_user = $this->access->get_data_user_admin($this->session->userdata('user_id'));
			
			if($result_user){
				$data_user  = $result_user;
			}
			
			
			$data = array();
			$data['row_id'] = "";
			if($id){
				$result = $this->admin_user_model->read_id($id);
				if($result){
					$data  = $result;
					$data['row_id'] = $data['user_id'];
				}
			}

			$list_user_type =  $this->admin_user_model->list_user_type();
			
			
			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('admin_user/form', array('data_head' => $data_head, 'data' => $data, 'list_user_type' => $list_user_type));
			$this->load->view('admin_layout/footer'); 
		
 	}
	
	public function form_action($id = 0) {
		
		
		 // simpan di table
		$data['user_name']	 				= $this->input->post('i_name');
		$data['user_email']	 				= $this->input->post('i_email');
		$data['user_type_id']	 			= $this->input->post('i_user_type_id');


		if($this->input->post('i_password')){
			$options = array('cost' => 11);
			$hash = password_hash($this->input->post('i_password'), PASSWORD_BCRYPT, $options);

			$data['user_password']	 				= $hash;
		}

		if($_FILES['i_img']['name']){
			$data['user_img']	 				= $this->session->userdata('user_id')."_".time()."_".$_FILES['i_img']['name'];

			$get_img = $this->admin_user_model->get_img('users', 'user_img', ' user_id = '.$id);
			if($get_img){
				unlink("assets/admin/img/user/".$get_img);
			}

			move_uploaded_file($_FILES['i_img']['tmp_name'], "assets/admin/img/user/".$this->session->userdata('user_id')."_".time()."_".$_FILES['i_img']['name']);
		}

		if($id){
			$this->admin_user_model->update($data, $id);
			redirect('admin_user/?did=2');
		}else{
			$data['user_active_status']	 				= 1;
			$this->admin_user_model->create($data);
			redirect('admin_user/?did=1');
		}
		
		
		
	}
	
	public function delete($id){
		
		$delete = $this->admin_user_model->delete($id);
		
		
		if($delete == 2){
			redirect('admin_user/?err=4');
		}else{
			redirect('admin_user/?did=3');
		}
	}




	
}