<?php
require('../include/session.php');
require('../include/connection.php');

$rowCount = count($_POST["data"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($connection, "UPDATE landlords
                                SET
                                Deleted = 1
                                WHERE IdLandlord='" . $_POST["data"][$i] . "'");
                                
                        $remark = "Landlord ID:".$row_add[0];
                        $userID = $_SESSION['userid'];
                        $type = "DELETE-LANDLORD";
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
}


    echo "<script type='text/javascript'>
            window.location.href = \"../landlord.php\";</script>";



mysqli_close($connection);


?>