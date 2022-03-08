<?php
session_start();

class mysql{

	private $localhost="localhost";
	private $db_user="root";
	private $db_password="root";
	private $db_name="flip";



	function __construct(){

		mysqli_connect($this->localhost,$this->db_user,$this->db_password);
		mysqli_select_db($this->db_name);

		}


				function sql(){
			$UserEmail=$_POST['email'];
			$UserPassword= $_POST['password'];
			$HashUserPassword=sha1($UserPassword);
			//echo $HashUserPassword .$UserEmail;
			//cheeck if user exist in DB
			$sql= "SELECT email, password FROM admin Where email='$UserEmail' AND password='$HashUserPassword'";
			$result = $conn->query( $sql);

		  if ($result->num_rows >=0)  {

			$_SESSION['email']="email";
			$_SESSION['password']="password";
			header("Location:admin_control.php");

			}

			else {

				echo"يوجد خطأ فى اسم المستخدم او الباسورد";

				}
	}
}

 ?>