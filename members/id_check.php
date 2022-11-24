<?php
    include "../inc/dbcon.php";
    $u_id = $_POST["u_id"];

    $sql = "select * from members;";
    $result = mysqli_query($dbcon, $sql);
    $array = mysqli_fetch_array($result);

    if($array["u_id"] == $u_id){
      echo "no";
    }else{
      echo "yes";
    }

?>