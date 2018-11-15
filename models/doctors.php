<?php
class DoctorsModel extends Model{
	public function index(){
		return;
	}
	public function search(){
		
		$this->query("SELECT * FROM `doctors_info`");	
		$this->execute();
		$recordresult = $this ->resultSet();
		$_SESSION['dr_result']=$recordresult;
		//print_r($_SESSION['dg_result'][0]['name']);
	}
	public function profile(){
	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM users_info WHERE user_id = :user_id AND password = :password');
			$this->bind(':user_id', $post['pat_id']);
			$this->bind(':password', $password);
			
			$row = $this->single();
			if($row){
				$_SESSION['patient_data_access'] = true;
				$_SESSION['patient_data']= array(
				"user_id"			=> $row['user_id'],
				"first_name"	=> $row['first_name'],
				"last_name"		=> $row['last_name'],
				"phone_no"		=> $row['phone_no'],
				"email"			=> $row['email'],
		        "profile_pic"   => $row['profile_pic'],
			    "user_id"  		=> $row['user_id']
				);
				//print_r($row);

				header('Location: '.ROOT_URL.'doctors/patientdata');
			}else {
				Messages::setMsg('Incorrect Patient ID or Password', 'error');
			}
		}
		return;
	}
	public function patientdata(){

			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM users_info WHERE user_id = :user_id AND password = :password');
			$this->bind(':user_id', $post['pat_id']);
			$this->bind(':password', $password);
			
			$row = $this->single();
			if($row){
				$_SESSION['patient_data_access'] = true;
				$_SESSION['patient_data']= array(
				"user_id"			=> $row['user_id'],
				"first_name"	=> $row['first_name'],
				"last_name"		=> $row['last_name'],
				"phone_no"		=> $row['phone_no'],
				"email"			=> $row['email'],
		        "profile_pic"   => $row['profile_pic'],
			    "user_id"  		=> $row['user_id']
				);
				//print_r($row);

				//header('Location: '.ROOT_URL.'doctors/patientdata');
			}else {
				Messages::setMsg('Incorrect Patient ID or Password', 'error');
			}
		}
		//return;




		$id=$_SESSION['patient_data']['user_id'];
			//	print_r($_SESSION['patient_data']);

		$this->query("SELECT * FROM height_measurement WHERE user_id=:user_id");
		$this->bind(':user_id', $id);
		$this->execute();
		$rows = $this ->resultSet();

		$_SESSION['pat_ht_measurement']=$rows;

		$this->query("SELECT * FROM blood_pressure WHERE user_id=:user_id");
		$this->bind(':user_id', $id);
		$this->execute();
		$rows = $this ->resultSet();

		$_SESSION['pat_bp_measurement']=$rows;

		$this->query("SELECT * FROM weight_measurement WHERE user_id=:user_id");		
		$this->bind(':user_id', $id);
		$this->execute();
		$wtresult = $this ->resultSet();

		$_SESSION['pat_wt_measurement']=$wtresult;
	}
	public function patientrecords(){
		$usrid=$_SESSION['patient_data']['user_id'];
//print_r($usrid);
		$this->query("SELECT * FROM medical_record_document WHERE user_id=:user_id ORDER BY create_date_time DESC");	
		$this->bind(':user_id', $usrid);
		$this->execute();



		$recordresult = $this ->resultSet();
		//print_r($recordresult);
		$_SESSION['pat_doc_result']=$recordresult;
	}
	public function patviewrecords(){
		$usrid=$_SESSION['patient_data']['user_id'];
		$get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

		$docid= $get['id'];;
		$this->query("SELECT * FROM medical_record_document WHERE docid=:docid AND user_id= :user_id");	
		//$this->bind(':user_id', $usrid);
		$this->bind(':docid', $docid);
		$this->bind(':user_id', $usrid);
		$this->execute();

		$fileresult = $this ->single();
		//print_r($fileresult);
		$_SESSION['pat_doc_result_single']= array(
					"docid"	=> $fileresult['docid'],
				"doc_name"	=> $fileresult['doc_name'],
			     "doc_type" => $fileresult['doc_type'],
				 "doc_loc"	=> $fileresult['doc_loc'],
			"disease_title"	=> $fileresult['disease_title'],
				);
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

	public function signup(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);  
  		$usrid=$_SESSION['user_data']['user_id'];

		$this->query("SELECT (max(dr_id)+1) as count FROM doctors_info");
		$newdrid=$this->single();

		$drid=$newdrid["count"];
		//print_r($usrid);
		//print_r($drid);
		if($post['save']){
			// Insert into MySQL
			//echo "string";

			$this->query("INSERT INTO `doctors_info` (`id`, `dr_id`, `user_id`, `dr_name`, `specialization`, `gender`, `address`, `degree`, `institute`, `year_completion`, `year_experience`, `bmdc_reg`, `clinic_name`, `clinic_city`, `clinic_address`) VALUES (NULL, :dr_id, :user_id, :dr_name, :specialization, :gender, :address, :degree, :institute, :year_completion, :year_experience, :bmdc_reg, :clinic_name, :clinic_city, :clinic_address)");
			//$this->query('INSERT INTO `doctors_info` (`id`, `dr_id`, `user_id`, `dr_name`, `specialization`, `gender`, `address`, `degree`, `institute`, `year_completion`, `year_experience`, `bmdc_reg`, `clinic_name`, `clinic_city`, `clinic_address`) VALUES (NULL, 5001, 400005, Al Muktadir, qeqrqq, sf, sffgge, sgfg, sfg, 2017, 4, cvbvcxxxxx, fxgdfg, dfg, fdgfg)');

			$this->bind(':dr_id', $drid);
			$this->bind(':user_id', $usrid);
			$this->bind(':dr_name', $post['dr_name']);
			$this->bind(':specialization', $post['specialization']);
			$this->bind(':gender', $post['gender']);
			$this->bind(':address', $post['address']);
			$this->bind(':degree', $post['degree']);
			$this->bind(':institute', $post['institute']);
			$this->bind(':year_completion', $post['year_completion']);
			$this->bind(':year_experience', $post['year_experience']);
			$this->bind(':bmdc_reg', $post['bmdc_reg']);
			$this->bind(':clinic_name', $post['clinic_name']);
			$this->bind(':clinic_city', $post['clinic_city']);
			$this->bind(':clinic_address', $post['clinic_address']);

			$this->execute();
//fetching docors data
			$this->query('SELECT * FROM doctors_info WHERE user_id = :check_user_id');
			$this->bind(':check_user_id', $usrid);
			//$this->bind(':password', $password);
			
			$rowdr = $this->single();
			if ($rowdr) {
				//print_r($rowdr);
				$_SESSION['dr_is_logged_in'] = true;

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
					//print_r($_SESSION['dr_data']);
				header('Location: '.ROOT_URL.'doctors/profile');
			}else{
				Messages::setMsg('Could not signup!! Try again', 'error');

			}
		}
		return;
	}
	public function patbpinput(){
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$usrid=$_SESSION['patient_data']['user_id'];

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



			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'doctors/patientdata');
			}
			return;
		}
	}


}
?>