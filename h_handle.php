<?php
//include the connection file
include 'connect.php'; 

//prepared statement for homested stall form

$sql = "INSERT INTO home(Buss_name, Buss_type, Buss_id, Buss_class_ISIC, Buss_hours, Buss_site, phone_number, email)
VALUES (?,?,?,?,?,?,?,?)";

//binding the values

if($stmt = mysqli_prepare($conn, $sql)){
    mysqli_stmt_bind_param($stmt,"ssisisis",$Buss_name, $Buss_type, $Buss_id, $Buss_class_ISIC, $Buss_hours, $Buss_site, $phone_number, $email);

    $Buss_name       = $_POST['bname'];
    $Buss_type       = $_POST['btype'];
    $Buss_id         = $_POST['bid'];
    $Buss_class_ISIC = $_POST['bclass'];
    $Buss_hours      = $_POST['bhours'];
    $Buss_site       = $_POST['bsite'];
    $phone_number    = $_POST['phone'];
    $$email          = $_POST['email'];

    if(mysqli_stmt_execute($stmt)){
        echo "<script type='text/javascript'> 
        window.alet('You have successfully registered, verify your details')
        </script>";
        echo "<br>Your details:";
        echo "<br> Business Name: ".$_POST['bname'];
        echo "<br> Type of Business: ".$_POST['btype'];
        echo "<br> ID of Assistance To Business: ". $_POST['bid'];
        echo "<br> Business Classfication: ". $_POST['bclass'];
        echo "<br> Business Hours: ".$_POST['bhours'];
        echo "<br> Business Site: ".$_POST['bsite'];
        echo "<br> Phone Number: ".$_POST['phone'];
        echo "<br> Email Address: ".$_POST['email'];
    }else{
        echo "Error failed to insert records.$sql".mysql_error($conn);
    }






}else{
    echo "Error Process failed".mysqli_error($conn);
}

mysqli_close($conn);




?>