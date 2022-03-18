<?php
@session_start();
// if(empty($_SESSION['ses_aid'])){
// echo "Access Denied";
// exit;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>การจัดการประวัติการศึกษาและผลงานทางวิชาการ
        ของอาจารย์ผู้รับผิดชอบหลักสูตร</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png"
        href="https://scontent.fkkc3-1.fna.fbcdn.net/v/t1.0-9/119980752_337785307574954_1757152202764221432_o.jpg?_nc_cat=105&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeEdQ3uuMUpSNsKpHfjvpUDro1XX0a4IIyujVdfRrggjKx0oaTlnEEJRQqIYyg0KJMUxDMwjlPd-dN2hT7EGYqeo&_nc_ohc=0bT4uczorNcAX96yl_4&_nc_ht=scontent.fkkc3-1.fna&oh=6b8d05997d7e1dd2078a3062bc4a3886&oe=5FBB4911" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;1,500&display=swap"
        rel="stylesheet">

    <!-- การลิ้ง css bootstrap เเบบ cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- การลิ้ง javascript ของ bootstrap เเบบ cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- การลิ้ง css ของ data table เเบบ cdn -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <!-- javascript ที่ทำงานกับ datatable ลิ้งมาเเบบ cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <!-- การลิ้ง icon เพื่อใช้งาน icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- การลิ้ง sweetalert2 เเบบ cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- การลิ้ง icon  -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<style>
body {
    /* margin: 10px; */
    /* font-family: 'Sarabun', sans-serif; */

}
</style>

<body>
    <br>
    <div class="container my-3">
        <div class="row">
            <div class="col-md-9">
                <!-- <img src="./images/mbs.png" alt="Norther Lights" style="width:14%"> -->
                <h2 class=" text-center">ประวัติการศึกษาและผลงานทางวิชาการ </h2>
                <h3 class="text-center">ของอาจารย์ผู้รับผิดชอบหลักสูตร</h3>
            </div>
            <div class="col-md-3 mt-2">
                <a href="./operat.php" type="button" class="btn btn-primary" data-toggle="modal2"
                    data-target="#exampleModal2">
                    <i class='fas fa-folder-open'
                        style="font-size:30px; color:while; text-shadow:2px 2px 4px #000000;"></i><Br>
                    ขั้นตอนการปฎิบัติงาน <br> การปรับปรุงหลักสูตร
                </a>
            </div>
            <div class="col-md-3 mt-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <i style="font-size:30px; color:while; text-shadow:2px 2px 4px #000000;" class='
                         fas'>&#xf406;</i><br>
                    กรอกข้อมูลอาจารย์
                </button>
            </div>
        </div><br>
        <!-- data table ใช้เเสดงข้อมูลเเละเเบ่งหน้าให้อัตโนมัติ -->
        <table id="example" class="table table-striped table-bordered table-hover table-responsive-sm"
            style="width:100%">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>ชื่อ</th>
                    <th>สกุล</th>
                    <th>ตำเเหน่งวิชาการ</th>
                    <th>เพิ่มเติมข้อมูล</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
                include_once("api/config/connect_db_1.php");

                $sql = "SELECT * FROM lecturer";
                $result = mysqli_query($conn, $sql);
                $i = 1;

                while ($item = mysqli_fetch_assoc($result)) { 
                    ?>
                <tr>
                    <td class="" width="15%"><?php echo $i; ?></td>
                    <td><?php echo $item["fname"]; ?></td>
                    <td><?php echo $item["lname"]; ?></td>
                    <td><?php echo $item["position"]; ?></td>
                    <td>
                        <a class="btn btn-success" href="./form.php?lec_id=<?php echo $item["lec_id"]; ?>">
                            <i class="far fa-plus-square"></i>
                        </a>
                    </td>

                    <td class="text-center">
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-info" href="./view.php?lec_id=<?php echo $item["lec_id"]; ?>">
                                <i class="fa fa-eye"></i>
                            </a>
                            <?php if(isset($_SESSION['ses_aid'])){ ?>
                            <a class="btn btn-danger"
                                href="./data.php?delete_lecturer_Confirm=req&lec_id=<?php echo $item["lec_id"]; ?>">
                                <i class="fas fa-trash"> </i>
                            </a>
                            <?php  } ?>
                        </div>
                    </td>
                </tr>
                <?php 
                   $i++;
                }
                 ?>

            </tbody>
        </table>
        <!-- จบ datatable -->
        <br>
        <a href="index.php" class="btn btn-info" style="color:white"><i style='font-size:24px' class='fas'>&#xf011;</i>
            ออกจากระบบ</a>
    </div>
    <!-- จบ คลาส container -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ข้อมูลอาจารย์</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="form-group">
                                <label>ชื่อ</label>
                                <input type="text" class="form-control" name="fname">
                            </div>
                            <div class="form-group">
                                <label>นามสกุล</label>
                                <input type="text" class="form-control" name="lname">
                            </div>
                            <div class="form-group">
                                <label>ตำแหน่งทางวิชาการ</label>
                                <input type="text" class="form-control" name="position">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary" name="SubmitInsert">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        include_once "./DeleteLecturerData.php"; 
    ?>
    <!-- javascript ที่ทำงานกับ datatable ถ้าไม่ใส่จะใช้ datatable ไม่ได้ -->
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });
    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
    </script>
</body>

</html>