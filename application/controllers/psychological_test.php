<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Psychological_test extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('psychological_test_model');
		$this->load->library('session');
		$this->load->library('access');

		$this->session->set_userdata('menu_active', 1);
		
		$logged_admin = $this->session->userdata('logged_admin');
		if($logged_admin == ""){
			redirect('login_admin');
		}
	}
 	
	public function success() {
		
			$this->load->view('psychological_test/success');
	
 	}
	
	public function form($id = 0) {
		
			$data_head['title'] = "psychological test";

			$data_head['action'] = site_url().'psychological_test/form_action/'.$id;
			
			$data_user = array();
			$result_user = $this->access->get_data_user_admin($this->session->userdata('user_id'));
			
			if($result_user){
				$data_user  = $result_user;
			}
			
			
			$data = array();
			$data['row_id'] = "";
			if($id){
				$result = $this->psychological_test_model->read_id($id);
				if($result){
					$data  = $result;
					$data['row_id'] = $data['basic_info_id'];
				}
			}

			$list = $this->psychological_test_model->list_data();
			
			if($id){
				if($data['basic_info_status_id'] == 8 && $data['basic_info_test_status']==0){
					$this->load->view('psychological_test/form', array('data_head' => $data_head, 'data' => $data, 'list' => $list));
				}else{
					$this->load->view('admin_layout/page_not_found');
				}
			}else{
				$this->load->view('admin_layout/page_not_found');
			}
 	}
	
	public function view($id = 0) {
			
				$data_head['title'] = "psychological test";

				
				$data_user = array();
				$result_user = $this->access->get_data_user_admin($this->session->userdata('user_id'));
				
				if($result_user){
					$data_user  = $result_user;
				}
				
				
				$data = array();
				$data['row_id'] = "";
				if($id){
					$result = $this->psychological_test_model->read_id($id);
					if($result){
						$data  = $result;
						$data['row_id'] = $data['basic_info_id'];
					}
				}

				$list = $this->psychological_test_model->list_data();
				
				
					if($data['basic_info_test_status']==1){
						$this->load->view('psychological_test/form_view', array('data_head' => $data_head, 'data' => $data, 'list' => $list));
					}
 	}

	public function form_action($id = 0) {
		
		
		 // simpan di table

		$list = $this->psychological_test_model->list_data();
		foreach($list as $row):
			$data['answer_basic_info_id']	 				= $id;
			$data['answer_question_id']						= $row['question_id'];
			$data['answer_question_option_id']				= $this->input->post('i_option_'.$row['question_id']);
			$data['answer_value']							= $this->psychological_test_model->get_question_option_number($data['answer_question_option_id']);
			$this->psychological_test_model->create($data);
		endforeach;

		$data_basic_info['basic_info_test_date'] = date("Y-m-d");
		$data_basic_info['basic_info_test_status'] = 1;
		$this->psychological_test_model->update($data_basic_info, $id);

		
		redirect('psychological_test/success/');

		
		
	}
	
	public function delete($id){
		
		$delete = $this->psychological_test_model->delete($id);
		
		
		if($delete == 2){
			redirect('psychological_test/?err=4');
		}else{
			redirect('psychological_test/?did=3');
		}
	}




	
}