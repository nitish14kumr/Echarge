<?php 
session_start();

if(!empty($_SESSION['name']))	
{
	include('user_show.php');
	
}
else
{
	
	include('user.php');
}

?>