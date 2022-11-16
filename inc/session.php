<?php
session_start();
// 삼항연산자 사용 
// isset( 조건 )? 값1:값2; // 조건이 참이면 값1 거짓이면 값2를 출력한다.
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";
$s_name = isset($_SESSION["s_name"])? $_SESSION["s_name"]:"";
$s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"]:"";
?>