<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='crm_system';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn)
{
	die('could not connect : ' . mysql_error());
}
else
{
	echo "connection successful";
}
?>