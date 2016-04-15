<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_computer extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('admin_computer_model');
		$this->load->library('session');
		$this->load->library('access');

		$this->session->set_userdata('menu_active', 1);
		
		$logged_admin = $this->session->userdata('logged_admin');
		if($logged_admin == ""){
			redirect('login_admin');
		}
	}
 	
	public function index() {
		
			$data_head['title'] = "tools";
			$data_head['add_button'] = site_url().'admin_computer/form/';
			
			$data_user = array();
			$result = $this->access->get_data_user_admin($this->session->userdata('user_id'));
			
			if($result){
				$data_user  = $result;
			}
			
			$list =  $this->admin_computer_model->list_data();
			
			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('admin_computer/list', array('data_head' => $data_head, 'list' => $list));
			$this->load->view('admin_layout/footer'); 
	
 	}
	
	public function form($id = 0) {
		
			$data_head['title'] = "tools ";
			$data_head['action'] = site_url().'admin_computer/form_action/'.$id;
			$data_head['close_button'] = site_url().'admin_computer/';
			
			$data_user = array();
			$result_user = $this->access->get_data_user_admin($this->session->userdata('user_id'));
			
			if($result_user){
				$data_user  = $result_user;
			}
			
			
			$data = array();
			$data['row_id'] = "";
			if($id){
				$result = $this->admin_computer_model->read_id($id);
				if($result){
					$data  = $result;
					$data['row_id'] = $data['computer_id'];
				}
			}
			
			
			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('admin_computer/form', array('data_head' => $data_head, 'data' => $data));
			$this->load->view('admin_layout/footer'); 
		
 	}
	
	public function form_action($id = 0) {
		
		
		 // simpan di table
		$data['computer_name']	 				= $this->input->post('i_name');
		
		
		if($id){
			$this->admin_computer_model->update($data, $id);
			redirect('admin_computer/?did=2');
		}else{
			$this->admin_computer_model->create($data);
			redirect('admin_computer/?did=1');
		}
		
		
		
	}
	
	public function delete($id){
		
		$delete = $this->admin_computer_model->delete($id);
		
		
		if($delete == 2){
			redirect('admin_computer/?err=4');
		}else{
			redirect('admin_computer/?did=3');
		}
	}




	
}