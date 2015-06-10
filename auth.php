<?php
	include('db_connect.php');
	mysql_select_db("crm_system",$conn);
	session_start();
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysql_query("select * from signup where username='$_POST[username]' and password='$_POST[password]'",$conn)
				   or die(mysql_error());
	
	$row=mysql_num_rows ($query)or die(mysql_error());
	if($row==1)
			{
				$_SESSION['logged_in']=$username;
				header("location:form1.html");
			}
	else		
			{
				header("location:repeat.html");
			}
?>
				
		