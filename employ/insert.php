<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

// 이전 페이지에서 값 가져오기
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];
$pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
$parent_id=$_POST["parent_id"];

if(isset($_POST['lockpost'])){
    $lo_post = '1';
}else{
    $lo_post = '0';
}

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


// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
if($parent_id){
    $sql = "insert into employ(";
    $sql .= "n_title, n_content, writer, pwd, w_date,";
    $sql .= "f_name, f_type, f_size, lock_post, parent_id";
    $sql .= ") values(";
    $sql .= "'$n_title', '$n_content', '$s_name', '$pwd', '$w_date', ";
    $sql .= "'$f_name', '$f_type', '$f_size', '$lo_post', '$parent_id' ";
    $sql .= ");";
}else{
    $sql = "insert into employ(";
    $sql .= "n_title, n_content, writer, pwd, w_date,";
    $sql .= "f_name, f_type, f_size, lock_post";
    $sql .= ") values(";
    $sql .= "'$n_title', '$n_content', '$s_name', '$pwd', '$w_date', ";
    $sql .= "'$f_name', '$f_type', '$f_size', '$lo_post' ";
    $sql .= ");";
}


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