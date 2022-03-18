<?php

            if (isset($_POST["submitUpdateResearch"])) {
                //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
               include_once("./api/config/connect_db_1.php");

                //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
                $sqlUp = "UPDATE research SET Rautor = '{$_POST["Rautor"]}', Ryear = '{$_POST["Ryear"]}', Rtite = '{$_POST["Rtite"]}' ,
                 Rtite_jour = '{$_POST["Rtite_jour"]}' , Rvolune = '{$_POST["Rvolune"]}' , Rpage = '{$_POST["Rpage"]}' 
                          WHERE Res_id = '{$_POST["Res_id"]}';";

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