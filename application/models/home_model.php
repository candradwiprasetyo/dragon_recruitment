<?php

class Home_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}
	
	
	function read_slider_id($id)
	{
		$this->db->select('a.*', 1); // ambil seluruh data
		$this->db->where('a.slider_id', $id);
		$query = $this->db->get('sliders a', 1); // parameter limit harus 1
		$result = null; // inisialisasi variabel. biasakanlah, untuk mencegah warning dari php.
		foreach($query->result_array() as $row)	$result = ($row); // render dulu dunk!
		return $result; 
	}
	
	function read_feature_id($id)
	{
		$this->db->select('a.*', 1); // ambil seluruh data
		$this->db->where('a.feature_id', $id);
		$query = $this->db->get('features a', 1); // parameter limit harus 1
		$result = null; // inisialisasi variabel. biasakanlah, untuk mencegah warning dari php.
		foreach($query->result_array() as $row)	$result = ($row); // render dulu dunk!
		return $result; 
	}
	
	
	function create_user($data){
		$this->db->trans_start();
		$this->db->insert('users', $data);
		$id = $this->db->insert_id();
		
		if($data['user_type_id'] == 2){
			$data_creative['user_id'] = $id;
			$this->db->insert('creatives', $data_creative);
		}
		
		$this->db->trans_complete();
		return $id;
	}

	function get_project_img($limit)
	{
		$sql = "select feature_img from features  order by feature_id limit $limit
				";
		
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		return $result['feature_img'];
	}
	
	

	function get_exist_username($username)
	{
		$sql = "select count(user_id) as result from users where user_username = '$username'
				";
		
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		
		return ($result['result']) ? $result['result'] : 0;
	}
	
	
	
}