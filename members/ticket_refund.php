<?php
/** ajax 데이터 가져오기 */ 
$tid = $_POST["tid"];

$r_date = date("Y-m-d H:i:s");

/** 세션이랑 로그인 체크 가져오기 */
include "../inc/session.php";
include "../inc/user_check.php";

/** DB 가져오기 */
include "../inc/dbcon.php";

/** 쿼리 작성 */
$sql = "update ticket set status = '1', r_date='$r_date' where tid ='$tid';";

/** DB 전송 */
$result = mysqli_query($dbcon, $sql);

if(!$result){
  echo "no";
}
?>