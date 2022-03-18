<?php

            if (isset($_POST["submitUpdatePresenter"])) {
                //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
               include_once("./api/config/connect_db_1.php");

                //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
                $sqlUp = "UPDATE presenter SET Pautor = '{$_POST["Pautor"]}', Pyear = '{$_POST["Pyear"]}', Ptite = '{$_POST["Ptite"]}' ,
                 Pditor = '{$_POST["Pditor"]}' , Ptopic = '{$_POST["Ptopic"]}' , Pdate = '{$_POST["Pdate"]}', Plocation = '{$_POST["Plocation"]}' , Ppublisher = '{$_POST["Ppublisher"]}' ,Ppage = '{$_POST["Ppage"]}'  
                          WHERE p_id = '{$_POST["p_id"]}';";

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