<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- 제이쿼리 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
    integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"
    integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script type="text/javascript">
  $(function() {
    $("#writepass").dialog({
      modal: true,
      title: '비밀글입니다.',
      width: 400,
    });
  });
  </script>
</head>

<body>
  <?php
include "../inc/dbcon.php";
?>
  <?php

$bid = $_GET['bid'];
$no = $_GET['no'];
$sql = "select * from employ where bid='".$bid."'"; /* 받아온 bid값을 선택 */
$result = mysqli_query($dbcon, $sql);
$employ = mysqli_fetch_array($result);

?>
  <div id='writepass'>
    <form action="" method="post">
      <p>비밀번호<input type="password" name="pw_chk" /> <input type="submit" value="확인" /></p>
    </form>
  </div>
  <?php
	  $bpw = $employ['pwd'];
	 	if(isset($_POST['pw_chk'])) //만약 pw_chk POST값이 있다면
	 	{
	 		$pwk = $_POST['pw_chk']; // $pwk변수에 POST값으로 받은 pw_chk를 넣습니다.
			if(password_verify($pwk,$bpw)) //다시 if문으로 DB의 pw와 입력하여 받아온 bpw와 값이 같은지 비교를 하고
			{
				$pwk == $bpw;
			?>
  <script type="text/javascript">
  location.replace("view.php?bid=<?php echo $employ["bid"]?>&no=<?= $no ?>");
  </script><!-- pwk와 bpw값이 같으면 read.php로 보내고 -->
  <?php 
			}else{ ?>
  <script type="text/javascript">
  alert('비밀번호가 틀립니다');
  </script>
  <!--- 아니면 비밀번호가 틀리다는 메시지를 보여줍니다 -->
  <?php } } ?>
</body>

</html>