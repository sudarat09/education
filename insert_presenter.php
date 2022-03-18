<?php

        if (isset($_POST["submitPresenter"])  ) {
             include_once("api/config/connect_db_1.php");
            $lec_id = $_POST["lec_id"];
            //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล  
 
            //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
            $sql = "INSERT INTO `presenter` (`p_id`, `Pautor`, `Pyear`, `Ptite`, `Pditor`,`Ptopic`, `Pdate`, `Plocation`, `Ppublisher`, `Ppage`, `lec_id`) 
            VALUES (NULL, '{$_POST["Pautor"]}', '{$_POST["Pyear"]}',
             '{$_POST["Ptite"]}', '{$_POST["Pditor"]}', '{$_POST["Ptopic"]}',
              '{$_POST["Pdate"]}', '{$_POST["Plocation"]}', '{$_POST["Ppublisher"]}',
               '{$_POST["Ppage"]}', '$lec_id');";

  
            if (mysqli_query($conn, $sql)) {
                 echo  "<script> location = './form.php?lec_id=$lec_id'; </script>";
            } 
            else {
                 echo  "บันทึกข้อมูลไม่สำเร็จ";
            }
            mysqli_close($conn);
        }
        ?>