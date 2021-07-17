<?php
$servername     = "localhost";
$serveruser     = "root";
$serverpassword = "";
$dbname         = "Breg";

//create connection

$conn = mysqli_connect($servername, $serveruser, $serverpassword, $dbname);
if(!$conn){
    echo "connection failed". mysqli_connect_error($conn);
}else{
    echo "Connect successfully";
}

//Create Database



