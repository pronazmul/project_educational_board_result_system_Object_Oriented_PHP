<?php
session_start();

class Admin{

	public $conn;
	//Database Connecton Auto loader Fucntion
	public function __construct(){

		$this-> conn = new mysqli('localhost','root','','oop_crud');}

	//Check Username in Databaase.......
		public function checkUsername($user){

			$sql = "SELECT * FROM admin WHERE username='$user'";
			$com_data = $this -> conn -> query($sql);
			$num_rows = $com_data -> num_rows;

			if ($num_rows >0) {
				return false;
			}else{return true;}
		}

//Check Email in Databaase.......
		public function checkEmail($email){

			$sql = "SELECT * FROM admin WHERE email='$email'";
			$com_data = $this -> conn -> query($sql);
			$num_rows = $com_data -> num_rows;

			if ($num_rows >0) {
				return false;
			}else{return true;}
		}

		//Data insert Into Database.......
		public function insertData($user, $email, $pass){

			$sql = "INSERT INTO admin(username, email, pass, status) VALUES('$user','$email','$pass','inactive')";
			$this -> conn -> query($sql);
		}


		//Admin Login..........
		public function adminLogin($user_or_email, $pass){

		$sql = "SELECT * FROM admin WHERE username = '$user_or_email' OR email = '$user_or_email' ";

		$com_data = $this-> conn -> query($sql);
		$num_rows = $com_data -> num_rows;

		if ($num_rows == 1 ) {
			$data = $com_data -> fetch_assoc();

			if (password_verify($pass, $data['pass']) == true ) {
				
				if ($data['status'] == 'active') {
					
					$_SESSION['name'] = $data['username'];

					header('location:dashboard.php');


				}else{ return "<p class ='alert alert-danger'><b>ERROR..! </b> your Account is not active <button class='close' data-dismiss='alert'> &times;</button> </p>";}

			}else{ return "<p class ='alert alert-danger'><b>ERROR..! </b> Incorrect Password <button class='close' data-dismiss='alert'>&times;</button></p>";}
			
		}else{ return "<p class ='alert alert-danger'><b>ERROR..! </b> Incorrect Username Or Email <button class='close' data-dismiss='alert'>&times;</button></p>";}

		}


}






?>