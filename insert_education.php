<?php

        if (isset($_POST["submitHistory"])  ) {
             include_once("api/config/connect_db_1.php");
            $lec_id = $_POST["lec_id"];
            //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล  
 
            //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
            $sql2 = "INSERT INTO `education` (`Tr_id`, `Tb_year`, `Tb_educat`, `Tb_titute`, `lec_id` ) 
                        VALUES (NULL, '{$_POST["Tb_year"]}','{$_POST["Tb_educat"]}','{$_POST["Tb_titute"]}','$lec_id');";

  
            if (mysqli_query($conn, $sql2)) {
                 echo  "<script> location = './form.php?lec_id=$lec_id'; </script>";
            } 
            else {
                 echo  "บันทึกข้อมูลไม่สำเร็จ";
            }
            mysqli_close($conn);
        }
        ?>