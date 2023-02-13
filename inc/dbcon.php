<?php

$dbcon = mysqli_connect("localhost", "root", "", "onezero") or die("접속에 실패하였습니다.");
  mysqli_set_charset($dbcon, "utf8");

  $hostname="localhost";
  $dbuserid="root";
  $dbpasswd="";
  $dbname="onezero";
  
  $mysqli = new mysqli($hostname, $dbuserid, $dbpasswd, $dbname);
  if ($mysqli->connect_errno) {
      die('Connect Error: '.$mysqli->connect_error);
  }

?>