<?php

        if (isset($_POST["submitTreatise"])  ) {
             include_once("api/config/connect_db_1.php");
            $lec_id = $_POST["lec_id"];
            //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล  
 
            //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
            $sql = "INSERT INTO `treatise` (`tr_id`, `Tautor`, `Tyear`, `Tbook`, `Tedition`, `Tlocation`, `Tpublisher`, `Tpage`, `lec_id`) 
                        VALUES (NULL, '{$_POST["Tautor"]}', '{$_POST["Tyear"]}', '{$_POST["Tbook"]}', '{$_POST["Tedition"]}',
                         '{$_POST["Tlocation"]}', '{$_POST["Tpublisher"]}', '{$_POST["Tpage"]}', '$lec_id');";

            if (mysqli_query($conn, $sql)) {
                 echo  "<script> location = './form.php?lec_id=$lec_id'; </script>";
            } 
            else {
                 echo  "บันทึกข้อมูลไม่สำเร็จ";
            }
            mysqli_close($conn);
        }
        
        ?>