<?php
session_start();
	
	$conn=mysqli_connect("localhost","root","","crm_system");
   // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	
	$phone=$_GET['phone'];
	
$query="SELECT email FROM signup WHERE number=$phone";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn).__LINE__);			   
$arr = array();
if($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 $arr[] = $row;
 }
}
 
# JSON-encode the response
echo $json_response = json_encode($arr);

?>
