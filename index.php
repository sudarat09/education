<?php
session_start();
unset($_SESSION['ses_aid']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>การจัดการประวัติการศึกษาและผลงานทางวิชาการ
        ของอาจารย์ผู้รับผิดชอบหลักสูตร</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- icon  -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>
<style>
body {
    padding: 1cm;
    background-color: #DCDCDC;
}

h1 {
    color: #008CBA;
}

h2 {
    color: #008CBA;
}

.btn {
    padding-top: 40px;
    padding-bottom: 40px;
    padding-right: 80px;
    padding-left: 80px;
    font-size: 20px;
    text-shadow: 2px 2px 4px #000000;
}
</style>

<body>

    <div class="text-center">
        <img src="./images/mbs.png" alt="Norther Lights" style="width:14%">
        <h1>
            ระบบการจัดการประวัติการศึกษาและผลงานทางวิชาการ <br>
        </h1>
        <h2>ของอาจารย์ผู้รับผิดชอบหลักสูตร</h2>
        <br>
    </div>
    <div class="container">
        <div class="jumbotron">
            <div class="row">

                <!-- เจ้าหน้าที่ -->
                <div class="col-md-6"><br>
                    <center>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" style="">

                            <i style="font-size:60px; color:while;" class='
                         fas'>&#xf406;</i><br>
                            <b>ผู้ดูแลระบบ</b>
                        </a>
                    </center>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">ผู้ดูแลระบบ</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form method="post">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="a_user" name="a_user"
                                                aria-describedby="emailHelp">

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="a_pwd" name="a_pwd">
                                        </div>

                                        <button id="Submit" name="Submit" class="btn-primary">เข้าสู่ระบบ</button>
                                    </form>

                                    <?php
                                     include_once "./login.php"; 
                                    ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- บุคลากร -->
                <div class="text-center col-md-6"><br>
                    <a href="data.php" class="btn btn-primary" style="">
                        <i style='font-size:65px' class='fas'>&#xf0c0;</i> <br>
                        <b>บุคลากร</b></a>
                </div>
            </div>

        </div>
    </div>

</body>

</html>