<?php
require('../include/session.php');
require('../include/connection.php');

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$street = $_POST['street'];
$city = $_POST['city'];
$province = $_POST['province'];
$postalcode = $_POST['postalcode'];
$country = $_POST['country'];



$query = "INSERT INTO landlords
                    (FirstName,
                    MiddleName,
                    LastName,
                    Gender,
                    Street,
                    City,
                    Province,
                    Country,
                    PostalCode,
                    Phone,
                    Email)
                    VALUES
                    ('$firstname',
                    '$middlename',
                    '$lastname',
                    '$gender',
                    '$street',
                    '$city',
                    '$province',
                    '$country',
                    '$postalcode',
                    '$phone',
                    '$email')";
                    

    
                                    
    if (mysqli_query($connection, $query)) {
            
            $query_add = mysqli_query($connection, "SELECT * FROM landlords WHERE Deleted = 0 ORDER BY IdLandlord DESC LIMIT 1") or die(mysqli_error($connection));
            $row_add = mysqli_fetch_array($query_add);
            
                        $remark = "Landlord ID:".$row_add[0];
                        $userID = $_SESSION['userid'];
                        $type = "ADD-LANDLORD";
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
          
                echo "<script type='text/javascript'>('Error Addding Customer!!');
                        window.location.href = \"../landlord.php\";</script>";
            
           
        echo "<script type='text/javascript'>alert('Error Addding Customer!!');
                window.location.href = \"../landlord.php\";</script>";
                
        echo $query;
    }
?>