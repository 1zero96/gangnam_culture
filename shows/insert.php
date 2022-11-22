<?php 
/** 세션 가져오기 */
include "../inc/session.php";

/** 이전 페이지에서 값 가져오기 */
$bid = $_GET["bid"];
$u_id = $s_id;
$u_name = $_POST["u_name"]; // 예매자
$mobile = $_POST["mobile"]; // 전화번호
$tcount = $_POST["tcount"]; // 티켓 수

/** DB 가져오기 */
include "../inc/dbcon.php";

/** 쿼리 작성 */
$s_sql = "select * from shows where bid='$bid';";

/** 쿼리 전송 */
$s_result = mysqli_query($dbcon, $s_sql);
$s_array = mysqli_fetch_array($s_result);

/** 쿼리에서 필요한 값 가져오기 */
$h_title = $s_array["h_title"];
$h_date =  $s_array["h_date"];
$credit = $s_array["price"] * $tcount; // 결제금액
$hcount = $s_array["tcount"]; // shows 테이블의 티켓 수
$count = $hcount + $tcount;  // 티켓 수 최신화
$t_date = date("Y-m-d H:i:s");

/** 쿼리 작성 */
$t_sql = "insert into ticket(";
$t_sql .= "tcount, u_id, u_name, mobile, bid, ";
$t_sql .= "h_title, t_date, h_date, credit";
$t_sql .= ") values(";
$t_sql .= "'$tcount', '$u_id', '$u_name', '$mobile', '$bid',";
$t_sql .= "'$h_title', '$t_date', '$h_date', '$credit'";
$t_sql .= ");";

$h_sql = "update shows set tcount ='$count' where bid ='$bid';";

mysqli_query($dbcon, $t_sql);
mysqli_query($dbcon, $h_sql);

// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        alert(\"예매 되었습니다.\");
        window.close();
    </script>
    ";

?>