<?php
session_start();
require('connection.php');

if($_SESSION['type']=="client"){
    $remark = "client logout";
}else{
    $remark = "user logout";
}

$userID = $_SESSION['userid'];
$type = "logout";
$queryhist = "INSERT INTO history
            (userID,
            type,
            remark)
            VALUES
            ('$userID' ,
            '$type',
            '$remark');
            ";
mysqli_query($connection, $queryhist);

session_destroy();
header('location: ../login.php');
exit;
?>