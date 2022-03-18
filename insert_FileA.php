<?php

header("Access-Control-Allow-Origin: *");

header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");

header("Access-Control-Max-Age: 3600");

header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod == 'POST') {

    $input = json_decode(file_get_contents("php://input"));
    $action = $input->action;

    if ($action == "upload_image_A") {

        // รับค่าจาก Json Object มาเก็บไว้ในตัวแปร
        $img = $input->img;
        $img_type = $input->img_type;

        // $img = mysqli_real_escape_string($conn, $input["img"]);
        // $img_type = mysqli_real_escape_string($conn, $input["img_type"]);

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);

            // $file_type_aux = explode($folderPath, $file_parts[0]);
            // $file_type = $file_type_aux[1];
            $file_base64 = base64_decode($file_parts[1]);

            //ชื่อไฟล์
            $img = uniqid() . "." . "$img_type";
 
                include_once "./api/config/connect_db_file.php";

                
               // sql to delete a record
               $sql_delete_all = "DELETE FROM afile  ";

               mysqli_query($conn, $sql_delete_all);
               
 
                $sql = "INSERT INTO `afile` (`a_id`, `a_file`) 
                        VALUES (NULL, '$img');"; 
       

                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);  
                         echo  "<script> location = './operat.php'; </script>";
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }
 
            
        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_B") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM bfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `bfile` (`b_id`, `b_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_C") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM cfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `cfile` (`c_id`, `c_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
        else if($action == "upload_image_D") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM dfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `dfile` (`d_id`, `d_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
       else if($action == "upload_image_E") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM efile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `efile` (`e_id`, `e_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_G") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM gfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `gfile` (`g_id`, `g_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_H") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM hfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `hfile` (`h_id`, `h_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
     else if($action == "upload_image_I") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM ifile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `ifile` (`i_id`, `i_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_J") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM jfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `jfile` (`j_id`, `j_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_K") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM kfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `kfile` (`k_id`, `k_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_L") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM lfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `lfile` (`l_id`, `l_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_M") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM mfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `mfile` (`m_id`, `m_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_N") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM nfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `nfile` (`n_id`, `n_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_O") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM ofile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `ofile` (`o_id`, `o_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_P") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM pfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `pfile` (`p_id`, `p_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_Q") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM qfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `qfile` (`q_id`, `q_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_R") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM rfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `rfile` (`r_id`, `r_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_S") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM sfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `sfile` (`s_id`, `s_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_T") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM tfile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `tfile` (`t_id`, `t_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
    else if($action == "upload_image_U") {
        $img = $input->img;
        $img_type = $input->img_type;

        if ($img_type !== null) {
            // path ที่ต้องการอัปไปเก็บ
            $folderPath = "./uploads/";

            $file_parts = explode(";base64,", $img);
            $file_base64 = base64_decode($file_parts[1]);
            $img = uniqid() . "." . "$img_type";
                include_once "./api/config/connect_db_file.php";
               $sql_delete_all = "DELETE FROM ufile  ";
               mysqli_query($conn, $sql_delete_all);
               
                $sql = "INSERT INTO `ufile` (`u_id`, `u_file`) 
                        VALUES (NULL, '$img');"; 
       
                   if (mysqli_query($conn, $sql)) {
                         file_put_contents($folderPath . $img, $file_base64);   
                    } 
                    else {
                         echo  "บันทึกข้อมูลไม่สำเร็จ";
                    }

        } else {
            $img = null;
        }

    }
}
?>