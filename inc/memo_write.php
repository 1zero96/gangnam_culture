<?php 
include "session.php";
include "dbcon.php";
ini_set( 'display_errors', '0' );

if(!$s_id){
    echo "member";
    exit;
}

$memo  = $_POST['memo'];
$bid  = $_POST['bid'];
$memoid = $_POST['memoid']??0;

$sql="INSERT INTO memo
(bid, pid, userid, memo, status)
VALUES(".$bid.", ".$memoid.", '".$_SESSION['s_id']."', '".$memo."', 1)";
$result = mysqli_query($dbcon, $sql) or die($mysqli->error);
if($result)$last_memoid = $mysqli -> insert_id;

echo "<div class=\"card mb-4\" id=\"memo_".$last_memoid."\" style=\"max-width: 100%;margin-top:20px;\">
<div class=\"row g-0\">
    <div class=\"col-md-12\">
    <div class=\"card-body\">
      <p class=\"card-text\">".$memo."</p>
      <p class=\"card-text\"><small class=\"text-muted\">".$_SESSION['s_id']." / now</small></p>
      <p class=\"card-text\" style=\"text-align:right\"><a href=\"javascript:;\" onclick=\"memo_modi(".$last_memoid.")\">수정</a> / <a href=\"javascript:;\" onclick=\"memo_del(".$last_memoid.")\">삭제</a></p>
    </div>
  </div>
</div>
</div>";

?>