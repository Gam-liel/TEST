<?php  
session_start();
require('../include/connection.php');

if (isset($_POST['username']) and isset($_POST['username'])){

    if($_POST['type']=='admin'){	
        // Assigning POST values to variables.
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // CHECK FOR THE RECORD FROM TABLE
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
         
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);
        $array = mysqli_fetch_array($result);
        if ($count == 1){
        
        //echo "Login Credentials verified";
        echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
                    $_SESSION['userid']  = $array['IdUser'];
                    $m = $array['MiddleName'];
                    $i = strlen($m);
                    $middleIn = substr($m,0,-$i+1);
                    $_SESSION['name'] = $array['FirstName'].' '.$middleIn.' '.$array['LastName'];
                    $_SESSION['type']  = $array['UserType'];
                    $_SESSION['avatar']  = $array['Avatar'];
                    $_SESSION['username']  = $array['UserName'];
                    $_SESSION['password']  = $array['Password'];
                    
                    
                    $remark = "client login";
                    $userID = $_SESSION['userid'];
                    $type = "login";
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
                    
                    echo "<script type='text/javascript'>
                        window.location.href = \"../index.php\";</script>";
                    
                    
        }else{
        echo "<script type='text/javascript'>alert('Invalid Login Credentials');
                    window.location.href = \"../index.php\";</script>";
        }
    }else{
        // Assigning POST values to variables.
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // CHECK FOR THE RECORD FROM TABLE
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
         
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);
        $array = mysqli_fetch_array($result);
        if ($count == 1){
        
        //echo "Login Credentials verified";
        echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
                    $_SESSION['user'] = $username;
        			$_SESSION['success']  = $password;
                    $_SESSION['userid']  = $array['user_id'];
                    $_SESSION['name']  = $array['name'];
                    $_SESSION['type']  = $array['type'];
                    $_SESSION['avatar']  = $array['avatar'];
                    $_SESSION['username']  = $array['username'];
                    $_SESSION['password']  = $array['password'];
                    
                    $remark = "user login";
                    $userID = $_SESSION['userid'];
                    $type = "LOGIN";
                    $queryhist = "INSERT INTO history
                                                (person_id,
                                                type,
                                                remark)
                                                VALUES
                                                ('$userID' ,
                                                '$type',
                                                '$remark');
                                                ";
                    mysqli_query($connection, $queryhist);
                    
                    echo "<script type='text/javascript'>
                        window.location.href = \"../login.php\";</script>";
                   
                    
        }else{
        echo "<script type='text/javascript'>alert('Invalid Login Credentials');
                    window.location.href = \"../index.php\";</script>";
        }
    }
}
?>