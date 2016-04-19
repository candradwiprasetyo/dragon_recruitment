<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_test_question extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('admin_test_question_model');
		$this->load->library('session');
		$this->load->library('access');

		$this->session->set_userdata('menu_active', 2);
		
		$logged_admin = $this->session->userdata('logged_admin');
		if($logged_admin == ""){
			redirect('login_admin');
		}
	}
 	
	public function index() {
		
			$data_head['title'] = "Psychological Test";
			$data_head['add_button'] = site_url().'admin_test_question/form/';
			
			$data_user = array();
			$result = $this->access->get_data_user_admin($this->session->userdata('user_id'));
			
			if($result){
				$data_user  = $result;
			}
			
			$list =  $this->admin_test_question_model->list_data();
			
			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('admin_test_question/list', array('data_head' => $data_head, 'list' => $list));
			$this->load->view('admin_layout/footer'); 
	
 	}
	
	public function form($id = 0) {
		
			$data_head['title'] = "Psychological Test";
			$data_head['action'] = site_url().'admin_test_question/form_action/'.$id;
			$data_head['close_button'] = site_url().'admin_test_question/';
			
			$data_user = array();
			$result_user = $this->access->get_data_user_admin($this->session->userdata('user_id'));
			
			if($result_user){
				$data_user  = $result_user;
			}
			
			
			$data = array();
			$data['row_id'] = "";
			if($id){
				$result = $this->admin_test_question_model->read_id($id);
				if($result){
					$data  = $result;
					$data['row_id'] = $data['question_id'];

					$list_option =  $this->admin_test_question_model->list_data_option($id);

					$no = 1 ;
					foreach ($list_option as $row_option) {
						$data['option'.$no] = $row_option['question_option_name']; 
						$data['option_hidden'.$no] = $row_option['question_option_id']; 
						$no++;
					}
					

				}
			}
			
			
			$this->load->view('admin_layout/header', array( 'data_head' => $data_head, 'data_user' => $data_user));
			$this->load->view('admin_test_question/form', array('data_head' => $data_head, 'data' => $data));
			$this->load->view('admin_layout/footer'); 
		
 	}
	
	public function form_action($id = 0) {
		
		
		 // simpan di table
		$data['question_name']	 				= $this->input->post('i_name');
		$data['question_description']	 		= $this->input->post('i_desc');
		
		
		if($id){

			$this->admin_test_question_model->update($data, $id);

			for($i=1; $i<=2; $i++){
				$id_option = $this->input->post('i_option_hidden'.$i);
				$data_option['question_option_name']	= $this->input->post('i_option'.$i);
				$this->admin_test_question_model->update_option($data_option, $id_option);
			}

			redirect('admin_test_question/?did=2');

		}else{

			$question_id = $this->admin_test_question_model->create($data);

			for($i=1; $i<=2; $i++){
				$data_option['question_id']				= $question_id;
				$data_option['question_option_name']	= $this->input->post('i_option'.$i);
				$this->admin_test_question_model->create_option($data_option);
			}

			
			redirect('admin_test_question/?did=1');
		}
		
		
		
	}
	
	public function delete($id){
		
		$delete = $this->admin_test_question_model->delete($id);
		
		
		if($delete == 2){
			redirect('admin_test_question/?err=4');
		}else{
			redirect('admin_test_question/?did=3');
		}
	}




	
}