<?php
  if(isset($_POST['Submit'])){
        include("./api/config/connect_db_1.php");
        $sql = "select * from admin where auser='".$_POST['a_user']."' and apwd='".md5($_POST['a_pwd'])."' limit 1 ";
        $rs = mysqli_query($conn,$sql);
        $num =mysqli_num_rows($rs);
                           
        if ($num == 1){
        $data =mysqli_fetch_array($rs);
         $_SESSION['ses_aid']=$data['aid'];
            echo "<script>";
            echo "window.location='data.php';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert('Username หรือ Password ไม่ถูกต้อง');";
            echo "location=index.php";
            echo "</script>";
            // exit;
        }
    }                          
?>