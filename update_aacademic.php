<?php

            if (isset($_POST["submitUpdateAacademic"])) {
                //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
               include_once("./api/config/connect_db_1.php");

                //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
                 $sqlUp = "UPDATE aacademic SET Aautor = '{$_POST["Aautor"]}', Ayear = '{$_POST["Ayear"]}', Abook = '{$_POST["Abook"]}' ,
                 Aedition = '{$_POST["Aedition"]}' , Alocation = '{$_POST["Alocation"]}' , Apublisher = '{$_POST["Apublisher"]}', Apage = '{$_POST["Apage"]}'
                          WHERE a_id = '{$_POST["a_id"]}';";

                if (mysqli_query($conn, $sqlUp)) {
                    echo
                        "<script> 
                       Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'เเก้ไขข้อมูลสำเร็จ',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(()=>  location = 'form.php?lec_id={$_POST["lec_id"]}')
                </script>";
                } else {
                    echo
                        "<script> 
                    Swal.fire({
                        icon: 'error',
                        title: 'เเก้ไขข้อมูลไม่สำเร็จ', 
                        text: 'โปรดตรวจสอบความถูกต้องของข้อมูล!',
                    }) 
                </script>";
                }
                // mysqli_close($conn);
            }


            ?>