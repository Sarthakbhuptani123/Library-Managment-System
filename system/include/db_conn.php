<?php
session_start();
ob_start();

$sname="localhost";
$uname="root";
$password="";
$db_name="library";

$connection=mysqli_connect($sname,$uname,$password,$db_name);

if(!$connection)
{
	echo "connection failed";
}

?>