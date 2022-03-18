  <?php
     //กำหนดค่า Access-Control-Allow-Origin เพื่อให้สิทธิการเข้าถึงข้อมูล
     header("Access-Control-Allow-Origin: *");

     header("Content-Type: application/json; charset=UTF-8");

     header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");

     header("Access-Control-Max-Age: 3600");

     header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

     include_once "./config/connect_db_1.php";

     $requestMethod = $_SERVER["REQUEST_METHOD"];

     //ตรวจสอบว่าเป็น Method GET หรือไม่
     if ($requestMethod == 'GET') {

        $sql; 

        // WHERE Country='Germany' OR Country='Spain';
 
        if(isset($_GET['course_code'])){
            $course_code =$_GET['course_code'];
            // $sql = "SELECT * FROM course WHERE course_code=$course_code";
            $sql = "SELECT * FROM course WHERE course_code LIKE '%{$course_code}%'";
        } 
        else{
            $sql = "SELECT * FROM course ";
        }
 
        $result = mysqli_query($conn, $sql);

        if ($result) {

            if(mysqli_num_rows($result) > 0){
                               //สร้างตัวขึ้นมาเพื่อรอรับข้อมูล
                $arr;
                while ($row = mysqli_fetch_assoc($result)) {
                        // รับข้อมูลเเล้ว Push ใส่ array
                        $arr[] = $row;
                }
            
                echo json_encode($arr,JSON_NUMERIC_CHECK );
            }else{
                echo json_encode([]);
            //    echo "ไม่มี 1";
            }


        } else {
            echo json_encode([]);
            //    echo "ไม่มี 2";
        }



     }

  