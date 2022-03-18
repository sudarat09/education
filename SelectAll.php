<?php 
if(isset($_GET["lec_id"])){

    //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
                include_once("api/config/connect_db_1.php");
                $lec_id = $_GET["lec_id"];
                //$Tr_id = $_GET["Tr_id"];
                $sql = "SELECT * FROM lecturer WHERE lec_id=$lec_id";
                // $sql_lec = "SELECT * FROM lecturer JOIN lecturer lec USING (lec_id) 
                //              WHERE lecturer.lec_id = $lec_id";
                $sql_edu = "SELECT * FROM education JOIN lecturer lec USING (lec_id) 
                             WHERE education.lec_id = $lec_id";
                $sql_tre = "SELECT * FROM treatise JOIN lecturer lec USING (lec_id) 
                             WHERE treatise.lec_id = $lec_id";
                $sql_res = "SELECT * FROM research JOIN lecturer lec USING (lec_id) 
                             WHERE research.lec_id = $lec_id";
                $sql_pre = "SELECT * FROM presenter JOIN lecturer lec USING (lec_id) 
                             WHERE presenter.lec_id = $lec_id"; 
                $sql_Aac = "SELECT * FROM aacademic JOIN lecturer lec USING (lec_id) 
                             WHERE aacademic.lec_id = $lec_id"; 
                $sql_con = "SELECT * FROM conferences JOIN lecturer lec USING (lec_id) 
                             WHERE conferences.lec_id = $lec_id"; 
                $sql_bac = "SELECT * FROM bachelor JOIN lecturer lec USING (lec_id) 
                             WHERE bachelor.lec_id = $lec_id"; 
                $sql_mas = "SELECT * FROM master1 JOIN lecturer lec USING (lec_id) 
                             WHERE master1.lec_id = $lec_id"; 
                $sql_doc = "SELECT * FROM doctorate JOIN lecturer lec USING (lec_id) 
                             WHERE doctorate.lec_id = $lec_id";
                $sql_tea = "SELECT * FROM teachmore JOIN lecturer lec USING (lec_id) 
                             WHERE teachmore.lec_id = $lec_id";           
                $result = mysqli_query($conn, $sql);
                // $result_lec = mysqli_query($conn, $sql_lec); 
                $result_edu = mysqli_query($conn, $sql_edu); 
                $result_tre = mysqli_query($conn, $sql_tre);
                $result_res = mysqli_query($conn, $sql_res);
                $result_pre = mysqli_query($conn, $sql_pre);
                $result_Aac = mysqli_query($conn, $sql_Aac);
                $result_con = mysqli_query($conn, $sql_con);
                $result_bac = mysqli_query($conn, $sql_bac);
                $result_mas = mysqli_query($conn, $sql_mas);
                 $result_doc = mysqli_query($conn, $sql_doc);
                $result_tea = mysqli_query($conn, $sql_tea);
                $data = mysqli_fetch_assoc($result); 
                // echo $data["fname"];
?>
<?php
}else{
    echo "<div></div>";
}
?>