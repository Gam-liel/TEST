<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'nomadhub');

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'nomadhub');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

if(isset($_SESSION['userid'])){
    $query_user_login = mysqli_query($connection, "SELECT * FROM users WHERE IdUser = '".$_SESSION['userid']."'") or die(mysqli_error($connection));
    $user_login = mysqli_fetch_array($query_user_login);
}
