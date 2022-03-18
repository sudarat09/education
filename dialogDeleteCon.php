<?php  

        if (isset($_GET["deleteConConfirm"] )) {
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
                                location = 'form.php?deleteConAlert=req&lec_id={$_GET["lec_id"]}&c_id={$_GET["c_id"]}'
                            }else{
                                location = 'form.php?lec_id={$_GET["lec_id"]}'
                            }
                        }); 
                </script>";
        }

        //เช็อกว่่ามีการส่งค่า Get p_id หรือไม่ (?p_id=xxx)
        if (isset($_GET["deleteConAlert"])) {

            // คำสั่ง sql ในการลบข้อมูล ตาราง tbl_products โดยจะลบข้อมูลสินค้า Tr_id ที่ส่งมา
            $sql = "DELETE FROM conferences WHERE c_id={$_GET["c_id"]}";

            if (mysqli_query($conn, $sql)) {
                echo
                    "<script> 
                        Swal.fire(
                            'ลบข้อมูลสำเร็จ!',
                            'ท่านได้ลบข้อมูลเรียบร้อย',
                            'success'
                        ).then(()=> {
                               location = 'form.php?lec_id={$_GET["lec_id"]}'
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
                         location = 'form.php?lec_id={$_GET["lec_id"]}'
                    })
                </script>";
            }

            // mysqli_close($conn);
        }
       
        ?>