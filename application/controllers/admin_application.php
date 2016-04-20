<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_application extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('admin_application_model');
		$this->load->library('session');
		$this->load->library('access');
		$this->load->library('pagination');
		$this->load->library('table');

		$this->session->set_userdata('menu_active', 3);
		
		$logged_admin = $this->session->userdata('logged_admin');
		if($logged_admin == ""){
			redirect('login_admin');
		}
	}

	public function index() {
		
			$data_head['title'] = "application";
			$data_head['add_button'] = site_url().'admin_application/form/';
			
			$data_user = array();
			$result = $this->access->get_data_user_admin($this->session->userdata('user_id'));
			
			if($result){
				$data_user  = $result;
			}
			
			$list =  $this->admin_application_model->list_data();
			
			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('admin_application/list', array('data_head' => $data_head, 'list' => $list));
			$this->load->view('admin_layout/footer'); 
	
 	}
 	
	public function index_manual() {
		
			$data_head['title'] = "application ";
			$data_head['add_button'] = site_url().'admin_application/form/';
			
			$data_user = array();
			$result = $this->access->get_data_user_admin($this->session->userdata('user_id'));
			
			if($result){
				$data_user  = $result;
			}
			
			//$list =  $this->admin_application_model->list_data();
			

			$jumlah= $this->admin_application_model->jumlah();
 
			$config['base_url'] = base_url().'admin_application/index_manual/';
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 10; 

			//Adding Enclosing Markup		
			$config['full_tag_open'] = '
			<div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
			<div class="row">
                    <div class="col-xs-6">
                        <div class="dataTables_info" id="example1_info"></div>
                    </div>
                    <div class="col-xs-6"><div class="dataTables_paginate paging_bootstrap">
                        <ul class="pagination">';
				$config['full_tag_close'] = '</ul>
                    </div>
                </div>
                </div>';

                //Customizing the First Link
                $config['first_tag_open'] = '<li>';
                $config['first_tag_close'] = '</li>';

                //Customizing the "Current Page" Link
                $config['cur_tag_open'] = '<li class="active"><a>';
                $config['cur_tag_close'] = '</a></li>';

                //Customizing the "Digit" Link
                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';

                //Customizing the "Next" Link
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';

                //Customizing the "Prev" Link
                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';

                //Customizing the Last Link
				$config['last_tag_open'] = '<li>';
				$config['last_tag_close'] = '</li>';
	 
			
			$dari = $this->uri->segment('3');
			$data_list['artikel'] = $this->admin_application_model->lihat($config['per_page'],$dari);
			$this->pagination->initialize($config); 
			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('admin_application/list_manual', $data_list);
			$this->load->view('admin_layout/footer');
	
 	}

 	public function list_data() {
		
			
			$this->load->view('admin_application/list_data');
			
	
 	}
	
	public function form($id = 0) {
		
			$data_head['title'] = "View application ";
			$data_head['action'] = site_url().'admin_application/form_action/'.$id;
			$data_head['close_button'] = site_url().'admin_application/';
			
			$data_user = array();
			$result_user = $this->access->get_data_user_admin($this->session->userdata('user_id'));
			
			if($result_user){
				$data_user  = $result_user;
			}
			
			
			$data = array();
			$data['row_id'] = "";
			if($id){
				$result = $this->admin_application_model->read_id($id);
				if($result){
					$data  = $result;
					$data['row_id'] = $data['basic_info_id'];

					switch($data['basic_info_license_type']){
						case '1': $data['license_type'] = "SIM A"; break;
						case '2': $data['license_type'] = "SIM B"; break;
						case '3': $data['license_type'] = "SIM C"; break;
					}
				}
			}
			
			
			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('admin_application/form', array('data_head' => $data_head, 'data' => $data));
			$this->load->view('admin_layout/footer'); 
		
 	}
	
	public function form_action($id = 0) {
		
		
		 // simpan di table
		$data['application_name']	 				= $this->input->post('i_name');
		$data['application_scope_id']	 			= $this->input->post('i_scope_id');
		$data['application_description'] 			= $this->input->post('i_desc');
		
		
		if($id){
			$this->admin_application_model->update($data, $id);
			redirect('admin_application/?did=2');
		}else{
			$this->admin_application_model->create($data);
			redirect('admin_application/?did=1');
		}
		
		
		
	}

	public function upload_file($type, $id) {
		
		$file_name	 				= $this->session->userdata('user_id')."_".time()."_".$_FILES['i_uploadBtn']['name'];

		 // simpan di table
		switch ($type) {
			case '1': $data['application_file1'] = $file_name; $application_file = "application_file1"; break;
			case '2': $data['application_file2'] = $file_name; $application_file = "application_file2"; break;
			case '3': $data['application_file3'] = $file_name; $application_file = "application_file3"; break;
			
		}

		$get_img = $this->admin_application_model->get_img('applications', $application_file, ' application_id = '.$id);
		
		if($get_img){
			unlink("assets/admin/file/".$get_img);
		}

		move_uploaded_file($_FILES['i_uploadBtn']['tmp_name'], "assets/admin/file/".$this->session->userdata('user_id')."_".time()."_".$_FILES['i_uploadBtn']['name']);
		

		$this->admin_application_model->update($data, $id);
		redirect('admin_application/?did=2');
		
		
		
		
	}
	
	public function delete($id){
		
		$delete = $this->admin_application_model->delete($id);
		
		
		if($delete == 2){
			redirect('admin_application/?err=4');
		}else{
			redirect('admin_application/?did=3');
		}
	}

	



	
}