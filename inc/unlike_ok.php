<?php
    include 'dbcon.php';
    include 'session.php';
    $idx = $_GET['idx'];

    $sql_already = "SELECT * FROM like_ok WHERE like_post_id='$idx' and like_user='$s_name'";
    $res_already = mysqli_fetch_array(mysqli_query($dbcon, $sql_already));
    if(!$res_already){
        echo "<script>alert('공감하지 않은 게시글입니다!');";
        echo "window.history.back()</script>";
        exit;
    }

    $sql = "
    UPDATE free SET like_count=like_count-1 WHERE idx=$idx;
    DELETE FROM like_ok WHERE like_post_id='$idx' and like_user='$s_name';
    ";
    $res = mysqli_multi_query($dbcon, $sql);
    echo "<script>alert('공감을 취소했습니다!');";
    echo "window.history.back()</script>";
?>