<?php

class Edit_admin_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}
	

	function read_id($id)
	{
		$this->db->select('a.*', 1); // ambil seluruh data
		$this->db->where('a.user_id', $id);
		$query = $this->db->get('users a', 1); // parameter limit harus 1
		$result = null; // inisialisasi variabel. biasakanlah, untuk mencegah warning dari php.
		foreach($query->result_array() as $row)	$result = ($row); // render dulu dunk!
		return $result; 
	}
	
	
	

	function update($data, $id){

		$this->db->trans_start();
		$this->db->where('user_id', $id);
		$this->db->update('users', $data);
	
		$this->db->trans_complete();
		return $id;
	}


	function get_img($table, $column, $param){



		$sql = "select $column as result from $table where $param";
		
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		return $result['result'];
	
		

	}	
	
}