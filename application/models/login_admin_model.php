<?php

class Login_admin_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function is_valid_old($username, $password)
	{
		$param['user_username'] = $username;
		$param['user_password'] = md5($password);
		$param['user_type_id'] = '1';
		$param['user_active_status'] = '1';
		
		$query = $this->db->get_where('users u', $param);
		
		# debug($this->db->last_query());

		if ($query->num_rows() == 0) return NULL;
		$data = $query->row_array();
		
		return array($data['user_id'], $data['user_type_id']);
	}

	function is_valid($username, $password)
	{
		$param['user_username'] = $username;
		$param['user_password'] = $password;
		$param['user_active_status'] = '1';
		
		$query = $this->db->get_where('users u', array('`user_username` =' => $username, 'user_active_status' => 1));
		if ($query->num_rows() == 0) return NULL;
		$data = $query->row_array();
		
		if (password_verify($password, $data['user_password'])) {
			return array($data['user_id'], $data['user_type_id']);
		}else{
			return NULL;
		}
	}

	
	
	
	
	
}