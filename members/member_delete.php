<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>강남문화재단 마이페이지</title>
  <link rel="stylesheet" href="../CSS/reset.css" />
  <link rel="stylesheet" href="../CSS/topmenu.css" />
  <link rel="stylesheet" href="../CSS/header.css" />
  <link rel="stylesheet" href="../CSS/member_info.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>
  <script>
  function mem_del() {
    var result = confirm("정말 삭제하시겠습니까?");
    if (result) {
      location.href = "delete_ok.php";
    } else {
      return;
    }
  }
  </script>
</head>

<body>
  <header>
    <?php
      include '../inc/header.php'
    ?>
  </header>
  <?php
  include "../inc/login_check.php"; // 로그인 사용자만 접근
  include "../inc/dbcon.php"; // DB 연결

      /** 쿼리 작성 */
      $sql = "select * from members where idx = '$s_idx' ";
  
      /** 쿼리 실행 */
      $result = mysqli_query($dbcon, $sql);


  /** DB에서 데이터 가져오기(*select) */
  // mysqli_fetch_row(쿼리실행문) -- 필드순서
  // mysqli_fetch_array(쿼리실행문) -- 필드이름
  // mysqli_num_rows(쿼리실행문) -- 전체 행 개수
  $array = mysqli_fetch_array($result);
  ?>

  <div class="menu_wrap">
    <div class="menu_bar">
      <p class="mbr_txt">홈 > 부가메뉴 > 마이페이지</p>
    </div>
  </div>
  <main id="main">
    <div class="menu__title">
      <h2>마이페이지</h2>
    </div>
    <div class="container">
      <ul id="tabs" class="tabs">
        <a href="member_info.php">
          <li class="tab_menu">회원정보 수정</li>
        </a>
        <a href="member_post.php">
          <li class="tab_menu">내 게시글</li>
        </a>
        <a href="member_ticket.php">
          <li class="tab_menu">예매내역</li>
        </a>
        <a href="member_delete.php">
          <li class="tab_menu on">회원탈퇴</li>
        </a>
      </ul>
      <div id="tab1" class="tab-content"></div>
      <div id="tab2" class="tab-content"></div>
      <div id="tab3" class="tab-content"></div>
      <div id="tab4" class="tab-content on">
        <span>다음의 내용을 유의하시기 바랍니다.</span><br /><br />
        <p>1) 회원탈퇴는 본인 인증 확인 후, 탈퇴가 가능합니다.</p>
        <p>2) sns 회원 탈퇴는 본인 인증 절차 없이 바로 탈퇴 됩니다.</p>
        <hr />
        <div id="btn_jc">
          <button type="button" id="btn_join" class="btn_join" onclick="mem_del()">회원탈퇴</button>
          <span class="btn_cancle">
            <a href="#">취소</a>
          </span>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <?php
      include '../inc/footer.php'
    ?>
  </footer>
</body>

</html>