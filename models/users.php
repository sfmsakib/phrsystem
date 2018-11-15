 <?php
class UsersModel extends Model{
		public function register(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		    


		$this->query("SELECT (max(user_id)+1) as count FROM users_info");
		$newusrid=$this->single();
		//echo $newusrid["uu"];
		//if ($newusrid) {
		//	$usrid['user_id']=$newusrid['user_id'];
		//}

		$usrid=$newusrid["count"];
		//echo $usrid;


		//$usrid = uniqid(22,true);

		if($post['submit']){
			if($post['first_name'] == '' || $post['sex'] == '' || $post['dob'] == '' || $post['phone_no'] == '' || $post['email'] == '' || $post['password'] == ''){
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
			$loc ='uploads/profilepic/';
			$pic_name =$orginal_pic_name. rand(1000,1000000).".".$extension;
			$pic_loc = $loc.$pic_name;	






				$email=$_POST['email'];
				$this->query("SELECT * FROM users_info WHERE email='$email'");
				$sql=$this->resultSet();
				//return $sql;

				$emailcheck=count($sql);
				

				//$emailcheck=mysql_num_rows($sqq);

				if ($emailcheck>0) {
					
					echo "You are already registerd please login!";
					header('Location: '.ROOT_URL.'users/pleaselogin');
					return;
				}
				else{


						if(!empty($pic_name)){
							
							if(in_array($extension, $valid_extensions)){  
			
								if ($size < 1000000) {
									
									if(move_uploaded_file($tmp_name, $pic_loc)){


											// Insert into MySQL
											$this->query('INSERT INTO users_info (user_id, first_name, last_name, profile_pic, sex, dob, phone_no, email, password) VALUES(:user_id, :first_name, :last_name, :profile_pic, :sex, :dob, :phone_no,  :email, :password)');
											$this->bind(':first_name', $post['first_name']);
											$this->bind(':last_name', $post['last_name']);
											$this->bind(':profile_pic', $pic_loc);
											$this->bind(':sex', $post['sex']);
											$this->bind(':phone_no', $post['phone_no']);
											$this->bind(':dob', $post['dob']);
											$this->bind(':email', $post['email']);
											$this->bind(':password', $password);
											$this->bind(':user_id', $usrid);
											$this->execute();


											// Verify
												if($this->lastInsertId()){
												// Redirect
												header('Location: '.ROOT_URL.'users/login');
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

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);
									print_r($_GET['id']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM users_info WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			
			$row = $this->single();
			$check_userid = $row['user_id'];
//print_r($check_userid);
			$this->query('SELECT * FROM doctors_info WHERE user_id = :check_user_id');
			$this->bind(':check_user_id', $check_userid);
			//$this->bind(':password', $password);
			
			$rowdr = $this->single();
			if ($rowdr) {
				//print_r($rowdr);
				$_SESSION['dr_is_logged_in'] = true;
					$_SESSION['is_logged_in'] = true;

					$_SESSION['dr_data']= array(
						"id"	=> $rowdr['id'],
						"dr_id"	=> $rowdr['dr_id'],
					"dr_name"	=> $rowdr['dr_name'],
				   "specialization" => $rowdr['specialization'],
					 "gender"	=> $rowdr['gender'],
						"degree"	=> $rowdr['degree'],
						"year_completion"	=> $rowdr['year_completion'],
						"year_experience"	=> $rowdr['year_experience'],
			      "bmdc_reg" => $rowdr['bmdc_reg'],
					  "clinic_name" => $rowdr['clinic_name'],
					  "clinic_city" => $rowdr['clinic_city'],
					  "clinic_address" => $rowdr['clinic_address'],
					  "address" => $rowdr['address'],
					  "institute" => $rowdr['institute']
					);	
					$_SESSION['user_data']= array(
						"id"	=> $row['id'],
					"last_name"	=> $row['last_name'],
				   "first_name" => $row['first_name'],
					 "phone_no"	=> $row['phone_no'],
						"email"	=> $row['email'],
						"dob"	=> $row['dob'],
						"sex"	=> $row['sex'],
			      "profile_pic" => $row['profile_pic'],
					  "user_id" => $row['user_id']

					);


				header('Location: '.ROOT_URL.'doctors/profile');
			}else{
				if($row){
					$_SESSION['is_logged_in'] = true;
					$_SESSION['user_data']= array(
						"id"	=> $row['id'],
					"last_name"	=> $row['last_name'],
				   "first_name" => $row['first_name'],
					 "phone_no"	=> $row['phone_no'],
						"email"	=> $row['email'],
						"dob"	=> $row['dob'],
						"sex"	=> $row['sex'],
			      "profile_pic" => $row['profile_pic'],
					  "user_id" => $row['user_id']

					);

					header('Location: '.ROOT_URL.'users/profile');
				} else {
				Messages::setMsg('Incorrect Login', 'error');
				}
			}
			
		}
		return;
	}

	public function dlogin(){
			// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM users_info WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			
			$row = $this->single();
			$check_userid = $row['user_id'];
//print_r($check_userid);
			$this->query('SELECT * FROM doctors_info WHERE user_id = :check_user_id');
			$this->bind(':check_user_id', $check_userid);
			//$this->bind(':password', $password);
			
			$rowdr = $this->single();
			if ($rowdr) {
				//print_r($rowdr);
				$_SESSION['dr_is_logged_in'] = true;
					$_SESSION['is_logged_in'] = true;

					$_SESSION['dr_data']= array(
						"id"	=> $rowdr['id'],
						"dr_id"	=> $rowdr['dr_id'],
					"dr_name"	=> $rowdr['dr_name'],
				   "specialization" => $rowdr['specialization'],
					 "gender"	=> $rowdr['gender'],
						"degree"	=> $rowdr['degree'],
						"year_completion"	=> $rowdr['year_completion'],
						"year_experience"	=> $rowdr['year_experience'],
			      "bmdc_reg" => $rowdr['bmdc_reg'],
					  "clinic_name" => $rowdr['clinic_name'],
					  "clinic_city" => $rowdr['clinic_city'],
					  "clinic_address" => $rowdr['clinic_address'],
					  "address" => $rowdr['address'],
					  "institute" => $rowdr['institute']
					);	
					$_SESSION['user_data']= array(
						"id"	=> $row['id'],
					"last_name"	=> $row['last_name'],
				   "first_name" => $row['first_name'],
					 "phone_no"	=> $row['phone_no'],
						"email"	=> $row['email'],
						"dob"	=> $row['dob'],
						"sex"	=> $row['sex'],
			      "profile_pic" => $row['profile_pic'],
					  "user_id" => $row['user_id']

					);


				header('Location: '.ROOT_URL.'doctors/profile');
			}else{
				if($row){
					$_SESSION['is_logged_in'] = true;
					$_SESSION['user_data']= array(
						"id"	=> $row['id'],
					"last_name"	=> $row['last_name'],
				   "first_name" => $row['first_name'],
					 "phone_no"	=> $row['phone_no'],
						"email"	=> $row['email'],
						"dob"	=> $row['dob'],
						"sex"	=> $row['sex'],
			      "profile_pic" => $row['profile_pic'],
					  "user_id" => $row['user_id']

					);

					header('Location: '.ROOT_URL.'doctors/signup');
				} else {
				Messages::setMsg('Incorrect Login', 'error');
				}
			}
			
		}
		return;
	}


	public function profile(){
		$id=$_SESSION['user_data']['user_id'];

		$this->query("SELECT * FROM height_measurement WHERE user_id=:user_id");
		$this->bind(':user_id', $id);
		$this->execute();
		$rows = $this ->resultSet();

		$_SESSION['ht_measurement']=$rows;

		$this->query("SELECT * FROM blood_pressure WHERE user_id=:user_id");
		$this->bind(':user_id', $id);
		$this->execute();
		$rows = $this ->resultSet();

		$_SESSION['bp_measurement']=$rows;

		$this->query("SELECT * FROM weight_measurement WHERE user_id=:user_id");		
		$this->bind(':user_id', $id);
		$this->execute();
		$wtresult = $this ->resultSet();

		$_SESSION['wt_measurement']=$wtresult;
	}
	public function record(){
		$usrid=$_SESSION['user_data']['user_id'];

		$this->query("SELECT * FROM medical_record_document WHERE user_id=:user_id ORDER BY create_date_time DESC");	
		$this->bind(':user_id', $usrid);
		$this->execute();



		$recordresult = $this ->resultSet();
		$_SESSION['doc_result']=$recordresult;
	}
	public function viewrecord(){
		$usrid=$_SESSION['user_data']['user_id'];
		$get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

		$docid= $get['id'];;
		$this->query("SELECT * FROM medical_record_document WHERE docid=:docid AND user_id= :user_id");	
		//$this->bind(':user_id', $usrid);
		$this->bind(':docid', $docid);
		$this->bind(':user_id', $usrid);
		$this->execute();

		$fileresult = $this ->single();
		//print_r($fileresult);
		$_SESSION['doc_result_single']= array(
					"docid"	=> $fileresult['docid'],
				"doc_name"	=> $fileresult['doc_name'],
			     "doc_type" => $fileresult['doc_type'],
				 "doc_loc"	=> $fileresult['doc_loc'],
			"disease_title"	=> $fileresult['disease_title'],
				);
	}
	public function tableview(){
		$id=$_SESSION['user_data']['user_id'];

		$this->query("SELECT * FROM height_measurement WHERE user_id=:user_id");
		$this->bind(':user_id', $id);
		$this->execute();
		$rows = $this ->resultSet();

		$_SESSION['ht_measurement']=$rows;

		$this->query("SELECT * FROM blood_pressure WHERE user_id=:user_id");
		$this->bind(':user_id', $id);
		$this->execute();
		$rows = $this ->resultSet();

		$_SESSION['bp_measurement']=$rows;

		$this->query("SELECT * FROM weight_measurement WHERE user_id=:user_id");
		$this->bind(':user_id', $id);
		$this->execute();
		$wtresult = $this ->resultSet();

		$_SESSION['wt_measurement']=$wtresult;

		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['htdelete']){
			//deleting the row from Weight_measurement Table
			$this->query("DELETE FROM height_measurement WHERE height_measurement.htid=:htid");
			$this->bind(':htid', $post['htdelete_id']);
			$this->execute();
			$result = $this->single();
			//redirecting
			if($result){
				Messages::setMsg("Couldn't delete", 'error');
			}
			else{
				header('Location: '.ROOT_URL.'users/httable');
			}
		}

		if($post['bpdelete']){
			//deleting the row from Blood_pressure table
			$this->query("DELETE FROM blood_pressure WHERE blood_pressure.bpid=:bpid");
			$this->bind(':bpid', $post['bpdelete_id']);
			$this->execute();
			$result = $this->single();
			//redirecting
			if($result){
				Messages::setMsg("Couldn't delete", 'error');
			}
			else{
				header('Location: '.ROOT_URL.'users/bptable');
			}
		}
		if($post['wtdelete']){
			//deleting the row from Weight_measurement Table
			$this->query("DELETE FROM weight_measurement WHERE weight_measurement.wtid=:wtid");
			$this->bind(':wtid', $post['wtdelete_id']);
			$this->execute();
			$result = $this->single();
			//redirecting
			if($result){
				Messages::setMsg("Couldn't delete", 'error');
			}
			else{
				header('Location: '.ROOT_URL.'users/wttable');
			}
		}
	}	
}
?>