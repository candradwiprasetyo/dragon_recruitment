<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->library('access');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('recaptcha');
		
		$logged = $this->session->userdata('logged');
		if($logged){
			redirect('showcase');
		}
	}
 	
	public function index() {
		
		$this->load->library('facebook'); // Automatically picks appId and secret from config
		
		$data['title'] = "8BULBS";
		$list['list'] = "test";
		
		// captcha lama
		/*
		$this->load->helper('captcha');
		$vals = array(
			'image' => 'test', 
			'img_path' => './assets/capimg/',
			'img_url' => site_url().'assets/capimg/',
			 'img_width'	=> 120,
			'img_height' => 30,
			'expiration' => 7200
			);
		
		$cap = create_captcha($vals);
		
		$data_cap = array(
			'captcha_time'	=> $cap['time'],
			'ip_address'	=> $this->input->ip_address(),
			'word'	=> $cap['word']
			
			);
			
			// First, delete old captchas
		$expiration = time()-7200; // Two hour limit
		$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);	
		
		$query = $this->db->insert_string('captcha', $data_cap);
		$this->db->query($query);
		
		$this->session->set_userdata('keycode',md5($cap['word']));
		$data_img['captcha_img'] = $cap['image'];
		*/
		
 		$this->load->view('layout/header', array('data' => $data));
		//$this->load->view('layout/header', $data);
		$data_img['id1'] = "home/feature_view/".$this->home_model->get_project_id(1, 1);
		$data_img['id2'] = "home/feature_view/".$this->home_model->get_project_id(2, 2);
		$data_img['id3'] = "home/feature_view/".$this->home_model->get_project_id(3, 3);
		$data_img['id4'] = "home/feature_view/".$this->home_model->get_project_id(4, 4);
		$data_img['id5'] = "home/feature_view/".$this->home_model->get_project_id(5, 5);
		$data_img['id6'] = "home/feature_view/".$this->home_model->get_project_id(6, 6);
		
		$data_img['no1'] = $this->home_model->get_project_img(1, 1);
		$data_img['no2'] = $this->home_model->get_project_img(2, 2);
		$data_img['no3'] = $this->home_model->get_project_img(3, 3);
		$data_img['no4'] = $this->home_model->get_project_img(4, 4);
		$data_img['no5'] = $this->home_model->get_project_img(5, 5);
		$data_img['no6'] = $this->home_model->get_project_img(6, 6);
		
		if($this->session->userdata('logged') != 1){
			$data_img['login_facebook_url'] = $this->facebook->getLoginUrl(array(
					'redirect_uri' => site_url('login/submit_login_facebook'), 
					'scope' => 'public_profile, email' // permissions here
			));
		}else{
			$data_img['login_facebook_url'] = "";
		}
		
		$this->load->view('home/index', $data_img);
		$this->load->view('layout/footer'); 
		
 	}
	
	public function signup() {
		
		$this->load->helper(array('form','url'));

		//$captcha = $this->input->post('i_captcha');
		 
		$data['user_type_id']	 				= $this->input->post('t_sign_up3');
		$data['user_category_id']	 			= 1;
		$data['user_first_name'] 				= $this->input->post('i_first_name');
		$data['user_last_name'] 				= $this->input->post('i_last_name');
		$data['user_email'] 					= $this->input->post('i_email');
		$data['user_username']	 				= $this->input->post('i_username');
		$data['user_password']	 				= md5($this->input->post('i_password'));
		$data['user_active_status']	 			= 1;
		
		
		
		if($this->session->userdata('captcha') == $this->input->post('i_captcha')){
			
		/*
		// Catch the user's answer
		$captcha_answer = $this->input->post('g-recaptcha-response');
		
		// Verify user's answer
		$response = $this->recaptcha->verifyResponse($captcha_answer);
		
		// Processing ...	
		if ($response['success']) {
			*/
		
			$get_exist_username = $this->home_model->get_exist_username($data['user_username']);
			
			if($get_exist_username > 0){
				redirect("login?err=2");
			}else{
			
				$id = $this->home_model->create_user($data);
				
				if($data['user_type_id'] == 2){
					header("Location: ../register?user_id=$id");
				}else{
					//header("Location: ../register?user_id=$id");
					header("Location: ../account_regular/sign_up/$id");
				}
			}
		
		}else{
			redirect("login?err=3");
		}
		
 	}
	
	public function search(){
		$location_id = $this->input->post('i_location_id');
		$pc_id = $this->input->post('i_pc_id');
		//echo $location_id."-".$pc_id;
		redirect("creative?location_id=$location_id&pc_id=$pc_id");
		
	}
	
	public function slider_view($id){
		
		$data['title'] = "Slider View";
		
		$data_slider = array();
		$result = $this->home_model->read_slider_id($id);
		
		if($result){
			$data_slider  = $result;
		}
		
		$this->load->view('layout/header', array('data' => $data));
		$this->load->view('home/homepage/slider_view', $data_slider);
		$this->load->view('layout/footer'); 
	}
	
	public function feature_view($id){
		
		$data['title'] = "Feature View";
		
		$data_feature = array();
		$result = $this->home_model->read_feature_id($id);
		
		if($result){
			$data_feature  = $result;
		}
		
		$this->load->view('layout/header', array('data' => $data));
		$this->load->view('home/homepage/feature_view', $data_feature);
		$this->load->view('layout/footer'); 
	}
	
	public function create_captcha(){
		$captcha=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"),0,5); // string yg akan diacak membentuk captcha 0-z dan sebanyak 6 karakter
		//$_SESSION['captcha']=$captcha;
		$this->session->set_userdata('captcha', $captcha);
		
		$gambar=ImageCreate(100,35); // ukuran kotak width=60 dan height=20
		$wk=ImageColorAllocate($gambar, 138, 190, 207); // membuat warna kotak -> Navajo White
		$wt=ImageColorAllocate($gambar, 255, 255, 255); // membuat warna tulisan -> Putih
		ImageFilledRectangle($gambar, 0, 0, 50, 100, $wk);
		ImageString($gambar, 10, 30, 10, $captcha, $wt);
		ImageJPEG($gambar);
	}
}