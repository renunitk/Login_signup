<?php
	include('db_connect.php');
	mysql_select_db("crm_system",$conn);
	session_start();
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$_SESSION['logged_in']=$username;
	$sql="insert into signup".
		 "(username,password,email,number)".
		"values('$username','$password','$email',$number)";
	    
		$retval=mysql_query($sql,$conn);
			if(!$retval)
			{
				die('could not enter data :' .mysql_error());
			}
			else
			{
				echo "entered data succesfully";
			}
			header('location:form1.html');
?>	