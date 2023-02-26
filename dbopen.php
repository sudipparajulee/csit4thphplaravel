<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "myprojectcsit";

//create connection
$con = mysqli_connect($server,$username,$password,$database);

if($con === false)
{
    die('Error on connection');
}

?>