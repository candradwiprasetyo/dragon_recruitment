<?php

class Psychological_test_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}
	
	function list_data() {
		$query = "select * from questions order by question_id";
        $query = $this->db->query($query);
       // query();
        if ($query->num_rows() == 0)
            return array();
        $data = $query->result_array();
        foreach ($data as $index => $row) {}
        return $data;
	}

	function list_data_option($question_id) {
		$query = "select * from question_options 
				where question_id = '$question_id'
				order by question_option_id";
        $query = $this->db->query($query);
       // query();
        if ($query->num_rows() == 0)
            return array();
        $data = $query->result_array();
        foreach ($data as $index => $row) {}
        return $data;
	}

	function read_id($id)
	{
		$this->db->select('a.*', 1); // ambil seluruh data
		$this->db->where('a.basic_info_id', $id);
		$query = $this->db->get('basic_infos a', 1); // parameter limit harus 1
		$result = null; // inisialisasi variabel. biasakanlah, untuk mencegah warning dari php.
		foreach($query->result_array() as $row)	$result = ($row); // render dulu dunk!
		return $result; 
	}
	
	
	
	function create($data){

		$this->db->trans_start();
		$this->db->insert('answers', $data);
		$id = $this->db->insert_id();
		
		$this->db->trans_complete();
		return $id;
	}

	function update($data, $id){

		$this->db->trans_start();
		$this->db->where('basic_info_id', $id);
		$this->db->update('basic_infos', $data);
	
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

	function get_question_option_number($id)
	{
		$sql = "SELECT a.question_option_number as result
				FROM question_options a
				WHERE question_option_id = '$id'
				";
		
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		return $result['result'];
	}

	function answer_is_exist($basic_info_id, $question_option_id)
	{

		$sql = "SELECT count( a.answer_id ) AS result
									FROM answers a
									WHERE answer_basic_info_id = '$basic_info_id' and answer_question_option_id = '$question_option_id'	
				";
			
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		
		$result['result'] = ($result['result']) ? $result['result'] : '0';
		return $result['result'];
	}
	
}