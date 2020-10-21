<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbnname = "assignment";
$conn = new mysqli($servername,$username,$password,$dbnname);
{
	if($conn->connect_error)
		die("connection failed".$conn->connect_error);
 // echo "connectin establish";

}
?>