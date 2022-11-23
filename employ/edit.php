<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

// 이전 페이지에서 값 가져오기
$bid = $_GET["bid"];
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];
$pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
$no = $_GET["no"];

if(isset($_POST['lockpost'])){
    $lo_post = '1';
}else{
    $lo_post = '0';
}



// 작성일자
$w_date = date("Y-m-d");

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성

if($_FILES["up_file"]["name"] != NULL) { // 파일이 있다면
    $sql = "update employ set ";
    $sql .= "n_title='$n_title',";
    $sql .= "n_content='$n_content',";
    $sql .= "pwd='$pwd',";
    $sql .= "w_date='$w_date',";
    $sql .= "f_name='$f_name', ";
    $sql .= "f_type='$f_type', ";
    $sql .= "f_size='$f_size', ";
    $sql .= "lockpost='$lo_post', ";
    $sql .= "where bid=$bid;";
} else {
    $sql = "update employ set ";
    $sql .= "n_title='$n_title',";
    $sql .= "n_content='$n_content',";
    $sql .= "pwd='$pwd', ";
    $sql .= "w_date='$w_date', ";
    $sql .= "lock_post='$lo_post'";
    $sql .= "where bid=$bid;";
}
// 데이터베이스에 쿼리 전송
$result = mysqli_query($dbcon, $sql);


// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"view.php?bid=$bid&no=$no\";
    </script>
    ";
?>