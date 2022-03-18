<?php

        if (isset($_POST["submitAacademic"])  ) {
             include_once("api/config/connect_db_1.php");
            $lec_id = $_POST["lec_id"];
            //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล  
 
            //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
            $sql = "INSERT INTO `aacademic` (`a_id`, `Aautor`, `Ayear`, `Abook`,
             `Aedition`, `Alocation`, `Apublisher`, `Apage`, `lec_id`) 
             VALUES (NULL, '{$_POST["Aautor"]}', '{$_POST["Ayear"]}', '{$_POST["Abook"]}',
              '{$_POST["Aedition"]}', '{$_POST["Alocation"]}', '{$_POST["Apublisher"]}',
               '{$_POST["Apage"]}', '$lec_id');";
  
            if (mysqli_query($conn, $sql)) {
                 echo  "<script> location = './form.php?lec_id=$lec_id'; </script>";
            } 
            else {
                 echo  "บันทึกข้อมูลไม่สำเร็จ";
            }
            mysqli_close($conn);
        }

        ?>