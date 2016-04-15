<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Captcha extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('session');
		
		
	}
 /*
 public function index(){
  $this->load->helper(array('captcha','form'));
  $this->load->library('session');
  $vals = array(
   'img_path' => './assets/capimg/',
   'img_url' => site_url().'assets/capimg/',
   'img_width' => 150,
   'img_height' => 30
  );
  $cap = create_captcha($vals);
  $this->session->set_userdata('keycode',md5($cap['word']));
  $data['captcha_img'] = $cap['image'];
  $this->load->view('v_captcha',$data);
 }
 
 public function submit(){
  $this->load->helper(array('form','url'));
  $this->load->library('session');
  $nama = $this->input->post('nama');
  $captcha = $this->input->post('captcha');
  if(md5($captcha)==$this->session->userdata('keycode')){
   $data['nama'] = $nama;
   $data['captcha']= $captcha;
   $this->session->unset_userdata('keycode');
   $this->load->view('v_success',$data);
  }else{
   redirect('captcha?cap_error=1','refresh');
  }
 }*/
 
 	public function index(){
		$this->load->helper('captcha');
		$vals = array(
			'img_path' => './assets/capimg/',
			'img_url' => site_url().'assets/capimg/'
			);
		
		$cap = create_captcha($vals);
		
		$data = array(
			'captcha_time'	=> $cap['time'],
			'ip_address'	=> $this->input->ip_address(),
			'word'	=> $cap['word']
			);
		
		$query = $this->db->insert_string('captcha', $data);
		$this->db->query($query);
		
			$this->session->set_userdata('keycode',md5($cap['word']));
		  	$data['captcha_img'] = $cap['image'];
		  	$this->load->view('v_captcha',$data);
	}
	
	public function submit(){
		 $this->load->helper(array('form','url'));
		  
		  $nama = $this->input->post('nama');
		  $captcha = $this->input->post('captcha');
		  
		  if(md5($captcha)==$this->session->userdata('keycode')){
		   $data['nama'] = $nama;
		   $data['captcha']= $captcha;
		   $this->session->unset_userdata('keycode');
		   $this->load->view('v_success',$data);
		  }else{
		   redirect('captcha?cap_error=1','refresh');
		  }
	}
 
}



/* End of file registrasi.php */
/* Location: ./application/controllers/registrasi.php */