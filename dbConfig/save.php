<?php
include_once('config.php');
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$password= $_POST['password'];
$mobile = $_POST['mobile'];
$address= $_POST['address'];
$gender= $_POST['gender'];
$nationality= $_POST['nationality'];
$InputFile=$_POST['InputFile'];
$query = "INSERT into tbl_users(fname,lname,email,password,mobile,address,gender,nationality,alerts,InputFile)values('fname','lname','$email','$password','$mobile','$address','$gender','$nationality','InputFile')";
if($con->query($query)== true){
	echo "Data inserted";
}
else
{
	echo "data not inserted ";
}
?>