<?php
require('../include/connection.php');

if (!empty($_FILES["uploadImage"]["name"])) {
 
$id = $_POST['id'];

$ImageSavefolder = "../img/data/landlords/";

$temp = explode(".", $_FILES["uploadImage"]["name"]);
$newfilename = $id."_".round(microtime(true)) . '.' . end($temp);

$upload = move_uploaded_file($_FILES["uploadImage"]["tmp_name"] , "$ImageSavefolder".$newfilename);

$query = "UPDATE landlords SET Photo = '$newfilename' WHERE IdLandlord = '$id'";

if (mysqli_query($connection, $query) && $upload) {
    
    $remark = "Landlord ID:".$row_add[0];
    $userID = $_SESSION['userid'];
    $type = "UPLOAD PHOTO-LANDLORD";
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
    echo "<script type='text/javascript'>alert('Photo Successfully Uploaded');
            window.location.href = \"../landlord.php\";</script>";
    } else {
        echo "<script type='text/javascript'>alert('Error Uploading Photo!!');
                window.location.href = \"../landlord.php\";</script>";
    }

}

?>