<?php  

 
    $lec_id =   $_POST["lec_id"];
    $fname =  $_POST["name"];
    $lname =  $_POST["last"];
    $position = $_POST["position"];
 
    include_once("api/config/connect_db_1.php");

    $sql = "UPDATE lecturer SET fname = '$fname',lname = '$lname',position = '$position' WHERE lec_id = $lec_id;";

    if (mysqli_query($conn, $sql)) {
        echo  "<script> location = './form.php?lec_id=$lec_id'; </script>";
    } else {
        echo  "ไม่สามารถเเก้ไขข้อมูลได้";
    }

mysqli_close($conn);
?>



?>