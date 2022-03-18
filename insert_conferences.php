<?php

        if (isset($_POST["submitConferences"])  ) {
             include_once("api/config/connect_db_1.php");
            $lec_id = $_POST["lec_id"];
            //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล  
 
            //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
            $sql = "INSERT INTO `conferences` (`c_id`, `Cautor`, `Cyear`, `Ctite`,
             `Cditor`, `Ctopic`, `Cdate`, `Clocation`, `Cpublisher`, `Cpage`, `lec_id`) 
            VALUES (NULL, '{$_POST["Cautor"]}', '{$_POST["Cyear"]}', '{$_POST["Ctite"]}',
             '{$_POST["Cditor"]}', '{$_POST["Ctopic"]}', '{$_POST["Cdate"]}',
             '{$_POST["Clocation"]}', '{$_POST["Cpublisher"]}', '{$_POST["Cpage"]}', '$lec_id');";


            if (mysqli_query($conn, $sql)) {
                 echo  "<script> location = './form.php?lec_id=$lec_id'; </script>";
            } 
            else {
                 echo  "บันทึกข้อมูลไม่สำเร็จ";
            }
            mysqli_close($conn);
        }

        ?>