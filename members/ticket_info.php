<?php
/** 이전 페이지에서 데이터 가져오기 */ 
$tid = $_GET["tid"];

/** 세션이랑 로그인 체크 가져오기 */
include "../inc/session.php";
include "../inc/user_check.php";


/** DB 가져오기 */
include "../inc/dbcon.php";

/** 쿼리 작성 */
$sql = "select * from ticket where tid='$tid';";

/** 쿼리 전송해서 데이터 가져오기 */
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

/** explode */
$date = explode(" ",$array["h_date"]);
$time = explode(":",$date[1]);
$day = $date[0];
$hour = $time[0]; // ."시";
$min = $time[1]; // ."분";

?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
.ticket_info {
  width: 585px;
  height: 340px;
  border-top: 4px solid #315cc8;
  border-collapse: collapse
}

.ticket_info tr {
  border-bottom: 1px solid #7e7e7e;
}

.ticket_info th {
  text-align: left;
  padding-left: 30px;
  background: #0d459014;
}

.ticket_info td {
  padding-left: 30px;
}

.h_title {
  text-align: center;
}


small {
  color: #5f5f5f;
}
</style>

<body>
  <table class="ticket_info">
    <tr class="pd">
      <p>
        <th colspan="2" class="h_title" style="background:white; text-align: center; font-size:18px; height: 45px;">
          <?php echo $array["h_title"]?>
        </th>
      </p>
    </tr>
    <tr>
      <th>예약번호</th>
      <td><?php echo $array["tid"]?></td>
    </tr>
    <tr>
      <th>예매자</th>
      <td><?php echo $array["u_name"]?></td>
    </tr>
    <tr>
      <th>관람일 <small>ㅣ</small> 시간</th>
      <td><?php echo $day ?> <small>ㅣ</small> <?php echo $hour?>:<?php echo $min?></td>
    </tr>
    <tr>
      <th>장소</th>
      <td><?php echo $array["place"]?></td>
    </tr>
    <tr>
      <th>티켓수량 <small>ㅣ</small> 가격</th>
      <td><?php echo $array["tcount"]?>매 <small>ㅣ</small> <?php echo $array["credit"]?>원</td>
    </tr>
  </table>
</body>

</html>