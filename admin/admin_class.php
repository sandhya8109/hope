<?php
session_start();
ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   	include 'db_connect.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}

	function login(){
		extract($_POST);
		$username = addslashes($this->db->real_escape_string($username));
		$sql = "SELECT * FROM `users` where username = ?";
		$stmt = $this->db->prepare($sql);
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows > 0){
			$details = $result->fetch_assoc();
			$verify_password = password_verify($password, $details['password']);
			if($verify_password){
				foreach ($details as $key => $value) {
					if($key != 'passwors' && !is_numeric($key))
						$_SESSION['login_'.$key] = $value;
				}
					return 1;
			}else{
				return 3;
			}
			
		}else{
			return 3;
		}
	}
	function login2(){
		extract($_POST);
		$username = addslashes($this->db->real_escape_string($username));
		$sql = "SELECT * FROM `users` where username = ?";
		$stmt = $this->db->prepare($sql);
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows > 0){
			$details = $result->fetch_assoc();
			$verify_password = password_verify($password, $details['password']);
			if($verify_password){
				foreach ($details as $key => $value) {
					if($key != 'passwors' && !is_numeric($key))
						$_SESSION['login_'.$key] = $value;
				}
					return 1;
			}else{
				return 3;
			}
			
		}else{
			return 3;
		}
	}
	function logout(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:login.php");
	}
	function logout2(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:../index.php");
	}

	function save_user(){
		foreach($_POST as $k => $v){
			if(!in_array($k, ['password']) && !is_numeric($v)){
				$_POST[$k] = addslashes($this->db->real_escape_string($v));
			}
		}
		extract($_POST);
		$password = password_hash($password, PASSWORD_DEFAULT);
		$data = " name = '$name' ";
		$data .= ", username = '$username' ";
		$data .= ", password = '$password' ";
		$data .= ", type = '$type' ";
		if(empty($id)){
			$sql = "INSERT INTO `users` set {$data}";
			$save = $this->db->query("INSERT INTO users set ".$data);
		}else{
			$sql = "UPDATE `users` set {$data} where id = '{$id}'";
		}
		$save = $this->db->query($sql);
		if($save){
			return 1;
		}
	}
	function signup(){
		extract($_POST);
		$data = " name = '$name' ";
		$data .= ", contact = '$contact' ";
		$data .= ", address = '$address' ";
		$data .= ", username = '$email' ";
		$data .= ", password = '".md5($password)."' ";
		$data .= ", type = 3";
		$chk = $this->db->query("SELECT * FROM users where username = '$email' ")->num_rows;
		if($chk > 0){
			return 2;
			exit;
		}
			$save = $this->db->query("INSERT INTO users set ".$data);
		if($save){
			$qry = $this->db->query("SELECT * FROM users where username = '".$email."' and password = '".md5($password)."' ");
			if($qry->num_rows > 0){
				foreach ($qry->fetch_array() as $key => $value) {
					if($key != 'passwors' && !is_numeric($key))
						$_SESSION['login_'.$key] = $value;
				}
			}
			return 1;
		}
	}

	function save_settings(){
		extract($_POST);
		$data = " name = '".str_replace("'","&#x2019;",$name)."' ";
		$data .= ", email = '$email' ";
		$data .= ", contact = '$contact' ";
		$data .= ", about_content = '".htmlentities(str_replace("'","&#x2019;",$about))."' ";
		if($_FILES['img']['tmp_name'] != ''){
						$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
						$move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/img/'. $fname);
					$data .= ", cover_img = '$fname' ";

		}
		
		// echo "INSERT INTO system_settings set ".$data;
		$chk = $this->db->query("SELECT * FROM system_settings");
		if($chk->num_rows > 0){
			$save = $this->db->query("UPDATE system_settings set ".$data);
		}else{
			$save = $this->db->query("INSERT INTO system_settings set ".$data);
		}
		if($save){
		$query = $this->db->query("SELECT * FROM system_settings limit 1")->fetch_array();
		foreach ($query as $key => $value) {
			if(!is_numeric($key))
				$_SESSION['setting_'.$key] = $value;
		}

			return 1;
				}
	}

	
	function save_recruitment_status(){
		extract($_POST);
		$data = " status_label = '$status_label' ";
		if(empty($id)){
			$save = $this->db->query("INSERT INTO recruitment_status set ".$data);
		}else{
			$save = $this->db->query("UPDATE recruitment_status set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}
	function delete_recruitment_status(){
		extract($_POST);
		$delete = $this->db->query("UPDATE recruitment_status set status = 0 where id = ".$id);
		if($delete)
			return 1;
	}
	function save_vacancy(){
		extract($_POST);
		$data = " position = '$position' ";
		$data .= ", availability = '$availability' ";
		$data .= ", description = '".htmlentities(str_replace("'","&#x2019;",$description))."' ";
		if(isset($status))
		$data .= ", status = '$status' ";
		
		if(empty($id)){
			
			$save = $this->db->query("INSERT INTO vacancy set ".$data);
		}else{
			$save = $this->db->query("UPDATE vacancy set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}
	function delete_vacancy(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM vacancy where id = ".$id);
		if($delete)
			return 1;
	}
	function save_application(){
		extract($_POST);
		$data = " lastname = '$lastname' ";
		$data .= ", firstname = '$firstname' ";
		$data .= ", middlename = '$middlename' ";
		$data .= ", address = '$address' ";
		$data .= ", contact = '$contact' ";
		$data .= ", email = '$email' ";
		$data .= ", gender = '$gender' ";
		$data .= ", cover_letter = '".htmlentities(str_replace("'","&#x2019;",$cover_letter))."' ";
		$data .= ", position_id = '$position_id' ";
		if(isset($status))
		$data .= ", process_id = '$status' ";

		if($_FILES['resume']['tmp_name'] != ''){
						$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['resume']['name'];
						$move = move_uploaded_file($_FILES['resume']['tmp_name'],'assets/resume/'. $fname);
					$data .= ", resume_path = '$fname' ";

		}
		if(empty($id)){
			// echo "INSERT INTO application set ".$data;
			// exit;
			$save = $this->db->query("INSERT INTO application set ".$data);
		}else{
			$save = $this->db->query("UPDATE application set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}
	function delete_application(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM application where id = ".$id);
		if($delete)
			return 1;
	}

}