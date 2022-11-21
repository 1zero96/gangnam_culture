<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

// 이전 페이지에서 값 가져오기
$bid = $_GET["bid"];
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];
$no = $_GET["no"];
$n_check = $_POST["n_check"];

// 작성일자
$w_date = date("Y-m-d");

// 파일 업로드
if($_FILES["up_file"]["name"] != NULL && $n_check == "on"){ // 파일 + 공지 있다면
    $tmp_name = $_FILES["up_file"]["tmp_name"];
    $f_name = $_FILES["up_file"]["name"]; 
    $up = move_uploaded_file($tmp_name, "../data/notice/$f_name");
    $f_type = $_FILES["up_file"]["type"]; 
    $f_size = $_FILES["up_file"]["size"]; 

    $sql = "update notice set ";
    $sql .= "n_title='$n_title',";
    $sql .= "n_content='$n_content',";
    $sql .= "w_date='$w_date', ";
    $sql .= "f_name='$f_name', ";
    $sql .= "f_type='$f_type', ";
    $sql .= "f_size='$f_size', ";
    $sql .= "status='1' ";
    $sql .= "where bid=$bid;";

} else if($_FILES["up_file"]["name"] != NULL) { // 공지x 파일이 있다면
    $tmp_name = $_FILES["up_file"]["tmp_name"];
    $f_name = $_FILES["up_file"]["name"]; 
    $up = move_uploaded_file($tmp_name, "../data/notice/$f_name");
    $f_type = $_FILES["up_file"]["type"]; 
    $f_size = $_FILES["up_file"]["size"]; 

    $sql = "update notice set ";
    $sql .= "n_title='$n_title',";
    $sql .= "n_content='$n_content',";
    $sql .= "w_date='$w_date', ";
    $sql .= "f_name='$f_name', ";
    $sql .= "f_type='$f_type', ";
    $sql .= "f_size='$f_size', ";
    $sql .= "status='0' ";
    $sql .= "where bid=$bid;";
    
} else if($n_check == "on") { // 공지o, 파일이 없다면
    $sql = "update notice set ";
    $sql .= "n_title='$n_title',";
    $sql .= "n_content='$n_content',";
    $sql .= "w_date='$w_date', ";
    $sql .= "status='1' ";
    $sql .= "where bid=$bid;";
} else { // 둘다 없다면
    $sql = "update notice set ";
    $sql .= "n_title='$n_title',";
    $sql .= "n_content='$n_content',";
    $sql .= "w_date='$w_date', ";
    $sql .= "status='0' ";
    $sql .= "where bid=$bid;";
}

echo $sql;
exit;

// 데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);

// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"view.php?bid=$bid&no=$no\";
    </script>
    ";
?>