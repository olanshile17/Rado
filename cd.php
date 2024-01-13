<?php 
include_once 'conflag.php';

if (isset($_POST['submit'])) {
	$firstname = mysqli_real_escape_string($conflag, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conflag, $_POST['lastname']);
	$email = mysqli_real_escape_string($conflag, $_POST['email']);
	$password = mysqli_real_escape_string($conflag, $_POST['password']);
	$cpassword = mysqli_real_escape_string($conflag, $_POST['cpassword']);
	
	if ($password != $cpassword) {
	echo "<script>alert('password don't match);</script>";
		
	}else{
	$insert = "INSERT INTO `project_form`(`firstname`,`lastname`,`email`,`password`)VALUES('$firstname','$lastname','$email','$password')";

		$query = mysqli_query($conflag, $insert);
		if($query){
	       echo "<script>alert('Register successfully');</script>";
	       header('location:dab.php');
		}else{
	      echo "<script>alert('not registered');</script>".mysqli_error($conflag);
		}
	}

}


if (isset($_POST['submit'])){
	$email = mysqli_real_escape_string($onflag,$_POST['email']);
	$password = mysqli_real_escape_string($conflag,$_POST['password']);

	$select = "SELECT * FROM `project_form` WHERE (`email`='$email')";

	$query = mysqli_query($conflag,$select);
	$count = mysqli_num_rows($query);


	if ($count ==1){
		$row = mysqli_fetch_assoc($query);
		$pass = $row['password'];
		$check = password_verify($password, $pass);

		echo "$pass";
		if($check){
			session_start();
			$_SESSION['user_id']=$email;
			header ('location:imageupload.php');
		}else{
			echo "<script>alert('Invalid login details');</script>".mysqli_error($conflag);
		}
	}
}
