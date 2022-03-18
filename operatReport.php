 <?php
include_once "./SelectFile.php"; 
?>
 <!DOCTYPE html>
 <html lang="en">

 <head>

     <title>ขั้นตอนการปฎิบัติงานการปรับปรุงหลักสูตร</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;1,500&display=swap"
         rel="stylesheet">

     <!-- Add icon library -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
     body {
         margin: 10px;
         font-family: 'Sarabun', sans-serif;
     }

     .container {
         background-color: #D3E0EA;
         padding: 4px 40px;
         padding-left: 100px;
         padding-right: 0px;
     }

     h6 {
         font-size: 18px;
         color: rgb(60, 60, 60);
         margin-left: 50px;
     }

     h1 {
         /* font-size: 18px; */
         color: rgb(60, 60, 60);
     }

     h4 {
         /* font-size: 18px; */
         color: rgb(60, 60, 60);
     }

     p {
         font-size: 18px;
         color: blue;
     }

     .btnDownload {
         background-color: DodgerBlue;
         border: none;
         color: white;
         padding: 8px 9px;
         cursor: pointer;
         font-size: 12px;
     }

     .btnDownload:hover {
         background-color: RoyalBlue;
     }
     </style>

     <!-- vuejs2 cdn -->
     <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
     <!-- sweetalert2 cdn -->
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     <!-- axios cdn -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
 </head>

 <body>
     <div id="app">
         <a href="operat.php" class="btn btn-info">กลับไปหน้าแรก</a>
         <center>
             <h1>ขั้นตอนการปฎิบัติงานการปรับปรุงหลักสูตร<h1>
         </center>

         <center>
             <h4>
                 งานบริหารหลักสูตรและการจัดการเรียนการสอน ฝ่ายวิชาการและประกันคุณภาพ คณะการบัญชีและการจัดการ
                 <h4>
         </center>
         <div class="container">
             <div class="row">
                 <div class="col-4 bg-primary text-white p-3">

                     <center>
                         <p class="bg-primary text-white">แจ้งข้อมูลหลักสูตรครบวงรอบปรับปรุง</p>
                     </center>
                 </div>
                 <div class="col-sm-7 bg-Light">

                     <form method="post" @submit.prevent="uploadImage">
                         <h6>เอกสารแจ้งหลักสูตรครบวงรอบปรับปรุง</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_a)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["a_file"]?></span>
                     <button @click="downloadFile('<?=$row["a_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>
                 </div>
             </div>
         </div>

         <!-- -----------------------------1-->
         <div class="container">
             <div class="row">
                 <div class="col-4 bg-primary text-white p-3">
                     <center>
                         <p class="bg-primary text-white">ประชุมร่างหลักสูตรและสรรหาผู้ทรงคุณวุฒิ</p>
                     </center>

                 </div>

                 <!-- <form method="post" action="./insert_FileA.php"> -->
                 <div class="col-sm-5 bg-Light">
                     <form method="post" @submit.prevent="uploadImage">
                         <h6>เอกสารประชุมร่างหลักสูตรและสรรหาผู้ทรงคุณวุฒิ</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_b)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["b_file"]?></span>
                     <button @click="downloadFile('<?=$row["b_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>

                     <form method="post" @submit.prevent="uploadImage">
                         <h6>รายชื่อผู้ที่เข้าร่วมประชุม</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_c)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["c_file"]?></span>
                     <button @click="downloadFile('<?=$row["c_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>

                     <form method="post" @submit.prevent="uploadImage">
                         <h6>มติที่ประชุมหลักสูตร</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_d)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["d_file"]?></span>
                     <button @click="downloadFile('<?=$row["d_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>
                     <form method="post" @submit.prevent="uploadImage">
                         <h6>ข้อมูลหลักสูตรฉบับร่าง</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_e)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["e_file"]?></span>
                     <button @click="downloadFile('<?=$row["e_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>
                     <!-- </form> -->
                 </div>

                 <!-- </form> -->
             </div>
         </div>

         <!-- -----------------------------2 -->
         <div class="container">
             <div class="row">
                 <div class="col-4 bg-primary text-white p-3">
                     <center>
                         <p class="bg-primary text-white">เชิญผู้ทรงคุณวุฒิ/ทำคำสั่งคณะกรรมการดำเนินงาน</p>
                     </center>
                 </div>
                 <div class="col-sm-5 bg-Light">
                     <form method="post" action="./insert_FileA.php">
                         <h6>หนังสือเชิญเป็นกรรมการผู้ทรงวุฒิ</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_g)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["g_file"]?></span>
                     <button @click="downloadFile('<?=$row["g_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>

                     <form method="post" action="./insert_FileA.php">
                         <h6>หนังสือตอบรับเป็นกรรมการผู้ทรงวุฒิ</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_h)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["h_file"]?></span>
                     <button @click="downloadFile('<?=$row["h_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>

                     <form method="post" action="./insert_FileA.php">
                         <h6>คำสั่งคณะกรรมการดำเนินงานปรับปรุงหลักสูตร</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_i)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["i_file"]?></span>
                     <button @click="downloadFile('<?=$row["i_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>
                 </div>
             </div>
         </div>
         <!-- -----------------------------3 -->
         <div class="container">
             <div class="row">
                 <div class="col-4 bg-primary text-white p-3">

                     <center>
                         <p class="bg-primary text-white">ประชุมวิพากษ์หลักสูตร</p>
                     </center>

                 </div>
                 <div class="col-sm-5 bg-Light">
                     <form method="post" @submit.prevent="uploadImage">
                         <h6>หนังสือเชิญประชุมวิพากษ์หลักสูตร</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_j)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["j_file"]?></span>
                     <button @click="downloadFile('<?=$row["j_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>


                     <form method="post" @submit.prevent="uploadImage">
                         <h6>หนังสือตอบรับการเข้าประชุมวิพากษ์หลักสูตร</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_k)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["k_file"]?></span>
                     <button @click="downloadFile('<?=$row["k_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>

                     <form method="post" @submit.prevent="uploadImage">
                         <h6>มติที่ประชุมวิพากษ์หลักสูตร</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_l)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["l_file"]?></span>
                     <button @click="downloadFile('<?=$row["l_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>

                     <form method="post" @submit.prevent="uploadImage">
                         <h6>ข้อมูลหลักสูตรฉบับแก้ไขตามมติที่ประชุมวิพากษ์หลักสูตร</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_m)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["m_file"]?></span>
                     <button @click="downloadFile('<?=$row["m_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>
                 </div>
             </div>
         </div>
         <!-- -----------------------------4 -->
         <div class="container">
             <div class="row">
                 <div class="col-4 bg-primary text-white p-3">
                     <center>
                         <p class="bg-primary text-white">จัดเตรียมหลักสูตรฉบับสมบูรณ์เสนอคณะฯ
                             <br>และมหาวิทยาลัยมหาสารคาม
                         </p>
                     </center>
                 </div>
                 <div class="col-sm-5 bg-Light">
                     <form method="post" @submit.prevent="uploadImage">
                         <h6>หนังสือเสนอเข้าวาระที่ประชุมคณะกรรมการประจำคณะฯ</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_n)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["n_file"]?></span>
                     <button @click="downloadFile('<?=$row["n_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>

                     <form method="post" @submit.prevent="uploadImage">
                         <h6>ข้อมูลหลักสูตรฉบับสมบูรณ์</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_o)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["o_file"]?></span>
                     <button @click="downloadFile('<?=$row["o_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>

                     <form method="post" @submit.prevent="uploadImage">
                         <h6>หนังสือเสนอเข้าวาระที่ประชุมคณะกรรมการวิชาการมหาวิทยาลัยมหาสารคาม</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_p)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["p_file"]?></span>
                     <button @click="downloadFile('<?=$row["p_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>

                     <form method="post" @submit.prevent="uploadImage">
                         <h6>มติที่ประชุมคณะกรรมการประจำคณะฯ</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_q)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["q_file"]?></span>
                     <button @click="downloadFile('<?=$row["q_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>

                     <form method="post" @submit.prevent="uploadImage">
                         <h6>มติที่ประชุมคณะกรรมการวิชามหาวิทยาลัยมหาสารคาม</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_r)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["r_file"]?></span>
                     <button @click="downloadFile('<?=$row["r_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>
                 </div>
             </div>
         </div>
         <!-- -----------------------------5-->
         <div class="container">
             <div class="row">
                 <div class="col-4 bg-primary text-white p-3">
                     <center>
                         <p class="bg-primary text-white">สรุปข้อมูลการดำเนินงานปรับปรุงหลักสูตรเสนอผู้บริหารคณะฯ</p>
                     </center>
                 </div>
                 <div class="col-sm-5 bg-Light">
                     <form method="post" @submit.prevent="uploadImage">
                         <h6>รายงานผลการดำเนินงานปรับปรุงหลักสูตร</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_s)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["s_file"]?></span>
                     <button @click="downloadFile('<?=$row["s_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>
                 </div>
             </div>
         </div>
         <!-- -----------------------------6-->
         <div class="container">
             <div class="row">
                 <div class="col-4 bg-primary text-white p-3">

                     <center>
                         <p class="bg-primary text-white">บันทึกข้อมูลหลักสูตรในระบบ CHECO</p>
                     </center>

                 </div>
                 <div class="col-sm-5 bg-Light">


                     <form method="post" @submit.prevent="uploadImage">
                         <h6>รายงานการบันทึกข้อมูลหลักสูตรในระบบ CHECO</h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_t)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["t_file"]?></span>
                     <button @click="downloadFile('<?=$row["t_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>
                 </div>
             </div>
         </div>
         <!-- -----------------------------7-->
         <div class="container">
             <div class="row">
                 <div class="col-4 bg-primary text-white p-3">

                     <center>
                         <p class="bg-primary text-white">ติดตามและรายงานผลการรับรองหลักสูตร จาก สกอ.</p>
                     </center>
                 </div>
                 <div class="col-sm-5 bg-Light">

                     <form method="post" @submit.prevent="uploadImage">
                         <h6>รายงานผลการรับรองหลักสูตรจาก สกอ. CHECO </h6>
                     </form>
                     <?php
                        while ($row = mysqli_fetch_assoc($result_u)) { ?>
                     <span style="margin-right: 6rem!important;" class="ml-5"><?=$row["u_file"]?></span>
                     <button @click="downloadFile('<?=$row["u_file"]?>')" class="btnDownload"><i
                             class="fa fa-download"></i>DownLoad</button><br>
                     <?php    }
                    ?><br>
                 </div>
             </div>
         </div>
         <!-- -----------------------------8-->

     </div>
     <center>
         <a href="operat.php" class="btn btn-info">กลับไปหน้าแรก</a>
         <a href="data.php" id="button1id" name="button1id" class="btn btn-success">ไปหน้าหลัก</a>
         <center>
             <?php
                include_once "./docScript.php"; 
            ?>
             <!-- <script>
             document.addEventListener("DOMContentLoaded", function(event) {
                 var scrollpos = localStorage.getItem('scrollpos');
                 if (scrollpos) window.scrollTo(0, scrollpos);
             });

             window.onbeforeunload = function(e) {
                 localStorage.setItem('scrollpos', window.scrollY);
             };
             </script> -->

 </body>

 </html>