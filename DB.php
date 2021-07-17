<?php 
//include connection
include 'connect.php';

//creating database tables for street vending trade

$sql = "CREATE TABLE home(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Buss_name VARCHAR (30) NOT NULL,
    Buss_type VARCHAR (30) NOT NULL,
    Buss_id INT (13) NOT NULL,
    Buss_class_ISIC VARCHAR (30) NOT NULL,
    Buss_hours INT (6) NOT NULL,
    Buss_site VARCHAR (30) NOT NULL,
    phone_number BIGINT,
    email VARCHAR (40),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if(mysqli_query($conn, $sql)){
    echo "Table created successfully";
}else{
    echo "Error failed to create database table".mysqli_error($conn);
}
mysqli_close($conn);




?>