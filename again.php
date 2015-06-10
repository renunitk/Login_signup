<?php
	session_start();
	if(isset($_SESSION['logged_in']))
	{
		header('location:form1.html');
	}
?>