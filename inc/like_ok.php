<?php
include 'dbcon.php';
include 'session.php';
$bid = $_GET['bid'];

    $sql_check = "SELECT * FROM free WHERE bid=$bid";
    $res_check = mysqli_fetch_array(mysqli_query($dbcon, $sql_check));
    if($s_id == $res_check['u_id']){
        echo "<script>alert('자신의 게시글입니다!');";
        echo "window.history.back()</script>";
        exit;
    }

    $sql_check2 = "SELECT * FROM like_ok WHERE like_post_id='$bid' and like_user='$s_id'";
    $res_check2 = mysqli_fetch_array(mysqli_query($dbcon, $sql_check2));
    if($res_check2){
        echo "<script>alert('이미 추천한 게시글입니다!');";
        echo "window.history.back()</script>";
        exit;
    }

    $sql = "
    UPDATE free SET like_count=like_count+1 WHERE bid=$bid;
    INSERT INTO like_ok(like_post_id, like_user) VALUES ('$bid', '$s_id');
    ";
    $res = mysqli_multi_query($dbcon, $sql);
    echo "<script>alert('공감했습니다!');";
    echo "window.history.back()</script>";
?>