<?php 
include $_SERVER["DOCUMENT_ROOT"]."/gangnam_culture/inc/dbcon.php";
include $_SERVER["DOCUMENT_ROOT"]."/gangnam_culture/inc/session.php";

ini_set( 'display_errors', '0' );

if(!$s_id){
    echo "member";
    exit;
}

$memoid = $_POST['memoid'];

$memo_result = $mysqli->query("select * from memo where memoid=".$memoid) or die("query error => ".$mysqli->error);
$rs = $memo_result->fetch_object();


if($rs->userid!=$s_id){
    echo "my";
    exit;
}


echo "<form class=\"row g-3\">
  <div class=\"col-md-10\">
    <textarea class=\"form-control\" id=\"memo_text_".$rs->memoid."\" style=\"width: 800px; height: 70px; border:1px solid #0000009e\">".$rs->memo."</textarea>
  </div>
  <div class=\"col-md-2\">
    <button type=\"button\" class=\"btn btn-secondary modi_btn\" onclick=\"memo_modify(".$rs->memoid.")\" >댓글수정</button>
  </div>
</form>";

?>