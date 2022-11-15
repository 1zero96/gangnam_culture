<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

// 이전 페이지에서 값 가져오기
$f_idx = $_GET["f_idx"];
$f_title = $_POST["f_title"];
$f_content = $_POST["f_content"];
$no = $_GET["no"];

// 작성일자
$w_date = date("Y-m-d");

// 값 확인
/* echo "<p> idx : ".$f_idx."</p>";
echo "<p> 제목 : ".$f_title."</p>";
echo "<p> 내용 : ".$f_content."</p>";
echo "<p> 작성일 : ".$w_date."</p>";
*/ 

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "update free set ";
$sql .= "f_title='$f_title',";
$sql .= "f_content='$f_content',";
$sql .= "w_date='$w_date' ";
$sql .= "where idx=$f_idx;";
//echo $sql;
//exit;

// 데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);

// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"view.php?f_idx=$f_idx&no=$no\";
    </script>
    ";
?>