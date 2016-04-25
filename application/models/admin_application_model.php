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
					a.basic_info_date,
					c.position_name,
					d.country_name,
					e.city_name,
					f.status_name
					from basic_infos a
					join portfolios b on b.basic_info_id = a.basic_info_id
					join positions c on c.position_id = b.portfolio_position_id
					join countries d on d.country_id = a.basic_info_country_id
					left join city e on e.city_id = a.basic_info_city_id
					join status f on f.status_id = a.basic_info_status_id
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
					f.*,
					g.religion_name,
					h.position_level_name,
					i.position_level_name as last_position_level_name,
					j.reason_out_name,
					k.interview_type_name,
					l.*,
					m.house_status_name,
					n.allergy_name,
					o.sport_name,
					p.computer_name
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
					join secondary_infos l on l.basic_info_id = a.basic_info_id
					join house_status m on m.house_status_id = l.secondary_info_house_status_id
					join allergies n on n.allergy_id = l.secondary_info_allergy_id
					join sports o on o.sport_id = l.secondary_info_sport_id
					join computers p on p.computer_id = f.resume_computer_id
					where a.basic_info_id = $id";
        $query = $this->db->query($query);
		$result = null; // inisialisasi variabel. biasakanlah, untuk mencegah warning dari php.
		foreach($query->result_array() as $row)	$result = ($row); // render dulu dunk!
		return $result; 
	}
	
	
	
	function create_history($data){

		$this->db->trans_start();
		$this->db->insert('application_histories', $data);
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

	function list_education($id) {
		$query = "select a.*, b.education_type_name 
					from educations a
					join education_types b on b.education_type_id = a.education_type_id
					where a.education_basic_info_id
					order by education_id
					";
        $query = $this->db->query($query);
       // query();
        if ($query->num_rows() == 0)
            return array();
        $data = $query->result_array();
        foreach ($data as $index => $row) {}
        return $data;
	}

	function list_work_experience($id) {
		$query = "select a.*, b.position_level_name 
					from work_experiences a
					join position_levels b on b.position_level_id = a.work_experience_position_level_id
					where a.work_experience_basic_info_id
					order by work_experience_id
					";
        $query = $this->db->query($query);
       // query();
        if ($query->num_rows() == 0)
            return array();
        $data = $query->result_array();
        foreach ($data as $index => $row) {}
        return $data;
	}

	function list_tool($id) {
		$query = "select a.*, b.tool_name 
					from resume_tools a
					join tools b on b.tool_id = a.tool_id
					where a.resume_tool_basic_info_id
					order by resume_tool_id
					";
        $query = $this->db->query($query);
       // query();
        if ($query->num_rows() == 0)
            return array();
        $data = $query->result_array();
        foreach ($data as $index => $row) {}
        return $data;
	}

	function list_hard_skill($id) {
		$query = "select a.*, b.hard_skill_type_name 
					from hard_skills a
					join hard_skill_types b on b.hard_skill_type_id = a.hard_skill_type_id
					where a.basic_info_id
					order by hard_skill_id
					";
        $query = $this->db->query($query);
       // query();
        if ($query->num_rows() == 0)
            return array();
        $data = $query->result_array();
        foreach ($data as $index => $row) {}
        return $data;
	}

	function list_soft_skill($id) {
		$query = "select a.*, b.soft_skill_type_name 
					from soft_skills a
					join soft_skill_types b on b.soft_skill_type_id = a.soft_skill_type_id
					where a.basic_info_id
					order by soft_skill_id
					";
        $query = $this->db->query($query);
       // query();
        if ($query->num_rows() == 0)
            return array();
        $data = $query->result_array();
        foreach ($data as $index => $row) {}
        return $data;
	}

	function list_history($id) {
		$query = "select a.*, b.status_name 
					from application_histories a
					join status b on b.status_id = a.application_history_status_id
					where a.basic_info_id
					order by application_history_id
					";
        $query = $this->db->query($query);
       // query();
        if ($query->num_rows() == 0)
            return array();
        $data = $query->result_array();
        foreach ($data as $index => $row) {}
        return $data;
	}


	function get_email($id)
	{
		$sql = "SELECT a.basic_info_email as result
				FROM basic_infos a
				WHERE basic_info_id = '$id'
				";
		
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		return $result['result'];
	}

	function get_data_status($id)
	{
		$query = "SELECT b.status_name, 
						b.status_email_content,
						d.position_file1,
						d.position_file2,
						d.position_file3
				FROM basic_infos a
				join status b on b.status_id = a.basic_info_status_id
				join portfolios c on c.basic_info_id = a.basic_info_id
				join positions d on d.position_id = c.portfolio_position_id
				WHERE a.basic_info_id = '$id'
				";
		
		$query = $this->db->query($query);
		$result = null; // inisialisasi variabel. biasakanlah, untuk mencegah warning dari php.
		foreach($query->result_array() as $row)	$result = ($row); // render dulu dunk!
		return $result; 
	}
	
}