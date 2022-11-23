<?php 
/** 세션 가져오기 */
include "../inc/session.php";

/** 이전 페이지에서 값 가져오기 */
$bid = $_GET["bid"];

/** DB 가져오기 */
include "../inc/dbcon.php";

/** 쿼리 작성 */
$sql = "update notice set status ='0' where bid ='$bid';";

/** DB 전송 */
mysqli_query($dbcon, $sql);

// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션 location.href="이동할 페이지 주소"
echo "
  <script type='text/javascript'>
    alert('해제 했습니다.');
    window.history.back();
  </script>"

?>