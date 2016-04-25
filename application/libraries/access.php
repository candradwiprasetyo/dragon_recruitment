<?php 

class Access
{
	
	function get_data_user_admin($id)
	{
		$ci = & get_instance();
		$sql = "select a.*, b.user_type_name from users a 
				join user_types b on b.user_type_id = a.user_type_id 
				where a.user_id = $id
				";
		
		$query = $ci->db->query($sql);
		$result = null; // inisialisasi variabel. biasakanlah, untuk mencegah warning dari php.
		foreach($query->result_array() as $row)	$result = ($row); // render dulu dunk!
		return $result; 
	}
	
	function get_data_user($id)
	{
		$ci = & get_instance();
		$sql = "select a.*, b.creative_id from users a 
				left join creatives b on b.user_id = a.user_id 
				where a.user_id = $id
				";
		
		$query = $ci->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		return array(
					'user_name' => $result['user_first_name']." ".$result['user_last_name'],
					'creative_id' => $result['creative_id']
		);
	}

	public function format_money($money){
		$money = number_format($money, 0);
		
		return "Rp. ".$money;
	}
	
	public function format_date($date){
		$phpdate = strtotime( $date );
		$new_date = date( 'd F Y', $phpdate );
		
		return $new_date;
	}

	public function format_date_simple($date){
		$phpdate = strtotime( $date );
		$new_date = date( 'd/m/Y', $phpdate );
		
		return $new_date;
	}
	
	public function format_status($data){
		$data = str_replace('<a>', '', $data);
		$data = str_replace('</a>', '', $data);
		
		return $data;
	}

	public function format_real_date($date){

	$date = explode("-", $date);
	$new_date = $date[2]."/".$date[1]."/".$date[0];

	return $new_date;
	}
	
	public function format_back_date($date){

	$date = explode("/", $date);
	$back_date =  $date[2]."-".$date[1]."-".$date[0];

	return $back_date;

}
	
	public function format_datetime($date){
		$phpdate = strtotime( $date );
		$new_date = date( 'F d, Y', $phpdate );
		$new_time = date('h:i A', $phpdate);
		return $new_date." / ".$new_time;
	}
	
	public function get_valid_img($img){
		
		if(@getimagesize($img)){
			$data_image = getimagesize($img);
			
			$width = $data_image[0];
			$height = $data_image[1];
			
			if($height == 0){
				$height = 1;
			}
			
			$ratio = $width / $height;
			//if($ratio > 1.43){
			if($ratio > 1.5){
				$class = "img_class2";
			}else{
				$class = "img_class";
			}
			return $class;
		}else{
			return "img_class";
		}
	}
	
	public function get_valid_profile_img($img){
		
		if(@getimagesize($img)){
			$data_image = getimagesize($img);
			
			$width = $data_image[0];
			$height = $data_image[1];
			
			
			if($height == 0){
				$height = 1;
			}
			
			
			$ratio = $width / $height;
			if($ratio > 1){
				$class = "img_class2";
			}else{
				$class = "img_class";
			}
			return $class;
		}else{
			return "img_class";
		}
	}
	
	public function get_alert_success($message){
		$result = '<div class="alert-message">
						<div class="alert-message-item">
							<i class="fa fa-check"></i>&nbsp';
		$result .= $message;
		$result .= '</div></div>';
		
		return $result;
	}
	
	public function get_alert_error($message){
		$result = '<div class="alert-message">
						<div class="alert-message-item_error">
							<i class="fa fa-check"></i>&nbsp';
		$result .= $message;
		$result .= '</div></div>';
		
		return $result;
	}
	
	public function get_navbar_category() {
			
			
			$result = '
			
       	 		
                 	<div class="navbar_category">
                 		<div class="row" style="padding:0; margin:0px;">
							
							<div class="col-md-11 col-md-offset-1" style="padding:0">
							<div class="navbar_category_menu"><a href="'.site_url('profile').'">Profile</a></div>
							<div class="navbar_category_menu"><a href="'.site_url('follower').'">Followers</a></div>
							<div class="navbar_category_menu"><a href="'.site_url('following').'">Following</a></div>
							<div class="navbar_category_menu"><a href="'.site_url('project/add').'">Upload Work</a></div>
							
                    		<div class="navbar_category_icon"><a href="'.site_url('profile/edit').'"><i class="fa fa-gear"></i></a></div>
							<div class="navbar_category_icon"><a href="'.site_url('message/view').'"><i class="fa fa-envelope-o"></i></a></div>
							</div>
                 	</div>
             	</div> 
        	';
			
			return $result;
			
		
 	}
	
	public function get_navbar_category_regular() {
			
			
			$result = '
			
       	 		
                 	<div class="navbar_category">
                 		<div class="row">
							<div class="col-md-11 col-md-offset-1"  style="padding:0">
							<div class="navbar_category_menu"><a href="'.site_url('profile').'">Profile</a></div>
							
							<div class="navbar_category_menu"><a href="'.site_url('following').'">Following</a></div>
							
                    		<div class="navbar_category_icon"><a href="'.site_url('profile/edit').'"><i class="fa fa-gear"></i></a></div>
							<div class="navbar_category_icon"><a href="'.site_url('message/view').'"><i class="fa fa-envelope-o"></i></a></div>
							</div>
                 	</div>
             	</div> 
        	';
			
			return $result;
			
		
 	}


 	public function get_message($id) {
			
			switch ($id) {
				case '1':
					$result = '
		                 	<section class="content">
							    <div class="row">
							        <div class="col-xs-12">
							            <div class="callout callout-warning">
							                <h4>Success</h4>
							                <p>Data successfully saved</p>
							            </div>
							        </div>
							    </div>
							</section>
        			';
				break;

				case '2':
					$result = '
		                 	<section class="content">
							    <div class="row">
							        <div class="col-xs-12">
							            <div class="callout callout-warning">
							                <h4>Success</h4>
							                <p>Data successfully updated</p>
							            </div>
							        </div>
							    </div>
							</section>
        			';
				break;

				case '3':
					$result = '
		                 	<section class="content">
							    <div class="row">
							        <div class="col-xs-12">
							            <div class="callout callout-warning">
							                <h4>Success</h4>
							                <p>Data successfully deleted</p>
							            </div>
							        </div>
							    </div>
							</section>
        			';
				break;


				case '4':
					$result = '
		                 	<section class="content">
							    <div class="row">
							        <div class="col-xs-12">
							            <div class="callout callout-danger">
							                <h4>Error</h4>
							                <p>Cannot delete the data because there is a relation with other tables</p>
							            </div>
							        </div>
							    </div>
							</section>
        			';
				break;
				
				
			}
			
			
			echo $result;
			
		
 	}
	
}

# -- end file -- #
