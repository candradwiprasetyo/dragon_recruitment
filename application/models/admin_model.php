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

	function get_top_position($param)
	{

		$param = explode("_", $param);
		$date1 = $param[0];
		$date2 = $param[1];
		$sql = "SELECT a.position_id, a.position_name, jumlah
								FROM positions a
								JOIN (
								
									SELECT count( a.basic_info_id ) AS jumlah, portfolio_position_id
									FROM basic_infos a
									JOIN portfolios b on b.basic_info_id = a.basic_info_id
									WHERE basic_info_date >= '$date1' AND basic_info_date <= '$date2'
									GROUP BY b.portfolio_position_id
								) AS b ON b.portfolio_position_id = a.position_id
								order by jumlah desc, position_id asc
								limit 1; 
				";
				
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		
		$result['position_name'] = ($result['position_name']) ? $result['position_name'] : '-';
		return $result['position_name'];
	}

	function get_top_education($param)
	{

		$param = explode("_", $param);
		$date1 = $param[0];
		$date2 = $param[1];
		$sql = "SELECT a.education_type_name AS result, jumlah
								FROM education_types a
								JOIN (
								
									SELECT count( a.basic_info_id ) AS jumlah, basic_info_last_education_type_id
									FROM basic_infos a
									WHERE basic_info_date >= '$date1' AND basic_info_date <= '$date2'
									GROUP BY a.basic_info_last_education_type_id
								) AS b ON b.basic_info_last_education_type_id = a.education_type_id
								order by jumlah desc, education_type_id asc
								limit 1; 
				";
				
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		
		$result['result'] = ($result['result']) ? $result['result'] : '-';
		return $result['result'];
	}

	function get_top_city($param)
	{

		$param = explode("_", $param);
		$date1 = $param[0];
		$date2 = $param[1];
		$sql = "SELECT a.city_name AS result, jumlah
								FROM city a
								JOIN (
								
									SELECT count( a.basic_info_id ) AS jumlah, basic_info_city_id
									FROM basic_infos a
									WHERE basic_info_date >= '$date1' AND basic_info_date <= '$date2'
									GROUP BY a.basic_info_city_id
								) AS b ON b.basic_info_city_id = a.city_id
								order by jumlah desc, city_id asc
								limit 1; 
				";
				
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		
		$result['result'] = ($result['result']) ? $result['result'] : '-';
		return $result['result'];
	}

	public function get_format_param_type($data){
 		$data = str_replace("%20", " ", $data);
 		if($data == 'Apply'){
 			$data = 'Custom Range';
 		}
 		return $data;

 	}

 	function get_total_application_bydate($date)
	{

		$sql = "SELECT count( a.basic_info_id ) AS result, basic_info_city_id
									FROM basic_infos a
									WHERE basic_info_date = '$date'	
				";
				
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		
		$result['result'] = ($result['result']) ? $result['result'] : '0';
		return $result['result'];
	}

	function get_top_ten_position()
	{

		$query = "SELECT a.position_id, a.position_name, jumlah
								FROM positions a
								LEFT JOIN (
								
									SELECT count( a.basic_info_id ) AS jumlah, portfolio_position_id
									FROM basic_infos a
									JOIN portfolios b on b.basic_info_id = a.basic_info_id
									GROUP BY b.portfolio_position_id
								) AS b ON b.portfolio_position_id = a.position_id
								order by jumlah desc, position_id asc
								limit 10";
        $query = $this->db->query($query);
       // query();
        if ($query->num_rows() == 0)
            return array();
        $data = $query->result_array();
        foreach ($data as $index => $row) {}
        return $data;
	}

	function get_top_ten_education()
	{

		$query = "SELECT a.education_type_name, jumlah
								FROM education_types a
								JOIN (
								
									SELECT count( a.basic_info_id ) AS jumlah, basic_info_last_education_type_id
									FROM basic_infos a
									GROUP BY a.basic_info_last_education_type_id
								) AS b ON b.basic_info_last_education_type_id = a.education_type_id
								order by jumlah desc, education_type_id asc
								limit 10";
        $query = $this->db->query($query);
       // query();
        if ($query->num_rows() == 0)
            return array();
        $data = $query->result_array();
        foreach ($data as $index => $row) {}
        return $data;
	}

	function get_top_ten_city()
	{

		$query = "SELECT a.city_name, jumlah
								FROM city a
								JOIN (
								
									SELECT count( a.basic_info_id ) AS jumlah, basic_info_city_id
									FROM basic_infos a
									GROUP BY a.basic_info_city_id
								) AS b ON b.basic_info_city_id = a.city_id
								order by jumlah desc, city_id asc
								limit 10";
        $query = $this->db->query($query);
       // query();
        if ($query->num_rows() == 0)
            return array();
        $data = $query->result_array();
        foreach ($data as $index => $row) {}
        return $data;
	}
	
}