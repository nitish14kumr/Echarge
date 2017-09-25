<?php 
session_start();

include('connectDB.php');

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_REQUEST['user'];
	$password=$_REQUEST['pass'];
	// var_dump($username);
	// var_dump($password);

    if($username=="" or $password=="")
	{
print"<script>alert('Please Fill Username or Password.');location.href='..\index.php'</script>";
	   
	}
    else
    {
    	if (strpos($username, '@') !== false)
    		$column='Email';
    	else
    		$column='Mobile';
	    // var_dump($column);
		$sql="select * from echarge_users where"." $column="."'$username' && Password='$password'";
		// var_dump($sql);
		$data = mysql_query($sql);

		$res=mysql_fetch_array($data);
		// var_dump($res['Email']);
		// var_dump($res['Password']);

		if($res[$column]==$username && $res['Password']==$password)
	    {
			//redirect to the userAccount
			$_SESSION['name']=$res['Name'];

			print"<script>alert('Login Successfull.');location.href='../index.php'</script>";		
	    }
		else
			print"<script>alert('Your Login Name or Password is invalid.');location.href='../index.php'</script>";
	}
}

?>

