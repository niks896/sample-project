<?php
define('base_path','sample/dbconfig');
define('db_host','localhost:3306');
define('db_name','sample');
define("db_username","root");
define("db_password","");
$con = new mysqli_connect(db_host,dbusername,db_password);
if(mysqli_connect_error()){
echo('failed to connect',mysqli_connect_error());	
}
?>