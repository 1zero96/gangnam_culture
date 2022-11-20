<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

// 이전 페이지에서 값 가져오기
$n_title = $_POST["n_title"];
$n_check = $_POST["n_check"];
$category = $_POST["category"];
$n_content = $_POST["n_content"];

// 작성일자
$w_date = date("Y-m-d");

// 값 확인
// echo "<p> 제목 : ".$n_title."</p>";
// echo "<p> 내용 : ".$n_content."</p>";
// echo "<p> 작성자 : ".$s_name."</p>";
// echo "<p> 가입일 : ".$w_date."</p>";
// exit;

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성

if($n_check == "on"){
  $sql = "insert into notice(";
  $sql .= "u_id, n_title, n_content, writer, w_date, status";
  $sql .= ") values(";
  $sql .= "'$s_id', '$n_title', '$n_content', '$s_name', '$w_date', '1'";
  $sql .= ");";
}else if($category){
  $sql = "insert into notice(";
  $sql .= "u_id, category, n_title, n_content, writer, w_date";
  $sql .= ") values(";
  $sql .= "'$s_id', '$category', '$n_title', '$n_content', '$s_name', '$w_date'";
  $sql .= ");";
}else{
  $sql = "insert into notice(";
  $sql .= "u_id, n_title, n_content, writer, w_date";
  $sql .= ") values(";
  $sql .= "'$s_id', '$n_title', '$n_content', '$s_name', '$w_date'";
  $sql .= ");";
}

// echo $sql;
// exit;

// 데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);


// 첨부파일 
if($_FILES["upfile"]["name"]){//첨부한 파일이 있으면

  if($_FILES['upfile']['size']>10240000){//10메가
      echo "<script>alert('10메가 이하만 첨부할 수 있습니다.');history.back();</script>";
      exit;
  }

  if($_FILES['upfile']['type']!='image/jpeg' and $_FILES['upfile']['type']!='image/gif' and $_FILES['upfile']['type']!='image/png'){//이미지가 아니면, 다른 type은 and로 추가
      echo "<script>alert('이미지만 첨부할 수 있습니다.');history.back();</script>";
      exit;
  }

  $save_dir = $_SERVER['DOCUMENT_ROOT']."/data/";//파일을 업로드할 디렉토리
  $filename = $_FILES["upfile"]["name"];
  $ext = pathinfo($filename,PATHINFO_EXTENSION);//확장자 구하기
  $newfilename = date("YmdHis").substr(rand(),0,6);
  $upfile = $newfilename.".".$ext;//새로운 파일이름과 확장자를 합친다
 
  if(move_uploaded_file($_FILES["upfile"]["tmp_name"], $save_dir.$upfile)){//파일 등록에 성공하면 디비에 등록해준다.
      $sql="INSERT INTO testdb.file_table
      (bid, userid, filename)
      VALUES(".$bid.", '".$_SESSION['UID']."', '".$upfile."')";
      $result=$mysqli->query($sql) or die($mysqli->error);
  }

}

// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"list.php\";
    </script>
    ";
?>