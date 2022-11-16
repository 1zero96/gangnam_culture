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

  // DB연결
  /* mysql_connect('호스트','사용자','비밀번호');
  mysql_select_db(DB연결객체, 'DB명'); */

  // $dbcon = mysqli_connect('호스트','사용자','비밀번호');
  // mysql_seclect_db($dbcon, "DB명");

  // $dbcon = mysqli_connect("호스트","사용자","비밀번호","DB명");
  // $dbcon = mysqli_connect("호스트","사용자","비밀번호","DB명")or die("DB 접속 실패시 출력될 메세지");
  // $dbcon = mysqli_connect("localhost","root","031264","front") or die("접속에 실패하였습니다");
  // mysqli_set_charset($dbcon, "utf8");

  // session_start();
  // header('Content-Type: text/html; charset=utf-8');

  // $db = new mysqli("localhost:3306", "root", "031264", "front");
  // $db->set_charset("utf8");

  // function(){
  //   global $db;
  //   return $db->query($query);
  // };

?>