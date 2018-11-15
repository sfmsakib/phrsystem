<?php
class InputModel extends Model{



	public function Index(){

		if(isset($_SESSION['is_logged_in'])) : 

		$this->query('SELECT * FROM shares ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;


		///$this->query('SELECT * FROM medical_record_document ');
		//$rows = $this->resultSet();
		//return $rows;


	else :
		header('Location: '.ROOT_URL.'users/'.'pleaselogin'); 
	 endif; 

	}
	public function bpinput(){
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$usrid=$_SESSION['user_data']['user_id'];

		if($post['submit']){
			if($post['systolic'] == '' || $post['diastolic'] == '' || $post['dom'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			

			$this->query('INSERT INTO blood_pressure (user_id, systolic, diastolic, pulse,irregular_heartbeat, dom, tom, note) VALUES(:user_id, :systolic, :diastolic, :pulse, :irregular_heartbeat, :dom, :tom, :note)');

			$this->bind(':systolic', $post['systolic']);
			$this->bind(':diastolic', $post['diastolic']);
			$this->bind(':pulse', $post['pulse']);
			$this->bind(':irregular_heartbeat', $post['irregular_heartbeat']);
			$this->bind(':dom', $post['dom']);
			$this->bind(':tom', $post['tom']);
			$this->bind(':note', $post['note']);
			$this->bind(':user_id', $usrid);
			$this->execute();


			header('Location: '.ROOT_URL.'users/profile');

			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'users/profile');
			}
			return;
		}
	}
	public function wtinput(){
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$usrid=$_SESSION['user_data']['user_id'];

		if($post['submit']){
			if($post['wtdom'] == '' || $post['weight'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			

			$this->query('INSERT INTO weight_measurement (user_id, weight, wtdom, wttom, wtnote) VALUES(:user_id, :weight, :wtdom, :wttom, :wtnote)');

			$this->bind(':weight', $post['weight']);
			$this->bind(':wtdom', $post['wtdom']);
			$this->bind(':wttom', $post['wttom']);
			$this->bind(':wtnote', $post['wtnote']);
			$this->bind(':user_id', $usrid);
			$this->execute();


			header('Location: '.ROOT_URL.'users/profile');

			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'users/profile');
			}
			return;
		}
	}
	public function htinput(){
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$usrid=$_SESSION['user_data']['user_id'];

		if($post['submit']){
			if($post['htdom'] == '' || $post['height'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			

			$this->query('INSERT INTO height_measurement (user_id, height, htdom, httom, htnote) VALUES(:user_id, :height, :htdom, :httom, :htnote)');

			$this->bind(':height', $post['height']);
			$this->bind(':htdom', $post['htdom']);
			$this->bind(':httom', $post['httom']);
			$this->bind(':htnote', $post['htnote']);
			$this->bind(':user_id', $usrid);
			$this->execute();


			header('Location: '.ROOT_URL.'users/profile');

			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'users/profile');
			}
			return;
		}
	}
	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['title'] == '' || $post['body'] == '' || $post['link'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			// Insert into MySQL
			$this->query('INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':link', $post['link']);
			$this->bind(':user_id', 1);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'input');
			}
		}
		return;
	}
	public function addrecorduser(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		//
		if($post['submit']){
			if( $post['disease_title'] == '' || $post['app_date'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			$usrid=$_SESSION['user_data']['user_id'];


			$orginal_doc_name = $_FILES['doc']['name'];
			$size = $_FILES['doc']['size'];
			$type = $_FILES['doc']['type'];
			$tmp_name = $_FILES['doc']['tmp_name'];
			//$max_size = 1000000;
			$extension = strtolower(pathinfo($orginal_doc_name,PATHINFO_EXTENSION));
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
			$loc ='uploads/documents/';
			$fname = strtolower(pathinfo($orginal_doc_name,PATHINFO_FILENAME));

			$doc_name =$fname. rand(1000,1000000).".".$extension;
			$doc_loc = $loc.$doc_name;

			


				if(!empty($orginal_doc_name)){
					
					if(in_array($extension, $valid_extensions)){  
	
						if ($size < 1000000) {
							
							if(move_uploaded_file($tmp_name, $loc.$doc_name)){
								//$smsg = "Uploaded Successfully";
								$this->query("INSERT INTO `medical_record_document` (`docid`, `user_id`, `user_name`, `disease_title`, `doc_type`, `doc_name`, `doc_loc`, `app_date`, `comment`, `create_date_time`) VALUES (NULL, :user_id, :user_name, :disease_title, :doc_type, :doc_name, :doc_loc, :app_date, :comment, CURRENT_TIMESTAMP)");

								$this->bind(':disease_title', $post['disease_title']);
								$this->bind(':doc_name', $doc_name);
								$this->bind(':doc_loc', $doc_loc);
								$this->bind(':doc_type', $post['doc_type']);
								$this->bind(':app_date', $post['app_date']);
								$this->bind(':comment', $post['comment']);
								$this->bind(':user_name', $post['user_name']);
								$this->bind(':user_id', $usrid);
								$this->execute();

								header('Location: '.ROOT_URL.'users/record');

							
							
							}else{
							        Messages::setMsg('Failed to Upload! File size should be equal or less than 1MB!', 'error');
							}
						}else{
								Messages::setMsg('File size should be equal or less than 1MB', 'error');
						}
					}else{
							Messages::setMsg('Only PNG,JPEG File are supported', 'error');
					}
				}else{
						Messages::setMsg('Please Select a File', 'error');
				}
		}
		return;
	}

	public function addrecorddg(){
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		//
		if($post['submit']){
			if( $post['disease_title'] == '' || $post['app_date'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			$usrid=$_SESSION['patient_data']['user_id'];
			$dg_id=$_SESSION['dg_data']['dg_id'];

			$orginal_doc_name = $_FILES['doc']['name'];
			$size = $_FILES['doc']['size'];
			$type = $_FILES['doc']['type'];
			$tmp_name = $_FILES['doc']['tmp_name'];
			//$max_size = 1000000;
			$extension = strtolower(pathinfo($orginal_doc_name,PATHINFO_EXTENSION));
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
			$loc ='uploads/documents/';
			$fname = strtolower(pathinfo($orginal_doc_name,PATHINFO_FILENAME));

			$doc_name =$fname. rand(10000,1000000).".".$extension;
			$doc_loc = $loc.$doc_name;

			


				if(!empty($orginal_doc_name)){
					
					if(in_array($extension, $valid_extensions)){  
	
						if ($size < 1000000) {
							
							if(move_uploaded_file($tmp_name, $loc.$doc_name)){
								//$smsg = "Uploaded Successfully";
								$this->query("INSERT INTO `medical_record_document` (`docid`, `user_id`, `user_name`, `disease_title`, `doc_type`, `doc_name`, `doc_loc`, `app_date`, `comment`, `create_date_time`, `dg_id`, `dr_id`) VALUES (NULL, :user_id, :user_name, :disease_title, :doc_type, :doc_name, :doc_loc, :app_date, :comment, CURRENT_TIMESTAMP, :dg_id, NULL)");

								$this->bind(':disease_title', $post['disease_title']);
								$this->bind(':doc_name', $doc_name);
								$this->bind(':doc_loc', $doc_loc);
								$this->bind(':doc_type', $post['doc_type']);
								$this->bind(':app_date', $post['app_date']);
								$this->bind(':comment', $post['comment']);
								$this->bind(':user_name', $post['user_name']);
								$this->bind(':user_id', $usrid);
								$this->bind(':dg_id', $dg_id);
								$this->execute();



								//header('Location: '.ROOT_URL.'diagnostic/profile');

								Messages::setMsg('Uploaded Successfully', 'success');
							
							
							}else{
							        Messages::setMsg('Failed to Upload! File size should be equal or less than 1MB!', 'error');
							}
						}else{
								Messages::setMsg('File size should be equal or less than 1MB', 'error');
						}
					}else{
							Messages::setMsg('Only PNG,JPEG File are supported', 'error');
					}
				}else{
						Messages::setMsg('Please Select a File', 'error');
				}
		}
		return;
	}
	public function addrecorddr(){
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		//
		if($post['submit']){
			if( $post['disease_title'] == '' || $post['app_date'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			$usrid=$_SESSION['patient_data']['user_id'];
			$dr_id=$_SESSION['dr_data']['dr_id'];

			$orginal_doc_name = $_FILES['doc']['name'];
			$size = $_FILES['doc']['size'];
			$type = $_FILES['doc']['type'];
			$tmp_name = $_FILES['doc']['tmp_name'];
			//$max_size = 1000000;
			$extension = strtolower(pathinfo($orginal_doc_name,PATHINFO_EXTENSION));
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
			$loc ='uploads/documents/';
			$fname = strtolower(pathinfo($orginal_doc_name,PATHINFO_FILENAME));

			$doc_name =$fname. rand(10000,1000000).".".$extension;
			$doc_loc = $loc.$doc_name;

			


				if(!empty($orginal_doc_name)){
					
					if(in_array($extension, $valid_extensions)){  
	
						if ($size < 1000000) {
							
							if(move_uploaded_file($tmp_name, $loc.$doc_name)){
								//$smsg = "Uploaded Successfully";
								$this->query("INSERT INTO `medical_record_document` (`docid`, `user_id`, `user_name`, `disease_title`, `doc_type`, `doc_name`, `doc_loc`, `app_date`, `comment`, `create_date_time`, `dg_id`, `dr_id`) VALUES (NULL, :user_id, :user_name, :disease_title, :doc_type, :doc_name, :doc_loc, :app_date, :comment, CURRENT_TIMESTAMP, NULL, :dr_id )");

								$this->bind(':disease_title', $post['disease_title']);
								$this->bind(':doc_name', $doc_name);
								$this->bind(':doc_loc', $doc_loc);
								$this->bind(':doc_type', $post['doc_type']);
								$this->bind(':app_date', $post['app_date']);
								$this->bind(':comment', $post['comment']);
								$this->bind(':user_name', $post['user_name']);
								$this->bind(':user_id', $usrid);
								$this->bind(':dr_id', $dr_id);
								$this->execute();



								header('Location: '.ROOT_URL.'doctors/patientrecords');

								Messages::setMsg('Uploaded Successfully', 'success');
							
							
							}else{
							        Messages::setMsg('Failed to Upload! File size should be equal or less than 1MB!', 'error');
							}
						}else{
								Messages::setMsg('File size should be equal or less than 1MB', 'error');
						}
					}else{
							Messages::setMsg('Only PNG,JPEG File are supported', 'error');
					}
				}else{
						Messages::setMsg('Please Select a File', 'error');
				}
		}
		return;
	}
	public function updatepic(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		//
		if($post['submit']){
			
			$usrid=$_SESSION['user_data']['user_id'];


			$orginal_pic_name = $_FILES['profile_pic']['name'];
			$size = $_FILES['profile_pic']['size'];
			$type = $_FILES['profile_pic']['type'];
			$tmp_name = $_FILES['profile_pic']['tmp_name'];
			//$max_size = 1000000;
			$extension = strtolower(pathinfo($orginal_pic_name,PATHINFO_EXTENSION));
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
			$loc ='uploads/profilepic/';
			$fname = strtolower(pathinfo($orginal_pic_name,PATHINFO_FILENAME));

			$pic_name =$fname. rand(1000,1000000).".".$extension;
			$pic_loc = $loc.$pic_name;	


			


				if(!empty($orginal_pic_name)){
					
					if(in_array($extension, $valid_extensions)){  
	
						if ($size < 1000000) {
							
							if(move_uploaded_file($tmp_name, $pic_loc)){
								//$smsg = "Uploaded Successfully";
								$this->query("UPDATE `users_info` SET `profile_pic` = :pic_loc WHERE `users_info`.`user_id` = :user_id");

								$this->bind(':pic_loc', $pic_loc);
								$this->bind(':user_id', $usrid);
								$this->execute();

								$this->query('SELECT * FROM users_info WHERE `users_info`.`user_id` = :user_id');
								$this->bind(':user_id', $usrid);								

								$row_pic = $this->single();
								//print_r($row_pic);
								if ($row_pic) {
									unlink($_SESSION['user_data']['profile_pic']);
									$_SESSION['user_data']['profile_pic'] = $row_pic['profile_pic'];
									if ($_GET['id']==2) {
										header('Location: '.ROOT_URL.'doctors/profile');
									}else{
										header('Location: '.ROOT_URL.'users/profile');
									}
								}else{
							        Messages::setMsg('Profile Picture not updated', 'error');
							    }	
							}else{
							        Messages::setMsg('Failed to Upload! File size should be equal or less than 1MB!', 'error');
							}
						}else{
								Messages::setMsg('File size should be equal or less than 1MB', 'error');
						}
					}else{
							Messages::setMsg('Only PNG,JPEG File are supported', 'error');
					}
				}else{
						Messages::setMsg('Please Select a File', 'error');
				}
		}
		return;
	}
}
?>