<?php
session_start();
require('../include/connection.php');

if($_SESSION['type']=="client"){
    $remark = "client logout";
}else{
    $remark = "user logout";
}

$userID = $_SESSION['userid'];
$type = "LOGOUT";
$queryhist = "INSERT INTO history
            (HistoryType,
            Remarks,
            ActiveUser)
            VALUES
            ('$type' ,
            '$remark',
            '$userID');
            ";
mysqli_query($connection, $queryhist);

session_destroy();
header('location: ../login.php');
exit;
?>