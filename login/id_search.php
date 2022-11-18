<?php 
include "../inc/session.php";
include "../inc/dbcon.php";
ini_set( 'display_errors', '0' );

$u_name  = $_POST['u_name'];
$u_email  = $_POST['u_email'];

if(!$u_name || !$u_email){
  echo "null";
  exit;
}



// if(!$u_ud){
//   echo "no";
//   exit;
// }

$sql = "select * from members where u_name = '$u_name' AND email = '$u_email'; ";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

$u_id = $array["u_id"];

if(!$u_id){
  echo "no";
  exit;
}

echo "회원님의 아이디는 [ ".$u_id." ] 입니다.";
exit;


// $sql="INSERT INTO memo
// (bid, pid, userid, memo, status)
// VALUES(".$bid.", ".$memoid.", '".$s_id."', '".$memo."', 1)";
// $result = mysqli_query($dbcon, $sql) or die($mysqli->error);
// if($result)$last_memoid = $mysqli -> insert_id;

// echo "<div class=\"card mb-4\" id=\"memo_".$last_memoid."\" style=\"max-width: 100%;margin-top:20px;\">
// <div class=\"row g-0\">
//     <div class=\"col-md-12\">
//     <div class=\"card-body\">
//       <p class=\"card-text reply_txt1\">".$memo."</p>
//       <p class=\"card-text reply_txt2\"><small class=\"text-muted\">".$s_id." / now</small></p>
//       <p class=\"card-text reply_txt3\"><a href=\"javascript:;\" onclick=\"memo_modi(".$last_memoid.")\">수정</a> / <a href=\"javascript:;\" onclick=\"memo_del(".$last_memoid.")\">삭제</a></p>
//     </div>
//   </div>
// </div>
// </div>";

?>