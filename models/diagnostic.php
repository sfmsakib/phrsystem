<?php
class DiagnosticModel extends Model{
	public function index(){
		return;
	}
	public function search(){
		
		$this->query("SELECT * FROM `diagnostic_info`");	
		$this->execute();
		$recordresult = $this ->resultSet();
		$_SESSION['dg_result']=$recordresult;
		//print_r($_SESSION['dg_result'][0]['name']);
	}
	public function profile(){
	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM users_info WHERE user_id = :user_id AND password = :password');
			$this->bind(':user_id', $post['p_id']);
			$this->bind(':password', $password);
			
			$row = $this->single();
			if($row){
				//$_SESSION['dg_is_logged_in'] = true;
				$_SESSION['patient_data']= array(
				"id"			=> $row['id'],
				"first_name"	=> $row['first_name'],
				"last_name"		=> $row['last_name'],
				"phone_no"		=> $row['phone_no'],
				"email"			=> $row['email'],
		        "profile_pic"   => $row['profile_pic'],
			    "user_id"  		=> $row['user_id']
				);
				//print_r($row);
				//echo $_SESSION['dg_logged_in'] ;

				header('Location: '.ROOT_URL.'input/addrecorddg');
			}else {
				Messages::setMsg('Incorrect Patient ID or Password', 'error');
			}
		}
		return;
	}
	public function records(){
		$dgid=$_SESSION['dg_data']['dg_id'];

		$this->query("SELECT * FROM medical_record_document WHERE dg_id=:dg_id ORDER BY create_date_time DESC");	
		$this->bind(':dg_id', $dgid);
		$this->execute();



		$recordresult = $this ->resultSet();
		$_SESSION['dg_doc_result']=$recordresult;
		//print_r($_SESSION['dg_doc_result']);
	}

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM diagnostic_info WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			
			$row = $this->single();
			if($row){
				$_SESSION['dg_is_logged_in'] = true;
				$_SESSION['dg_data']= array(
				"id"			=> $row['id'],
				"name"			=> $row['name'],
				"phone_no"		=> $row['phone_no'],
				"email"			=> $row['email'],
		        "profile_pic"   => $row['profile_pic'],
			    "dg_id"  		=> $row['dg_id']
				);
				//print_r($row);
				//echo $_SESSION['dg_logged_in'] ;

				header('Location: '.ROOT_URL.'diagnostic/profile');
			} else {
				Messages::setMsg('Incorrect Login', 'error');
			}
		}
		return;
	}

	public function register(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		    


		$this->query("SELECT (max(dg_id)+1) as count FROM diagnostic_info");
		$newusrid=$this->single();
		//echo $newusrid["uu"];
		//if ($newusrid) {
		//	$usrid['user_id']=$newusrid['user_id'];
		//}

		$usrid=$newusrid["count"];
		//echo $usrid;


		//$usrid = uniqid(22,true);

		if($post['submit']){
			if($post['dgname'] == '' || $post['phone_no'] == '' || $post['email'] == '' || $post['password'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}



			$orginal_pic_name = $_FILES['profile_pic']['name'];
			$size = $_FILES['profile_pic']['size'];
			$type = $_FILES['profile_pic']['type'];
			$tmp_name = $_FILES['profile_pic']['tmp_name'];
			//$max_size = 1000000;
			$extension = strtolower(pathinfo($orginal_pic_name,PATHINFO_EXTENSION));
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
			$loc ='uploads/diagnostic/profilepic/';
			$pic_name =$orginal_pic_name. rand(1000,1000000).".".$extension;
			$pic_loc = $loc.$pic_name;	






				$email=$_POST['email'];
				$this->query("SELECT * FROM diagnostic_info WHERE email='$email'");
				$sql=$this->resultSet();
				//return $sql;

				$emailcheck=count($sql);
				

				//$emailcheck=mysql_num_rows($sqq);

				if ($emailcheck>0) {
					
					echo "You are already registerd please login!";
					header('Location: '.ROOT_URL.'diagnostic/login');
					return;
				}
				else{


						if(!empty($pic_name)){
							
							if(in_array($extension, $valid_extensions)){  
			
								if ($size < 1000000) {
									
									if(move_uploaded_file($tmp_name, $pic_loc)){


											// Insert into MySQL
											$this->query('INSERT INTO `diagnostic_info` (`id`, `dg_id`, `name`, `phone_no`, `email`, `password`, `profile_pic`) VALUES (NULL, :dg_id, :dgname, :phone_no,  :email, :password, :profile_pic)');
											$this->bind(':dgname', $post['dgname']);
											//$this->bind(':last_name', $post['last_name']);
											$this->bind(':profile_pic', $pic_loc);
											//$this->bind(':sex', $post['sex']);
											$this->bind(':phone_no', $post['phone_no']);
											//$this->bind(':dob', $post['dob']);
											$this->bind(':email', $post['email']);
											$this->bind(':password', $password);
											$this->bind(':dg_id', $usrid);
											$this->execute();


											// Verify
												if($this->lastInsertId()){
												// Redirect
												header('Location: '.ROOT_URL.'diagnostic/login');
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
		return;
	}

}
?>