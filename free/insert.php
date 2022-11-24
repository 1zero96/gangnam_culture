<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

// 이전 페이지에서 값 가져오기
$f_title = $_POST["f_title"];
$f_content = $_POST["f_content"];

// 파일 업로드
if($_FILES["up_file"]["name"] != ""){
    $tmp_name = $_FILES["up_file"]["tmp_name"];
    $name = $_FILES["up_file"]["name"]; 
    $up = move_uploaded_file($tmp_name, "../data/notice/$name");
    };
    
    $f_name = $_FILES["up_file"]["name"];
    $f_type = $_FILES["up_file"]["type"];
    $f_size =  $_FILES["up_file"]["size"];
    

// 작성일자
$w_date = date("Y-m-d");

// 값 확인
// echo "<p> 제목 : ".$f_title."</p>";
// echo "<p> 내용 : ".$f_content."</p>";
// echo "<p> 작성자 : ".$s_name."</p>";
// echo "<p> 가입일 : ".$w_date."</p>";
// exit;

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "insert into free(";
$sql .= "u_id, f_title, f_content, writer, w_date ,";
$sql .= "f_name, f_type, f_content";

$sql .= ") values(";
$sql .= "'$s_id', '$f_title', '$f_content', '$s_name', '$w_date' ,";
$sql .= "'$f_name', '$f_type', '$f_content'";
$sql .= ");";
// echo $sql;
// exit;

// 데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);


// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"list.php\";
    </script>
    ";
?>