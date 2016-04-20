<?php

class Admin_application_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}
	
	function list_data() {
		$query = "select 
					a.basic_info_id,
					a.basic_info_first_name,
					a.basic_info_last_name,
					a.basic_info_email,
					a.basic_info_phone_number,
					a.basic_info_gender,
					c.position_name,
					d.country_name,
					e.city_name
					from basic_infos a
					join portfolios b on b.basic_info_id = a.basic_info_id
					join positions c on c.position_id = b.portfolio_position_id
					join countries d on d.country_id = a.basic_info_country_id
					left join city e on e.city_id = a.basic_info_city_id
					order by a.basic_info_id";
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
		$query = "select 
					a.*,
					b.*,
					c.position_name,
					d.country_name,
					e.city_name,
					f.resume_photo,
					f.resume_total_work_year,
					g.religion_name,
					h.position_level_name,
					i.position_level_name as last_position_level_name,
					j.reason_out_name,
					k.interview_type_name
					from basic_infos a
					join portfolios b on b.basic_info_id = a.basic_info_id
					join positions c on c.position_id = b.portfolio_position_id
					join countries d on d.country_id = a.basic_info_country_id
					left join city e on e.city_id = a.basic_info_city_id
					join resume f on f.basic_info_id = a.basic_info_id
					join religions g on g.religion_id = a.basic_info_religion_id
					join position_levels h on h.position_level_id = b.portfolio_position_level_id
					join position_levels i on i.position_level_id = b.portfolio_last_position_level_id
					join reason_out j on j.reason_out_id = b.portfolio_reason_out_id
					join interview_types k on k.interview_type_id = b.portfolio_interview_type_id
					where a.basic_info_id = $id";
        $query = $this->db->query($query);
		$result = null; // inisialisasi variabel. biasakanlah, untuk mencegah warning dari php.
		foreach($query->result_array() as $row)	$result = ($row); // render dulu dunk!
		return $result; 
	}
	
	
	
	function create($data){

		$this->db->trans_start();
		$this->db->insert('applications', $data);
		$id = $this->db->insert_id();
		
		$this->db->trans_complete();
		return $id;
	}

	function update($data, $id){

		$this->db->trans_start();
		$this->db->where('application_id', $id);
		$this->db->update('applications', $data);
	
		$this->db->trans_complete();
		return $id;
	}
	function delete($id){

		$this->db->trans_start();
		$this->db->where('application_id', $id);
		
		

		
		$this->db->delete('applications');
		
		if ($this->db->_error_message()) {
		    //$result = 'Error! ['.$this->db->_error_message().']';
		    $result = 2;
		} else {
		    //$result = 'Success';
		    $result = 1;
		}

		


		$this->db->trans_complete();
		return $result;
	}

	function get_img($table, $column, $param){



		$sql = "select $column as result from $table where $param";
		
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		return $result['result'];
	
		

	}	

	function lihat($sampai,$dari){
		return $query = $this->db->get('mahasiswa',$sampai,$dari)->result();
		
	}
 
	function jumlah(){
		return $this->db->get('mahasiswa')->num_rows();
	}
	
}