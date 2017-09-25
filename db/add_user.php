<?php

	include('connectDB.php');

	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$name=$_POST["name"];
		$email=$_POST["email"];
		$mobile=$_POST["mobile"];
		$pass=$_POST["password"];

		$query="INSERT INTO echarge_users(Name, Email, Mobile, Password) VALUES ('$name','$email','$mobile','$pass')";

		if (mysql_query($query)) {
			echo "<script>window.alert('Account Created Successfully');  window.location.href='../index.php';  </script>";
		}
		else{
			echo "<script> alert('Account Creation Failed. Please Try Again.'); location.href='../index.php'; </script>";
			// echo $name."  ".$email."   ".$mobile."   ".$pass;

		}
	}

?>