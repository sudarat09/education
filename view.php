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

    <!-- การลิ้ง btn print  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- icon home -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
    body {
        font-family: 'Sarabun', sans-serif;
        margin: 5px;
        background: white;
    }

    .main-page {
        width: 300mm;
        /* padding: 2cm; */

        min-height: 500mm;
        margin: 10mm auto;
        background: white;
        box-shadow: 1 1 0.5cm rgba(0, 0, 0, 0.5);
    }

    @page {
        margin-right: 2cm;
        margin-left: 2.5cm;
        margin-top: 2.5cm;
        margin-bottom: 2cm;
    }

    @media print {

        html,
        body {
            /* width: 210mm;
            height: 297mm; */
        }

        .main-page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
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
        /* font-size: 17px; */
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

    .text-center {
        font-size: 18px;
    }

    .p {
        font-size: 16px;
    }

    .b {

        font-size: 16px;
    }

    .btn-primary {
        color: #fff;
        background-color: #0dcaf0;
        border-color: #59cce4;
        padding-right: 21px;
        padding-left: 12px;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    </style>
</head>

<body>
    <a href="data.php" class="btn btn-info d-print-none" style="font-size:16px; color:white;">
        <i class='fas fa-home'></i> กลับไปหน้าแรก</a>
    <div class="main-page">
        <div class="paper-area">
            <div class="text-center mb-3">
                <img src="./images/mbs.png" class="d-print-none" alt="Norther Lights" style="width:16%">
                <br class="d-print-none">
                <b class="text-center">ประวัติการศึกษาและผลงานทางวิชาการ </b><br>
                <b>ของอาจารย์ผู้รับผิดชอบหลักสูตร</b>
            </div>
            </biv>
            <form action="process.php" method="POST">
                <b for="fname">1. ชื่อ</b> <?php echo $data["fname"]; ?>
                <b for="lname">สกุล</b> <?= $data["lname"] ?>
                <b for="position">ตำแหน่งทางวิชาการ</b> <?= $data["position"]  ?><br>
            </form>
            <b> 2. สังกัด </b> คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม<br>

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

                            </tr>
                            <?php 
                   $i++;
                }
                 ?>
                        </tbody>
                    </table>

                </div>
            </div>



            <!-- ------------------------------------1 -->
            <b> 4. ผลงานทางวิชาการ </b>
            <div class="container mt-3">

                <!-- treatise -->
                <b>4.1 หนังสือ/ตำรา</b>
                <div class="container">
                    <?php
                while ($row = mysqli_fetch_assoc($result_tre)) { 
                echo "" .$row["Tautor"] .  ". ",
                     "(" .$row["Tyear"] .  "). ",
                     "" .$row["Tbook"] .  ". ",
                     "พิมพ์ครั้งที่ " .$row["Tedition"] .  ". ",
                     "" .$row["Tlocation"] .  " ",
                     ": " .$row["Tpublisher"] .  ". ",
                     "" .$row["Tpage"] .  " หน้า. <br>";
                }
                 ?>
                </div>
            </div>


            <!-- ------------------------------------2 -->
            <div class="container mt-3">
                <!-- research-->
                <b>4.2 บทความวิจัย </b>
                <div class="container">
                    <?php
                while ($row = mysqli_fetch_assoc($result_res)) { 
                     echo "" .$row["Rautor"] .  ". ","(" .$row["Ryear"] .  "). ","" .$row["Rtite"] .  ". ","" .$row["Rtite_jour"] .  ", ","" .$row["Rvolune"] .  " : ","" .$row["Rpage"] .  ". ";
                }
                 ?>
                </div>
            </div>

            <!-- ------------------------------------3 -->
            <div class="container mt-3">
                <!-- presenter-->
                <b>4.3 ประชุมวิชาการ(ตัวนำเสนอ) </b>
                <div class="container">
                    <?php
                while ($row = mysqli_fetch_assoc($result_pre)) { 
                echo "" .$row["Pautor"] .  ". ",
                     "(" .$row["Pyear"] .  "). ",
                     "" .$row["Ptite"] .  ". ",
                     "" .$row["Pditor"] .  ", ",
                     "" .$row["Ptopic"] .  " : ",
                     "" .$row["Pdate"] .  ". ",
                     "" .$row["Plocation"] .  ", ",
                     "" .$row["Ppublisher"] .  " : ",
                     "" .$row["Ppage"] .  ". ";
                }
                 ?>
                </div>
            </div>

            <!-- ------------------------------------4 -->
            <div class="container mt-3">
                <!-- Aacademic -->
                <b>4.4 บทความวิชาการ </b>
                <div class="container">
                    <?php
                while ($row = mysqli_fetch_assoc($result_Aac)) { 
                echo "" .$row["Aautor"] .  ". ",
                     "(" .$row["Ayear"] .  "). ",
                     "" .$row["Abook"] .  ". ",
                     "พิมพ์ครั้งที่ " .$row["Aedition"] .  ". ",
                     "" .$row["Alocation"] .  " ",
                     ": " .$row["Apublisher"] .  ". ",
                     "" .$row["Apage"] .  " หน้า. <br>";
                }
                 ?>
                </div>
            </div>
            <!---------------------------------5 -->
            <div class="container mt-3">
                <!-- conferences-->
                <b>4.5 ประชุมวิชาการ </b>
                <div class="container">
                    <?php
                while ($row = mysqli_fetch_assoc($result_con)) { 
                echo "" .$row["Cautor"] .  ". ",
                     "(" .$row["Cyear"] .  "). ",
                     "" .$row["Ctite"] .  ". ",
                     "" .$row["Cditor"] .  ", ",
                     "" .$row["Ctopic"] .  " : ",
                     "" .$row["Cdate"] .  ". ",
                     "" .$row["Clocation"] .  ", ",
                     "" .$row["Cpublisher"] .  " : ",
                     "" .$row["Cpage"] .  ". <br>";
                }
                 ?>
                </div>
            </div><br>

            <!-- end container -->

            <!-- start subject -->
            <b>
                <b>5. ภาระงานสอน</b>
            </b>
            <div class="container mt-3">
                <b>5.1 ภาระงานสอนเดิม</b> <br>
                <b>ระดับปริญญาตรี</b>
                <div class="container mt-2">
                    <?php
                while ($row = mysqli_fetch_assoc($result_bac)) { 
                echo "" .$row["bach_code"] .  " ",
                     "" .$row["bach_name"] .  "<br>";
                }
                 ?>
                    <br>
                </div>

                <b>ระดับปริญญาโท</b>
                <div class="container mt-2">
                    <?php
                while ($row = mysqli_fetch_assoc($result_mas)) { 
                echo "" .$row["mast_code"] .  " ",
                     "" .$row["mast_name"] .  "<br>";
                }
                 ?>
                </div>
                <br>

                <b>ระดับปริญญาเอก</b>
                <div class="container mt-2">
                    <?php
                while ($row = mysqli_fetch_assoc($result_doc)) { 
                echo "" .$row["doc_code"] .  " ",
                     "" .$row["doc_name"] .  "<br>";
                }
                 ?>
                </div>
                <br>
            </div>

            <b>5.2 ภาระงานสอนที่เพิ่มขึ้น</b>
            <div class="container mt-2">
                <div class="container">
                    <?php
                        while ($row = mysqli_fetch_assoc($result_tea)) { 
                        echo "" .$row["teach_code"] .  " ",
                            "" .$row["teach_name"] .  "<br>";
                        }
                    
                        ?>
                </div>
            </div>
            <br>
            <button class="btn btn-primary d-print-none" onclick="window.print()" style="font-size:16px; color:white"><i
                    class="fa fa-print"> Print</i></button>
            <!-- <button style="font-size:48px;color:gray"><i class="fa fa-print"></i></button> -->
        </div>
        <!-- paper-area -->
    </div>
    <!-- main-page -->
</body>

</html>