<?php
@session_start();
// if(empty($_SESSION['ses_aid'])){
// 	// echo "Access Denied";
// 	// exit;
// }
?>
<?php 
    //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
                include_once("api/config/connect_db_file.php");
                $sql_a = "SELECT * FROM `afile` ORDER BY `a_file` DESC LIMIT 1";
                $sql_b = "SELECT * FROM `bfile` ORDER BY `b_file` DESC LIMIT 1"; 
                $sql_c = "SELECT * FROM `cfile` ORDER BY `c_file` DESC LIMIT 1";  
                $sql_d = "SELECT * FROM `dfile` ORDER BY `d_file` DESC LIMIT 1"; 
                $sql_e = "SELECT * FROM `efile` ORDER BY `e_file` DESC LIMIT 1";
                $sql_g = "SELECT * FROM `gfile` ORDER BY `g_file` DESC LIMIT 1";   
                $sql_h = "SELECT * FROM `hfile` ORDER BY `h_file` DESC LIMIT 1";  
                $sql_i = "SELECT * FROM `ifile` ORDER BY `i_file` DESC LIMIT 1";  
                $sql_j = "SELECT * FROM `jfile` ORDER BY `j_file` DESC LIMIT 1"; 
                $sql_k = "SELECT * FROM `kfile` ORDER BY `k_file` DESC LIMIT 1";
                $sql_l = "SELECT * FROM `lfile` ORDER BY `l_file` DESC LIMIT 1";
                $sql_m = "SELECT * FROM `mfile` ORDER BY `m_file` DESC LIMIT 1";
                $sql_n = "SELECT * FROM `nfile` ORDER BY `n_file` DESC LIMIT 1";
                $sql_o = "SELECT * FROM `ofile` ORDER BY `o_file` DESC LIMIT 1";
                $sql_p = "SELECT * FROM `pfile` ORDER BY `p_file` DESC LIMIT 1";
                $sql_q = "SELECT * FROM `qfile` ORDER BY `q_file` DESC LIMIT 1";
                $sql_r = "SELECT * FROM `rfile` ORDER BY `r_file` DESC LIMIT 1";
                $sql_s = "SELECT * FROM `sfile` ORDER BY `s_file` DESC LIMIT 1";
                $sql_t = "SELECT * FROM `tfile` ORDER BY `t_file` DESC LIMIT 1";
                $sql_u = "SELECT * FROM `ufile` ORDER BY `u_file` DESC LIMIT 1";
                $result = mysqli_query($conn, $sql);
                $result_a = mysqli_query($conn, $sql_a); 
                $result_b = mysqli_query($conn, $sql_b);
                $result_c = mysqli_query($conn, $sql_c);
                $result_d = mysqli_query($conn, $sql_d);
                $result_e = mysqli_query($conn, $sql_e);
                $result_g = mysqli_query($conn, $sql_g);
                $result_h = mysqli_query($conn, $sql_h);
                $result_i = mysqli_query($conn, $sql_i);
                $result_j = mysqli_query($conn, $sql_j);
                $result_k = mysqli_query($conn, $sql_k);
                $result_l = mysqli_query($conn, $sql_l);
                $result_m = mysqli_query($conn, $sql_m);
                $result_n = mysqli_query($conn, $sql_n);
                $result_o = mysqli_query($conn, $sql_o);
                $result_p = mysqli_query($conn, $sql_p);
                $result_q = mysqli_query($conn, $sql_q);
                $result_r = mysqli_query($conn, $sql_r);
                $result_s = mysqli_query($conn, $sql_s);
                $result_t = mysqli_query($conn, $sql_t);
                $result_u = mysqli_query($conn, $sql_u);

                $data = mysqli_fetch_assoc($result); 
                
?>