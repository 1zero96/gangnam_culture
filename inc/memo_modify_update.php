<?php 
include $_SERVER["DOCUMENT_ROOT"]."/gangnam_culture/inc/dbcon.php";
include $_SERVER["DOCUMENT_ROOT"]."/gangnam_culture/inc/session.php";
ini_set( 'display_errors', '0' );

if(!$s_id){
    echo "member";
    exit;
}

$memoid = $_POST['memoid'];
$memo = $_POST['memo'];

$result = $mysqli->query("select * from memo where memoid=".$memoid) or die("query error => ".$mysqli->error);
$rs = $result->fetch_object();

if($rs->userid!=$s_id){
    echo "my";
    exit;
}

$sql="update memo set memo='".$memo."' where memoid=".$memoid;//status값을 바꿔준다.
$result=$mysqli->query($sql) or die($mysqli->error);


echo "<div class=\"row g-0\">
    <div class=\"col-md-12\">
    <div class=\"card-body\">
      <p class=\"card-text reply_txt1\">".$memo."</p>
      <p class=\"card-text reply_txt2\"><small class=\"text-muted\">".$s_id." / now</small></p>
      <p class=\"card-text reply_txt3\"><a href=\"javascript:;\" onclick=\"memo_modi(".$memoid.")\">수정</a> / <a href=\"javascript:;\" onclick=\"memo_del(".$memoid.")\">삭제</a></p>
    </div>
  </div>
</div>";

?>