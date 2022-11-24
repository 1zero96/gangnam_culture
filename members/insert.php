<?php

/** 이전 페이지(join.php) 에서 값 가져오기 */
$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$gender = $_POST["gender"];
$u_year = $_POST["u_year"];
$u_month = $_POST["u_month"];
$u_day = $_POST["u_day"];
$birth = $u_year.$u_month.$u_day;
$mobile = str_replace("-", "", $_POST["mobile"]);
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$psCode = $_POST["ps_code"];
$addr_b = $_POST["addr_b"];
$addr_d = $_POST["addr_d"];
$addr = $psCode."$addr_b"."$addr_d";
$apply_mail = $_POST["apply_mail"];
$apply_sns = $_POST["apply_sns"];
$reg_date = date("Y-m-d");

/** 값확인 */
// echo "<P> 이름 : ".$u_name."</p>";
// echo "<P> 아이디 : ".$u_id."</p>";
// echo "<P> 비밀번호 : ".$pwd."</p>";
// echo "<P> 성별 : ".$gender."</p>";
// echo "<P> 생년월일 : ".$birth."</p>";
// echo "<P> 전화번호 : ".$mobile."</p>";
// echo "<P> 이메일 : ".$email."</p>";
// echo "<P> 우편번호 : ".$psCode."</p>";
// echo "<P> 기본주소 : ".$addr_b."</p>";
// echo "<P> 상세주소 : ".$addr_d."</p>";
// echo "<P> 메일동의 : ".$apply_mail."</p>";
// echo "<P> 메일동의 : ".$apply_sns."</p>";
// echo "<P> 가입일 : ".$reg_date."</p>";

include "../inc/dbcon.php";

/** 쿼리 작성 */

  $sql= "insert into members(";
  $sql.= "u_name, u_id, pwd, gender, ";
  $sql.= "birth, mobile, email, ps_code, "; 
  $sql.= "addr_b, addr_d, apply_mail, "; 
  $sql.= "apply_sns, reg_date";
  $sql.= ") values (";
  $sql.= "'$u_name','$u_id','$pwd','$gender', ";
  $sql.= "'$birth','$mobile','$email','$psCode', ";
  $sql.= "'$addr_b','$addr_d','$apply_mail', ";
  $sql.= "'$apply_sns','$reg_date');";

/** 데이터 베이스에 쿼리 전송 */
// mysqli_query("DB 연결객체","전송할 쿼리")
mysqli_query($dbcon, $sql);


/** DB 접속 종료 */
mysqli_close($dbcon);

// 리디렉션 location.href="이동할 페이지 주소"
echo "
  <script type='text/javascript'>
    alert('가입을 완료했습니다.');
    location.href='welcome.php?u_id=$u_id';
  </script>"
?>