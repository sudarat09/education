<?php
include_once "./SelectAll.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>การจัดการประวัติการศึกษาและผลงานทางวิชาการ
        ของอาจารย์ผู้รับผิดชอบหลักสูตร</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- การลิ้ง sweetalert2 เเบบ cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;1,500&display=swap"
        rel="stylesheet">

    <!-- การลิ้ง icon เพื่อใช้งาน icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- การลิ้ง sweetalert2 เเบบ cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- การลิ้ง icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- vuejs 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <!-- axios http client -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>

    <style>
    body {
        /* border: 1px solid black; */
        /* background-color: blue;  */
        font-family: 'Sarabun', sans-serif;
        margin: 5px;
        background: white;
        font-family: Arial padding-top: 50px;
    }

    .a {
        padding-right: 150px;
        padding-bottom: 50px;
        padding-left: 200px;
    }

    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .topnav a {
        float: right;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .active {
        background-color: #04AA6D;
        color: white;
    }

    .topnav a:hover,
    .dropdown:hover .dropbtn {
        background-color: #555;
        color: white;
    }

    .b {
        margin-bottom: 4px;
        font-size: 18px;
    }
    </style>
</head>

<body>


    <div id="app">
        <a href="data.php" class="btn btn-primary" style="color:white"><i class='fas fa-home'
                style='font-size:20px'></i>
            กลับไปหน้าแรก</a>
        <div class="a">
            <div class="container mt-4">
                <div class="text-center mb-2">
                    <img src="./images/mbs.png" class="d-print-none" alt="Norther Lights" style="width:13%"><br
                        class="d-print-none">
                    <h3>ประวัติการศึกษาและผลงานทางวิชาการ </h3>
                    <h4>ของอาจารย์ผู้รับผิดชอบหลักสูตร</h4>
                </div> <br>
                <form action="edit_lecturer.php" method="POST">
                    <label for="fname">1. ชื่อ</label>
                    <input type="text" name="name" value="<?php echo $data["fname"]; ?>">
                    <label for="lname">สกุล</label>
                    <input type="text" name="last" value="<?= $data["lname"] ?>">
                    <label for="position">ตำแหน่งทางวิชาการ</label>
                    <input type="text" name="position" value="<?= $data["position"];?>">
                    <input type="hidden" name="lec_id" value="<?= $data["lec_id"];?>">
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-warning" name="submit_edit_lecturer" value="submit_edit_lecturer"
                            type="submit">
                            เเก้ไข
                        </button>
                    </div>
                </form>

                <b> 2. สังกัด คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม</b><br>
                <b>3. ประวัติการศึกษา</b>
                <div class="container mt-3">
                    <div class="container mt-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ที่</th>
                                    <th>ปีที่สำเร็จการศึกษา</th>
                                    <th>คุณวุฒิ(สาขาวิชา)</th>
                                    <th>สถาบันการศึกษา</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                $i = 1;
                while ($item = mysqli_fetch_assoc($result_edu)) { 
                    ?>
                                <tr>
                                    <td class="" width="15%"><?php echo $i; ?></td>
                                    <td><?php echo $item["Tb_year"]; ?></td>
                                    <td><?php echo $item["Tb_educat"]; ?></td>
                                    <td><?php echo $item["Tb_titute"]; ?></td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal<?php echo $item["Tr_id"]; ?>">
                                                <i class="fas fa-edit"> </i>
                                            </button>
                                            <a class="btn btn-danger"
                                                href="form.php?deleteHisConfirm=req&Tr_id=<?php echo $item["Tr_id"]; ?>&lec_id=<?=$lec_id?>">
                                                <i class="fas fa-trash"> </i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <form method="post">
                                    <div class="modal fade" id="exampleModal<?php echo $item["Tr_id"]; ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ประวัติการศึกษา</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p>ปีที่สำเร็จการศึกษา</p>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php echo $item["Tb_year"]; ?>"
                                                                    name="Tb_year">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p>คุณวุฒิ(สาขาวิชา)</p>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php echo $item["Tb_educat"]; ?>"
                                                                    name="Tb_educat">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p>สถาบันการศึกษา</p>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    value="<?php echo $item["Tb_titute"]; ?>"
                                                                    name="Tb_titute">
                                                                <input type="hidden" class="form-control" placeholder=""
                                                                    value="<?=$lec_id?>" name="lec_id">
                                                                <input type="hidden" class="form-control" placeholder=""
                                                                    value="<?php echo $item["Tr_id"]; ?>"
                                                                    name="Tr_id"><br>
                                                            </div><br>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">ยกเลิก</button>
                                                    <button class="btn btn-primary" type="submit"
                                                        name="submitUpdateHistory">บันทึก</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php 
                            
                   $i++;
                }
                // end while loop
                include_once "./dialogDeleteHis.php"; 
                include_once "./update_education.php"; 
                 ?>
                            </tbody>
                        </table>
                        <div class="row">
                            <form method="post" action="./insert_education.php">
                                <div class="row">
                                    <div class="col-md-2">
                                        <p>ปีที่สำเร็จการศึกษา</p>
                                        <input type="text" class="form-control" placeholder="" name="Tb_year">
                                    </div>
                                    <div class="col-md-3">
                                        <p>คุณวุฒิ(สาขาวิชา)</p>
                                        <input type="text" class="form-control" placeholder="" name="Tb_educat">
                                    </div>
                                    <div class="col-md-4">
                                        <p>สถาบันการศึกษา</p>
                                        <input type="text" class="form-control" placeholder="" name="Tb_titute">
                                        <input type="hidden" class="form-control" placeholder="" value="<?=$lec_id?>"
                                            name="lec_id"><br>
                                    </div><br>
                                    <div class="">
                                        <button type="submit" class="btn btn-success"
                                            name="submitHistory">บันทึก</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <!-- ------------------------------------1 --> <br>
                <b> 4. ผลงานทางวิชาการ </b>
                <div class="container mt-3">
                    <!-- treatise -->
                    <b>4.1 หนังสือ/ตำรา</b><br><br>
                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                        data-bs-target="#myModal1">
                        <i class="fa fa-book" style="font-size:24px"></i> กรอกข้อมูลหนังสือ/ตำรา
                        <!-- <p style="font-size:16px"> กรอกข้อมูลหนังสือ/ตำรา</p> -->
                    </button>
                    <br>
                    <table class="table" style="width: 75%;">
                        <?php
                while ($row = mysqli_fetch_assoc($result_tre)) { 
                 ?>
                        <tr>
                            <td><?php echo "" .$row["Tautor"] .  ". ",
                     "(" .$row["Tyear"] .  "). ",
                     "" .$row["Tbook"] .  ". ",
                     "พิมพ์ครั้งที่ " .$row["Tedition"] .  ". ",
                     "" .$row["Tlocation"] .  " ",
                     ": " .$row["Tpublisher"] .  ". ",
                     "" .$row["Tpage"] .  " หน้า. <br>"; ?></td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <button class="btn" data-bs-toggle="modal"
                                        data-bs-target="#person_exampleModal1<?php echo $row["tr_id"]; ?>">
                                        <i class="fas fa-edit" style="font-size:18px;"> </i>
                                    </button>
                                    <a class="btn"
                                        href="form.php?deleteTreConfirm=req&tr_id=<?php echo $row["tr_id"]; ?>&lec_id=<?=$lec_id?>">
                                        <i class="fas fa-trash" style="font-size:18px;"> </i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <form method="post">
                            <div class="modal fade" id="person_exampleModal1<?php echo $row["tr_id"]; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">หนังสือ/ตำรา</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>ชื่อผู้แต่ง</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Tautor"]; ?>" name="Tautor">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ปีที่พิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Tyear"]; ?>" name="Tyear">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ชื่อหนังสือ</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Tbook"]; ?>" name="Tbook">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>พิมพ์ครั้งที่</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Tedition"]; ?>" name="Tedition">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>สถานที่พิมพ์ :</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Tlocation"]; ?>" name="Tlocation">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>สำนักพิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Tpublisher"]; ?>" name="Tpublisher">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>จำนวนหน้าที่พิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Tpage"]; ?>" name="Tpage">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?=$lec_id?>" name="lec_id">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?php echo $row["tr_id"]; ?>" name="tr_id"><br>
                                                    </div><br>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">ยกเลิก</button>
                                            <button class="btn btn-primary" type="submit"
                                                name="submitUpdateTreatise">บันทึก</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php 
                }
                // end while loop
                include_once "./dialogDeleteTre.php"; 
                include_once "./update_treatise.php"; 
                 ?>
                    </table>
                </div>

                <!-- The Modal -->
                <div class="modal" id="myModal1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">หนังสือ/ตำรา</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">

                                <form class="form-horizontal" method="post" action="./insert_treatise.php">
                                    <fieldset>
                                        <div class="container">
                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="Tautor">ชื่อผู้แต่ง</label>
                                                <div class="col-md-12">
                                                    <input id="Tautor" name="Tautor" type="text" placeholder=""
                                                        class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="Tyear">ปีที่พิมพ์</label>
                                                <div class="col-md-12">
                                                    <input id="Tyear" name="Tyear" type="text" placeholder=""
                                                        class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="Tbook">ชื่อหนังสือ</label>
                                                <div class="col-md-12">
                                                    <input id="Tbook" name="Tbook" type="text" placeholder=""
                                                        class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label"
                                                    for="Tedition">พิมพ์ครั้งที่</label>
                                                <div class="col-md-12">
                                                    <input id="Tedition" name="Tedition" type="text" placeholder=""
                                                        class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="Tlocation">สถานที่พิมพ์
                                                    :</label>
                                                <div class="col-md-12">
                                                    <input id="Tlocation" name="Tlocation" type="text" placeholder=""
                                                        class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label"
                                                    for="Tpublisher">สำนักพิมพ์</label>
                                                <div class="col-md-12">
                                                    <input id="Tpublisher" name="Tpublisher" type="text" placeholder=""
                                                        class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label"
                                                    for="Tpage">จำนวนหน้าที่พิมพ์</label>
                                                <div class="col-md-12">
                                                    <input id="Tpage" name="Tpage" type="text" placeholder=""
                                                        class="form-control input-md">
                                                    <input type="hidden" class="form-control" placeholder=""
                                                        value="<?=$lec_id?>" name="lec_id">
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="summit" class="btn btn-success" data-bs-toggle="modal"
                                                    name="submitTreatise">บันทึก</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">ยกเลิก</button>

                                            </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------------------------2 -->
                <div class="container mt-3">
                    <!-- research-->
                    <b>4.2 บทความวิจัย </b><br><br>

                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                        data-bs-target="#myModal2">
                        <i class='fas fa-file-signature' style='font-size:24px'></i> กรอกข้อมูลบทความวิจัย
                    </button>
                    <br>

                    <table class="table" style="width: 75%;">
                        <?php
                while ($row = mysqli_fetch_assoc($result_res)) { 
                 ?>
                        <tr>
                            <td><?php  echo "" .$row["Rautor"] .  ". ","(" .$row["Ryear"] .  "). ","" .$row["Rtite"] .  ". ","" .$row["Rtite_jour"] .  ", ","" .$row["Rvolune"] .  " : ","" .$row["Rpage"] .  ". "; ?>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <button class="btn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal2<?php echo $row["Res_id"]; ?>">
                                        <i class="fas fa-edit" style="font-size:18px;"> </i>
                                    </button>
                                    <a class="btn"
                                        href="form.php?deleteResConfirm=req&Res_id=<?php echo $row["Res_id"]; ?>&lec_id=<?=$lec_id?>">
                                        <i class="fas fa-trash" style="font-size:18px;"> </i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <form method="post">
                            <div class="modal fade" id="exampleModal2<?php echo $row["Res_id"]; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">บทความวิจัย</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>ชื่อผู้เขียน</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Rautor"]; ?>" name="Rautor">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ปีที่พิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Ryear"]; ?>" name="Ryear">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ชื่อบทความ</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Rtite"]; ?>" name="Rtite">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ชื่อวารสาร</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Rtite_jour"]; ?>" name="Rtite_jour">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ปีที่(ฉบับที่) :</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Rvolune"]; ?>" name="Rvolune">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>เลขหน้า</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Rpage"]; ?>" name="Rpage">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?=$lec_id?>" name="lec_id">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?php echo $row["Res_id"]; ?>" name="Res_id"><br>
                                                    </div><br>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">ยกเลิก</button>
                                            <button class="btn btn-primary" type="submit"
                                                name="submitUpdateResearch">บันทึก</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php 
                }
                // end while loop
                include_once "./dialogDeleteRes.php"; 
                include_once ".//update_research.php"; 
                 ?>
                    </table>
                </div>

                <!-- The Modal -->
                <div class="modal" id="myModal2">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">บทความวิจัย</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">

                                <form class="form-horizontal" method="post" action="./insert_research.php">
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Rautor">ชื่อผู้เขียน</label>
                                            <div class="col-md-12">
                                                <input id="Rautor" name="Rautor" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Ryear">ปีที่พิมพ์</label>
                                            <div class="col-md-12">
                                                <input id="Ryear" name="Ryear" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Rtite">ชื่อบทความ</label>
                                            <div class="col-md-12">
                                                <input id="Rtite" name="Rtite" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Rtite_jour">ชื่อวารสาร</label>
                                            <div class="col-md-12">
                                                <input id="Rtite_jour" name="Rtite_jour" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Rvolune">ปีที่(ฉบับที่)
                                                :</label>
                                            <div class="col-md-12">
                                                <input id="Rvolune" name="Rvolune" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Rpage">เลขหน้า</label>
                                            <div class="col-md-12">
                                                <input id="Rpage" name="Rpage" type="text" placeholder=""
                                                    class="form-control input-md">
                                                <input type="hidden" class="form-control" placeholder=""
                                                    value="<?=$lec_id?>" name="lec_id">
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="summit" class="btn btn-success" data-bs-toggle="modal"
                                                name="submitResearch">บันทึก</button>
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">ยกเลิก</button>


                                    </fieldset>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- ------------------------------------3 -->
                <div class="container mt-3">
                    <!-- presenter-->
                    <b>4.3 ประชุมวิชาการ(ตัวนำเสนอ) </b><br><br>
                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                        data-bs-target="#myModal3">
                        <i class='fas fa-book-reader' style='font-size:24px'></i> กรอกข้อมูลประชุมวิชาการ(ตัวนำเสนอ)
                    </button><br>

                    <table class="table" style="width: 75%;">
                        <?php
                while ($row = mysqli_fetch_assoc($result_pre)) { 
                 ?>
                        <tr>
                            <td><?php  echo "" .$row["Pautor"] .  ". ",
                     "(" .$row["Pyear"] .  "). ",
                     "" .$row["Ptite"] .  ". ",
                     "" .$row["Pditor"] .  ", ",
                     "" .$row["Ptopic"] .  " : ",
                     "" .$row["Pdate"] .  ". ",
                     "" .$row["Plocation"] .  ", ",
                     "" .$row["Ppublisher"] .  " : ",
                     "" .$row["Ppage"] .  ".  <br>"; ?></td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <button class="btn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal3<?php echo $row["p_id"]; ?>">
                                        <i class="fas fa-edit" style="font-size:18px;"> </i>
                                    </button>
                                    <a class="btn"
                                        href="form.php?deletePreConfirm=req&p_id=<?php echo $row["p_id"]; ?>&lec_id=<?=$lec_id?>">
                                        <i class="fas fa-trash" style="font-size:18px;"> </i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <form method="post">
                            <div class="modal fade" id="exampleModal3<?php echo $row["p_id"]; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ประชุมวิชาการ(ตัวนำเสนอ)</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>ชื่อผู้เขียน</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Pautor"]; ?>" name="Pautor">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ปีที่พิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Pyear"]; ?>" name="Pyear">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ชื่อบทความ/เอกสาร :</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Ptite"]; ?>" name="Ptite">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ใน ชื่อบรรณาธิการ</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Pditor"]; ?>" name="Pditor">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ชื่อหัวข้อ</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Ptopic"]; ?>" name="Ptopic">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>วัน/เดือน/ปี</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Pdate"]; ?>" name="Pdate">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>สถานที่พิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Plocation"]; ?>" name="Plocation">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>สำนักพิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Ppublisher"]; ?>" name="Ppublisher">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>หน้า</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Ppage"]; ?>" name="Ppage">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?=$lec_id?>" name="lec_id">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?php echo $row["p_id"]; ?>" name="p_id"><br>
                                                    </div><br>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">ยกเลิก</button>
                                            <button class="btn btn-primary" type="submit"
                                                name="submitUpdatePresenter">บันทึก</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php 
                }
                // end while loop
                include_once "./dialogDeletePre.php"; 
                include_once "./update_presenter.php"; 
                 ?>
                    </table>
                </div>

                <!-- The Modal -->
                <div class="modal" id="myModal3">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">ประชุมวิชาการ(ตัวนำเสนอ)</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form class="form-horizontal" method="post" action="./insert_presenter.php">
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Pautor">ชื่อผู้เขียน</label>
                                            <div class="col-md-12">
                                                <input id="Pautor" name="Pautor" type="text" placeholder=""
                                                    class="form-control input-md">
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Pyear">ปีที่พิมพ์</label>
                                            <div class="col-md-12">
                                                <input id="Pyear" name="Pyear" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Ptite">ชื่อบทความ/เอกสาร
                                                :</label>
                                            <div class="col-md-12">
                                                <input id="Ptite" name="Ptite" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Pditor">ใน
                                                ชื่อบรรณาธิการ</label>
                                            <div class="col-md-12">
                                                <input id="Pditor" name="Pditor" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Ptopic">ชื่อหัวข้อ</label>
                                            <div class="col-md-12">
                                                <input id="Ptopic" name="Ptopic" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Pdate">วัน/เดือน/ปี</label>
                                            <div class="col-md-12">
                                                <input id="Pdate" name="Pdate" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Plocation">สถานที่พิมพ์</label>
                                            <div class="col-md-12">
                                                <input id="Plocation" name="Plocation" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Ppublisher">สำนักพิมพ์</label>
                                            <div class="col-md-12">
                                                <input id="Ppublisher" name="Ppublisher" type="text" placeholder=""
                                                    class="form-control input-md">
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Ppage">หน้า</label>
                                            <div class="col-md-12">
                                                <input id="Ppage" name="Ppage" type="text" placeholder=""
                                                    class="form-control input-md">
                                                <input type="hidden" class="form-control" placeholder=""
                                                    value="<?=$lec_id?>" name="lec_id">
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="summit" class="btn btn-success" data-bs-toggle="modal"
                                                name="submitPresenter">บันทึก</button>
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">ยกเลิก</button>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------------------------4 -->
                <div class="container mt-3">
                    <!-- Aacademic -->
                    <b>4.4 บทความวิชาการ </b><br><br>
                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                        data-bs-target="#myModal4">
                        <i class='fas fa-file-invoice' style='font-size:24px'></i> กรอกข้อมูลบทความวิชาการ
                    </button><br>

                    <table class="table" style="width: 75%;">
                        <?php
                while ($row = mysqli_fetch_assoc($result_Aac)) { 
                 ?>
                        <tr>
                            <td><?php  echo "" .$row["Aautor"] .  ". ",
                     "(" .$row["Ayear"] .  "). ",
                     "" .$row["Abook"] .  ". ",
                     "พิมพ์ครั้งที่ " .$row["Aedition"] .  ". ",
                     "" .$row["Alocation"] .  " ",
                     ": " .$row["Apublisher"] .  ". ",
                     "" .$row["Apage"] .  " หน้า. <br>"; ?></td>

                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <button class="btn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal4<?php echo $row["a_id"]; ?>">
                                        <i class="fas fa-edit" style="font-size:18px;"> </i>
                                    </button>
                                    <a class="btn"
                                        href="form.php?deleteAacConfirm=req&a_id=<?php echo $row["a_id"]; ?>&lec_id=<?=$lec_id?>">
                                        <i class="fas fa-trash" style="font-size:18px;"> </i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <form method="post">
                            <div class="modal fade" id="exampleModal4<?php echo $row["a_id"]; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">บทความวิชาการ</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>ชื่อผู้แต่ง</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Aautor"]; ?>" name="Aautor">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ปีที่พิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Ayear"]; ?>" name="Ayear">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ชื่อหนังสือ</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Abook"]; ?>" name="Abook">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>พิมพ์ครั้งที่</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Aedition"]; ?>" name="Aedition">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>สถานที่พิมพ์ :</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Alocation"]; ?>" name="Alocation">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>สำนักพิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Apublisher"]; ?>" name="Apublisher">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>จำนวนหน้าที่พิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Apage"]; ?>" name="Apage">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?=$lec_id?>" name="lec_id">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?php echo $row["a_id"]; ?>" name="a_id"><br>
                                                    </div><br>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">ยกเลิก</button>
                                            <button class="btn btn-primary" type="submit"
                                                name="submitUpdateAacademic">บันทึก</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php 
                }
                // end while loop
                include_once "./dialogDeleteAac.php"; 
                include_once "./update_aacademic.php"; 
                 ?>
                    </table>
                </div>

                <!-- The Modal -->
                <div class="modal" id="myModal4">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">บทความวิชาการ</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form class="form-horizontal" method="post" action="./insert_aacademic.php">
                                    <fieldset>
                                        <div class="container">
                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="Aautor">ชื่อผู้แต่ง</label>
                                                <div class="col-md-12">
                                                    <input id="Aautor" name="Aautor" type="text" placeholder=""
                                                        class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="Ayear">ปีที่พิมพ์</label>
                                                <div class="col-md-12">
                                                    <input id="Ayear" name="Ayear" type="text" placeholder=""
                                                        class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="Abook">ชื่อหนังสือ</label>
                                                <div class="col-md-12">
                                                    <input id="Abook" name="Abook" type="text" placeholder=""
                                                        class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label"
                                                    for="Aedition">พิมพ์ครั้งที่</label>
                                                <div class="col-md-12">
                                                    <input id="Aedition" name="Aedition" type="text" placeholder=""
                                                        class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="Alocation">สถานที่พิมพ์
                                                    :</label>
                                                <div class="col-md-12">
                                                    <input id="Alocation" name="Alocation" type="text" placeholder=""
                                                        class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label"
                                                    for="Apublisher">สำนักพิมพ์</label>
                                                <div class="col-md-12">
                                                    <input id="Apublisher" name="Apublisher" type="text" placeholder=""
                                                        class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label"
                                                    for="Apage">จำนวนหน้าที่พิมพ์</label>
                                                <div class="col-md-12">
                                                    <input id="Apage" name="Apage" type="text" placeholder=""
                                                        class="form-control input-md">
                                                    <input type="hidden" class="form-control" placeholder=""
                                                        value="<?=$lec_id?>" name="lec_id">
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="summit" class="btn btn-success" data-bs-toggle="modal"
                                                    name="submitAacademic">บันทึก</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">ยกเลิก</button>
                                            </div>
                                    </fieldset>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------------------------5 -->
                <div class="container mt-3">
                    <!-- conferences-->
                    <b>4.5 ประชุมวิชาการ </b><br><br>
                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                        data-bs-target="#myModal5">
                        <i class='fas fa-book-open' style='font-size:24px'></i> กรอกข้อมูลประชุมวิชาการ
                    </button><br>

                    <table class="table" style="width:75%;">
                        <?php
                while ($row = mysqli_fetch_assoc($result_con)) { 
                 ?>
                        <tr>
                            <td><?php  echo "" .$row["Cautor"] .  ". ",
                     "(" .$row["Cyear"] .  "). ",
                     "" .$row["Ctite"] .  ". ",
                     "" .$row["Cditor"] .  ", ",
                     "" .$row["Ctopic"] .  " : ",
                     "" .$row["Cdate"] .  ". ",
                     "" .$row["Clocation"] .  ", ",
                     "" .$row["Cpublisher"] .  " : ",
                     "" .$row["Cpage"] .  ". <br>"; ?></td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <button class="btn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal5<?php echo $row["c_id"]; ?>">
                                        <i class="fas fa-edit" style="font-size:18px;"> </i>
                                    </button>
                                    <a class="btn"
                                        href="form.php?deleteConConfirm=req&c_id=<?php echo $row["c_id"]; ?>&lec_id=<?=$lec_id?>">
                                        <i class="fas fa-trash" style="font-size:18px;"> </i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <form method="post">
                            <div class="modal fade" id="exampleModal5<?php echo $row["c_id"]; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ประชุมวิชาการ</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>ชื่อผู้เขียน</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Cautor"]; ?>" name="Cautor">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ปีที่พิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Cyear"]; ?>" name="Cyear">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ชื่อบทความ/เอกสาร :</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Ctite"]; ?>" name="Ctite">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ใน ชื่อบรรณาธิการ</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Cditor"]; ?>" name="Cditor">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ชื่อหัวข้อ</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Ctopic"]; ?>" name="Ctopic">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>วัน/เดือน/ปี</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Cdate"]; ?>" name="Cdate">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>สถานที่พิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Clocation"]; ?>" name="Clocation">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>สำนักพิมพ์</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Cpublisher"]; ?>" name="Cpublisher">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>หน้า</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["Cpage"]; ?>" name="Cpage">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?=$lec_id?>" name="lec_id">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?php echo $row["c_id"]; ?>" name="c_id"><br>
                                                    </div><br>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">ยกเลิก</button>
                                            <button class="btn btn-primary" type="submit"
                                                name="submitUpdateConferences">บันทึก</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php 
                }
                // end while loop
                include_once "./dialogDeleteCon.php"; 
                include_once "./update_conferences.php"; 
                 ?>
                    </table>

                </div>

                <!-- The Modal -->
                <div class="modal" id="myModal5">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">ประชุมวิชาการ</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form class="form-horizontal" method="post" action="./insert_conferences.php">
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Cautor">ชื่อผู้เขียน</label>
                                            <div class="col-md-12">
                                                <input id="Cautor" name="Cautor" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Cyear">ปีที่พิมพ์</label>
                                            <div class="col-md-12">
                                                <input id="Cyear" name="Cyear" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Ctite">ชื่อบทความ/เอกสาร
                                                :</label>
                                            <div class="col-md-12">
                                                <input id="Ctite" name="Ctite" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Cditor">ใน
                                                ชื่อบรรณาธิการ</label>
                                            <div class="col-md-12">
                                                <input id="Cditor" name="Cditor" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Ctopic">ชื่อหัวข้อ</label>
                                            <div class="col-md-12">
                                                <input id="Ctopic" name="Ctopic" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Cdate">วัน/เดือน/ปี</label>
                                            <div class="col-md-12">
                                                <input id="Cdate" name="Cdate" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Clocation">สถานที่พิมพ์</label>
                                            <div class="col-md-12">
                                                <input id="Clocation" name="Clocation" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Cpublisher">สำนักพิมพ์</label>
                                            <div class="col-md-12">
                                                <input id="Cpublisher" name="Cpublisher" type="text" placeholder=""
                                                    class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="Cpage">หน้า</label>
                                            <div class="col-md-12">
                                                <input id="Cpage" name="Cpage" type="text" placeholder=""
                                                    class="form-control input-md">
                                                <input type="hidden" class="form-control" placeholder=""
                                                    value="<?=$lec_id?>" name="lec_id">
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="summit" class="btn btn-success" data-bs-toggle="modal"
                                                name="submitConferences">บันทึก</button>
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">ยกเลิก</button>
                                        </div>
                                    </fieldset>
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
                <br><!-- end container -->

                <!-- start subject -->
                <b>5. ภาระงานสอน</b>
                <div class="container mt-3">
                    <b>5.1 ภาระงานสอนเดิม</b><br>
                    <b>ระดับปริญญาตรี</b>
                    <form method="post" action="./insert_bachelor.php">
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <input type="text" class="form-control" v-model.trim="search_course_1"
                                    placeholder="รหัสวิชา" name="bach_code">
                                <button type="button" @click="searchCourseFunc_1" name=""
                                    class="btn btn-secondary text-white" id="..">
                                    ค้นหา
                                </button>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" v-model.trim="course_input_1"
                                    placeholder="ชื่อรายวิชา" name="bach_name">
                                <input type="hidden" class="form-control" placeholder="" value="<?=$lec_id?>"
                                    name="lec_id">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" name="submitBachelor" class="btn btn-warning text-white"
                                    id="btn1">
                                    บันทึก
                                </button>
                            </div>
                        </div>
                    </form>

                    <table class="table" style="width: 40%;">
                        <?php
                while ($row = mysqli_fetch_assoc($result_bac)) { 
                 ?>
                        <tr>
                            <td><?php echo $row["bach_code"]; ?></td>
                            <td><?php echo $row["bach_name"]; ?></td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a class="btn"
                                        href="form.php?deleteBacConfirm=req&bach_id=<?php echo $row["bach_id"]; ?>&lec_id=<?=$lec_id?>">
                                        <i class="fas fa-window-close" style="font-size:18px;"> </i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <form method="post">
                            <div class="modal fade mt-3" id="exampleModal51<?php echo $row["bach_id"]; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ระดับปริญญาตรี</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>รหัสวิชา</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["bach_code"]; ?>" name="bach_code">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ชื่อรายวิชา</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["bach_name"]; ?>" name="bach_name">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?=$lec_id?>" name="lec_id">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?php echo $row["bach_id"]; ?>" name="bach_id"><br>
                                                    </div><br>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">ยกเลิก</button>
                                            <button class="btn btn-primary" type="submit"
                                                name="submitUpdateBachelor">บันทึก</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php 
                }
                // end while loop
                include_once "./dialogDeleteBac.php"; 
                include_once "./update_bachelor.php"; 

                 ?>
                        </tbody>
                    </table>


                    <b>ระดับปริญญาโท</b>
                    <form method="post" action="./insert_master1.php">
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <input type="text" class="form-control" v-model.trim="search_course_2"
                                    placeholder="รหัสวิชา" name="mast_code">
                                <button type="button" @click="searchCourseFunc_2" class="btn btn-secondary text-white"
                                    id="btn1">
                                    ค้นหา
                                </button>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" v-model.trim="course_input_2"
                                    placeholder="ชื่อรายวิชา" name="mast_name">
                                <input type="hidden" class="form-control" placeholder="" value="<?=$lec_id?>"
                                    name="lec_id">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" name="submitMaster1" class="btn btn-warning text-white" id="btn1">
                                    บันทึก
                                </button>
                            </div>
                        </div>
                    </form>

                    <table class="table" style="width: 40%;">
                        <?php
                while ($row = mysqli_fetch_assoc($result_mas)) { 
                 ?>
                        <tr>
                            <td><?php echo $row["mast_code"]; ?></td>
                            <td><?php echo $row["mast_name"]; ?></td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a class="btn"
                                        href="form.php?deleteMasConfirm=req&mast_id=<?php echo $row["mast_id"]; ?>&lec_id=<?=$lec_id?>">
                                        <i class="fas fa-window-close" style="font-size:18px;"> </i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <form method="post">
                            <div class="modal fade" id="exampleModal52<?php echo $row["mast_id"]; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ระดับปริญญาโท</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>รหัสวิชา</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["mast_code"]; ?>" name="mast_code">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ชื่อรายวิชา</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["mast_name"]; ?>" name="mast_name">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?=$lec_id?>" name="lec_id">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?php echo $row["mast_id"]; ?>" name="mast_id"><br>
                                                    </div><br>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="submit"
                                                name="submitUpdateMaster1">Save
                                                changes</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php 
                }
                // end while loop
                include_once "./dialogDeleteMaster1.php"; 
                include_once "./update_master1.php"; 

                 ?>
                        </tbody>
                    </table>

                    <b>ระดับปริญญาเอก</b>
                    <form method="post" action="./insert_doctorate.php">
                        <div class="row mt-3">
                            <div class="col-md-2 mb-3">
                                <input type="text" class="form-control" v-model.trim="search_course_3"
                                    placeholder="รหัสวิชา" name="doc_code">
                                <button type="button" @click="searchCourseFunc_3" name="...."
                                    class="btn btn-secondary text-white" id="btn1">
                                    ค้นหา
                                </button>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" v-model.trim="course_input_3"
                                    placeholder="ชื่อรายวิชา" name="doc_name">
                                <input type="hidden" class="form-control" placeholder="" value="<?=$lec_id?>"
                                    name="lec_id">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" name="submitDoctorate" class="btn btn-warning text-white"
                                    id="btn1">
                                    บันทึก
                                </button>
                            </div>
                        </div>
                    </form>

                    <table class="table" style="width: 40%;">
                        <?php
                while ($row = mysqli_fetch_assoc($result_doc)) { 
                 ?>
                        <tr>
                            <td><?php echo $row["doc_code"]; ?></td>
                            <td><?php echo $row["doc_name"]; ?></td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a class="btn"
                                        href="form.php?deleteDocConfirm=req&doc_id=<?php echo $row["doc_id"]; ?>&lec_id=<?=$lec_id?>">
                                        <i class="fas fa-window-close" style="font-size:18px;"> </i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <form method="post">
                            <div class="modal fade" id="exampleModal53<?php echo $row["doc_id"]; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ระดับปริญญาเอก</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>รหัสวิชา</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["doc_code"]; ?>" name="doc_code">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ชื่อรายวิชา</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["doc_name"]; ?>" name="doc_name">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?=$lec_id?>" name="lec_id">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?php echo $row["doc_id"]; ?>" name="doc_id"><br>
                                                    </div><br>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">ยกเลิก</button>
                                            <button class="btn btn-primary" type="submit"
                                                name="submitUpdateDoctorate">บันทึก</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php 
                }
                // end while loop
                include_once "./dialogDeleteDoc.php"; 
                include_once "./update_doctorate.php"; 

                 ?>
                        </tbody>
                    </table>

                    <b>5.2 ภาระงานสอนที่เพิ่มขึ้น</b>
                    <form method="post" action="./insert_teachmore.php">
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <input type="text" class="form-control" v-model.trim="search_course_4"
                                    placeholder="รหัสวิชา" name="teach_code">
                                <button type="button" @click="searchCourseFunc_4" name="...."
                                    class="btn btn-secondary text-white" id="btn1">
                                    ค้นหา
                                </button>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" v-model.trim="course_input_4"
                                    placeholder="ชื่อรายวิชา" name="teach_name">
                                <input type="hidden" class="form-control" placeholder="" value="<?=$lec_id?>"
                                    name="lec_id">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" name="submitTeachmore" class="btn btn-warning text-white"
                                    id="btn1">
                                    บันทึก
                                </button>
                            </div>
                        </div>
                    </form>

                    <table class="table" style="width: 40%;">
                        <?php
                while ($row = mysqli_fetch_assoc($result_tea)) { 
                 ?>
                        <tr>
                            <td><?php echo $row["teach_code"]; ?></td>
                            <td><?php echo $row["teach_name"]; ?></td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a class="btn"
                                        href="form2.php?deleteTeaConfirm=req&teach_id=<?php echo $row["teach_id"]; ?>&lec_id=<?=$lec_id?>">
                                        <i class="fas fa-window-close" style="font-size:18px;"> </i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <form method="post">
                            <div class="modal fade" id="exampleModal54<?php echo $row["teach_id"]; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ภาระงานสอนที่เพิ่มขึ้น</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>รหัสวิชา</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["teach_code"]; ?>" name="teach_code">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>ชื่อรายวิชา</p>
                                                        <input type="text" class="form-control" placeholder=""
                                                            value="<?php echo $row["teach_name"]; ?>" name="teach_name">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?=$lec_id?>" name="lec_id">
                                                        <input type="hidden" class="form-control" placeholder=""
                                                            value="<?php echo $row["teach_id"]; ?>" name="teach_id"><br>
                                                    </div><br>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">ยกเลิก</button>
                                            <button class="btn btn-primary" type="submit"
                                                name="submitUpdateTeachmore">บันทึก</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php 
                }
                // end while loop
                include_once "./dialogDeleteTea.php"; 
                include_once "./insert_teachmore.php"; 

                 ?>
                        </tbody>
                    </table>
                    <br>
                </div>

                <a href="data.php" id="button1id" name="button1id" class="btn btn-success">เสร็จสิ้น</a>

            </div>
        </div>
    </div>


    <script>
    const app = new Vue({
        el: '#app',
        data: () => ({
            message: 'Hello Vue!',
            search_course_1: "",
            search_course_2: "",
            search_course_3: "",
            search_course_4: "",
            course_input_1: null,
            course_input_2: null,
            course_input_3: null,
            course_input_4: null,
        }),
        mounted() {

        },
        methods: {
            async getByIdCourses(course_code, number) {
                try {
                    const {
                        data
                    } = await axios.get(`./api/get_course.php?course_code=${course_code}`)
                    // console.log('data', data);

                    switch (number) {
                        case 1:
                            this.course_input_1 = data[0].course_name.trim();
                            break;
                        case 2:
                            this.course_input_2 = data[0].course_name.trim();
                            break;
                        case 3:
                            this.course_input_3 = data[0].course_name.trim();
                            break;
                        case 4:
                            this.course_input_4 = data[0].course_name.trim();
                            break;



                        default:
                            break;
                    }
                } catch (error) {
                    console.error(error)
                }
            },
            searchCourseFunc_1() {

                // console.log('search_course_1', this.search_course_1);
                this.getByIdCourses(this.search_course_1, 1)

            },
            searchCourseFunc_2() {

                // console.log('search_course_1', this.search_course_1);
                this.getByIdCourses(this.search_course_2, 2)

            },
            searchCourseFunc_3() {

                // console.log('search_course_1', this.search_course_1);
                this.getByIdCourses(this.search_course_3, 3)

            },
            searchCourseFunc_4() {

                // console.log('search_course_1', this.search_course_1);
                this.getByIdCourses(this.search_course_4, 4)

            }



        },
    })
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