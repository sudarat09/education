
    <?php

        if (isset($_POST["SubmitInsert"])) {
            //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล 

            //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
            $sql = "INSERT INTO `lecturer` (`lec_id`, `fname`, `lname`, `position`)
                    VALUES (NULL, '{$_POST["fname"]}', '{$_POST["lname"]}', '{$_POST["position"]}');";

            if (mysqli_query($conn, $sql)) {
                echo
                    "<script> 
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'บันทึกข้อมูลสำเร็จ',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(()=> location = './data.php')
                </script>";
            } else {
                echo
                    "<script> 
                    Swal.fire({
                        icon: 'error',
                        title: 'บันทึกข้อมูลไม่สำเร็จ', 
                        text: 'โปรดตรวจสอบความถูกต้องของข้อมูล!',
                    }) 
                </script>";
            }
            // mysqli_close($conn);
        }

        if (isset($_GET["delete_lecturer_Confirm"] )) {
                echo
                    "<script> 
                        Swal.fire({
                            icon: 'warning',
                            title: 'ยืนยันการลบข้อมูล?',
                            text: 'ท่านเเน่ใจว่า ท่าต้องการลบข้อมูล!',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'ใช่',
                            cancelButtonText: 'ไม่!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location = 'data.php?delete_lecturer_Alert=req&lec_id={$_GET["lec_id"]}'
                            }else{
                                location = 'data.php'
                            }
                        }); 
                </script>";
        }

        //เช็อกว่่ามีการส่งค่า Get p_id หรือไม่ (?p_id=xxx)
        if (isset($_GET["delete_lecturer_Alert"])) {

            // คำสั่ง sql ในการลบข้อมูล ตาราง tbl_products โดยจะลบข้อมูลสินค้า Tr_id ที่ส่งมา
            $sql_lecturer = "DELETE FROM lecturer WHERE lec_id={$_GET["lec_id"]}";
            $sql_education = "DELETE FROM education WHERE lec_id={$_GET["lec_id"]}";
            $sql_treatise = "DELETE FROM treatise WHERE lec_id={$_GET["lec_id"]}";
            $sql_research = "DELETE FROM research WHERE lec_id={$_GET["lec_id"]}";
            $sql_presenter = "DELETE FROM presenter WHERE lec_id={$_GET["lec_id"]}";
            $sql_aacademic = "DELETE FROM aacademic WHERE lec_id={$_GET["lec_id"]}";
            $sql_conferences = "DELETE FROM conferences WHERE lec_id={$_GET["lec_id"]}";
            $sql_bachelor = "DELETE FROM bachelor WHERE lec_id={$_GET["lec_id"]}";
            $sql_master1 = "DELETE FROM master1 WHERE lec_id={$_GET["lec_id"]}";
            $sql_doctorate = "DELETE FROM doctorate WHERE lec_id={$_GET["lec_id"]}";
            $sql_teachmore = "DELETE FROM teachmore WHERE lec_id={$_GET["lec_id"]}";

            if (mysqli_query($conn, $sql_lecturer)) {
                mysqli_query($conn, $sql_education);
                mysqli_query($conn, $sql_treatise);
                mysqli_query($conn, $sql_research);
                mysqli_query($conn, $sql_presenter);
                mysqli_query($conn, $sql_aacademic);
                mysqli_query($conn, $sql_conferences);
                mysqli_query($conn, $sql_bachelor);
                mysqli_query($conn, $sql_master1);
                mysqli_query($conn, $sql_doctorate);
                mysqli_query($conn, $sql_teachmore);

                echo
                    "<script> 
                        Swal.fire(
                            'ลบข้อมูลสำเร็จ!',
                            'ท่านได้ลบข้อมูลเรียบร้อย',
                            'success'
                        ).then(()=> {
                               location = 'data.php'
                        })
                    </script>";
                //header('Location: index.php');
            } else {
                echo
                    "<script> 
                    Swal.fire({
                        icon: 'error',
                        title: 'ลบข้อมูลไม่สำเร็จ', 
                    }).then(()=> {
                         location = 'data.php'
                    })
                </script>";
            }

            // mysqli_close($conn);
        }

        ?>