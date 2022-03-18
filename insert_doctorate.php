<?php

        if (isset($_POST["submitDoctorate"])  ) {
             include_once("api/config/connect_db_1.php");
            $lec_id = $_POST["lec_id"];
            //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล  
 
            //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
            $sql = "INSERT INTO `doctorate` (`doc_id`, `doc_code`, `doc_name`, `lec_id`) 
                    VALUES (NULL, '{$_POST["doc_code"]}', '{$_POST["doc_name"]}', '$lec_id');";

            if (mysqli_query($conn, $sql)) {
                 echo  "<script> location = './form.php?lec_id=$lec_id'; </script>";
            } 
            else {
                 echo  "บันทึกข้อมูลไม่สำเร็จ";
            }
            mysqli_close($conn);
        }

        ?>