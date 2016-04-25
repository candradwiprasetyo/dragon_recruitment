<?php

class Admin_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function read_id($id)
	{
		$this->db->select('a.*, b.user_type_name', 1); // ambil seluruh data
		$this->db->join('user_types b', 'b.user_type_id = a.user_type_id');
		$this->db->where('a.user_id', $id);
		$query = $this->db->get('users a', 1); // parameter limit harus 1
		$result = null; // inisialisasi variabel. biasakanlah, untuk mencegah warning dari php.
		foreach($query->result_array() as $row)	$result = ($row); // render dulu dunk!
		return $result; 
	}
	
	
	function get_total_application($param)
	{
		$param = explode("_", $param);
		$date1 = $param[0];
		$date2 = $param[1];
		$sql = "SELECT count(basic_info_id) AS result				
				FROM basic_infos
				WHERE basic_info_date >= '$date1' AND basic_info_date <= '$date2'; 
				";

		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		
		$result['result'] = ($result['result']) ? $result['result'] : 0;
		return $result['result'];
	}

	public function get_format_param1_type($data){
 		$data = str_replace("%20", " ", $data);
 		if($data == 'Apply'){
 			$data = 'Custom Range';
 		}
 		return $data;

 	}
	
}