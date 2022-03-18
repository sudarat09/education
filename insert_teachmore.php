<?php

        if (isset($_POST["submitTeachmore"])  ) {
             include_once("api/config/connect_db_1.php");
            $lec_id = $_POST["lec_id"];
            //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล  
 
            //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
            $sql = "INSERT INTO `teachmore` (`teach_id`, `teach_code`, `teach_name`, `lec_id`) 
                    VALUES (NULL, '{$_POST["teach_code"]}', '{$_POST["teach_name"]}', '$lec_id');";

            if (mysqli_query($conn, $sql)) {
                 echo  "<script> location = './form.php?lec_id=$lec_id'; </script>";
            } 
            else {
                 echo  "บันทึกข้อมูลไม่สำเร็จ";
            }
            mysqli_close($conn);
        }

        ?>