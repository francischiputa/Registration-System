<?php
include 'connect.php';

//Creating a prepared statement

$sql = "INSERT INTO market(Buss_name, Buss_type, Buss_id, Buss_class_ISIC, Buss_hours, Buss_site, phone_number, email)
VALUES (?,?,?,?,?,?,?,?)";

if($stmt = mysqli_prepare($conn, $sql)){
    //binding the parameters
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
        echo "Records submited successfully <br>";
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
        echo "Error fail to submit .$sql".mysqli_error($conn);
    }


}else{
    echo "Error the process failed". mysqli_error($conn);
}

mysqli_close($conn);
?>