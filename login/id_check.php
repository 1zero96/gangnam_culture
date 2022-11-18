<?php 
include "../inc/session.php";
include "../inc/dbcon.php";
ini_set( 'display_errors', '0' );

$userName  = $_POST['userName'];
$userID  = $_POST['userID'];


if(!$userName || !$userID){
  echo "null";
  exit;
}


$sql = "select * from members where u_name = '$userName' AND u_id = '$userID'; ";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

$u_id = $array["u_id"];

if(!$u_id){
  echo "no";
  exit;
}
echo $u_id;
?>