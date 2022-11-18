<?php 
include "../inc/session.php";
include "../inc/dbcon.php";
ini_set( 'display_errors', '0' );

$u_id  = $_POST['u_id'];
$pwd  = $_POST['pwd'];

$sql = "UPDATE members SET pwd='$pwd' WHERE u_id='$u_id';";
$result = mysqli_query($dbcon, $sql);

if($result){
  echo"변경을 완료했습니다";
}else{
  echo"no";
}
?>