<?php
/** 작성자 입력을 위한 session 가져오기 */
include "../inc/session.php";

/** 이전 페이지에서 값 가져오기 */
$h_title = $_POST["h_title"];
$show = $_POST["show"];
$h_date = $_POST["h_date"];
$h_time = $_POST["h_time"];
$place = $_POST["place"];
$person = $_POST["person"];
$price = $_POST["price"];
$date = $_POST["h_date"]." ".$_POST["h_time"];

/** 파일 업로드 */
if($_FILES["up_file"]["name"] != ""){
  $tmp_name = $_FILES["up_file"]["tmp_name"];
  $name = $_FILES["up_file"]["name"]; 
  $up = move_uploaded_file($tmp_name, "../data/shows/$name");
};

$f_name = $_FILES["up_file"]["name"];
$f_type = $_FILES["up_file"]["type"];
$f_size =  $_FILES["up_file"]["size"];


/** DB 가져오기 */
include "../inc/dbcon.php";

/** 쿼리작성 */
  $sql = "insert into shows(";
  $sql .= "u_id, h_title, genre, h_date, place, ";
  $sql .= "headcount, price,";
  $sql .= "f_name, f_type, f_size";
  $sql .= ") values(";
  $sql .= "'$s_id', '$h_title', '$show', '$date', '$place', ";
  $sql .= "'$person', '$price',";
  $sql .= "'$f_name', '$f_type', '$f_size'";
  $sql .= ");";

/** 데이터에 쿼리 전송 */
mysqli_query($dbcon, $sql);

/** DB접속 종료 */
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        alert('등록되었습니다.');
        location.href = \"admin_show.php\";
    </script>
    ";
?>
?>