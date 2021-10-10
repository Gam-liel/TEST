<?php
session_start();

if ( isset( $_SESSION['userid'] ) ) {
    $id =  $_SESSION['userid'];
} else {
    echo "<script type='text/javascript'>
            window.location.href = \"login.php\";</script>";
}
?>