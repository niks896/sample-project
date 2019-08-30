<?php
$db_host='localhost';
$db_name='sample';
$db_username='root';
$db_password="";
$con =mysqli_connect($db_host,$db_username,$db_password,$db_name);
if(mysqli_connect_error()){
echo('failed to connect'.mysqli_connect_error());	
}
?>