<?php
include_once("config.php");
if(isset($_POST['submit']) && $_POST['submit'] != '')
{	
$user_name = $_POST['user_name'];
$mobile_number = $_POST['mobile_number'];
 
    $filename = $_FILES['image']['name'];
	$filetype = $_FILES['image']['type'];
	$tmpname = $_FILES['image']['tmp_name'];
	$filesize = $_FILES['image']['size'];
	$desstination = 'images/';
	$ext = pathinfo($filename,PATHINFO_EXTENSION);
	$valid_extension = array('jpg','pdf','doc','docx',"mp3","mp4","wmv","png");
	if(in_array($ext,$valid_extension)){
		move_uploaded_file($tmpname,$desstination.$filename);
		
		$sql = mysqli_query($conn,"INSERT INTO user(user_name,mobile_number,image)VALUES('$user_name','$mobile_number','$filename')"); 
		echo "<script>alert('Data Inserted successfully');</script>";
		header('location:videolist.php');
	}else{
		echo "<script>alert('Please upload valid extension');</script>"; 
	} 
   }

?>
