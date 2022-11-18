<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>강남문화재단 로그인</title>
  <link rel="stylesheet" href="../CSS/reset.css" />
  <link rel="stylesheet" href="../CSS/topmenu.css" />
  <link rel="stylesheet" href="../CSS/header.css" />
  <link rel="stylesheet" href="../CSS/login.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script src="https://developers.kakao.com/sdk/js/kakao.js"> </script>
  <script src="../JS/KakaoLogin.js"></script>
  <script defer src="../JS/login.js"></script>
  <script defer src="../JS/header.js"></script>
  <script>
  function login_form_check() {
    if (!u_id.value) {
      alert("아이디를 입력하세요.");
      u_id.focus();
      return false;
    };
    if (!pwd.value) {
      alert("비밀번호를 입력하세요.");
      pwd.focus();
      return false;
    };
  }
  </script>

</head>

<body>
  <header>
    <?php
      include '../inc/header.php'
    ?>
  </header>
  <div class="menu_wrap">
    <dlv class="menu_bar">
      <p class="mbr_txt">홈 > 부가메뉴 > 로그인</p>
    </dlv>
  </div>
  <main id="main">
    <div class="menu_title">
      <div class="menu_txt">
        <h1 class="hidden">로그인</h1>
      </div>
    </div>
    <div class="login_box_wrap">
      <div class="login_box">
        <div class="login_box_title">
          <div class="login_box_img1_wrap">
            <img class="login_box_img1" src="../images/login_box_title.jpg" alt="" />
          </div>
          <div class="clearfix login_box_bottom">
            <div class="login_box_img2_wrap">
              <h2>일반회원 로그인</h2>
              <form name="login_form" action="login_ok.php" method="post" onsubmit="return login_form_check()">
                <fieldset class="formbox">
                  <legend class="hidden">로그인</legend>
                  <p>
                    <label class="label_id" for="u_id">아이디</label>
                    <input class="input_id u_id" type="text" name="u_id" id="u_id" />
                  </p>
                  <p>
                    <label class=" label_pwd" for="pwd">비밀번호</label>
                    <input class="input_pwd pwd" type="password" name="pwd" id="pwd" />
                  </p>
                  <div class="input_login">
                    <input type="image" src="../images/login_button_01.jpg" alt="로그인" />
                  </div>
                </fieldset>
              </form>
            </div>
            <div class="login_box_img3_wrap">
              <h2>SNS 로그인</h2>
              <p>가입하신 계정으로 간편하게 서비스를 이용하실 수 있습니다</p>
              <div class="sns_group">
                <a href="#">
                  <img src="../images/naver_before.png" alt="naver login" width="36px" height="36px" />
                </a>

                <a href="#">
                  <img src="../images/kakao_before.png" alt="kakao login" width="36px" height="36px" />
                </a>

                <a href="#">
                  <img src="../images/google_before.png" alt="google login" width="36px" height="36px" />
                </a>

                <a href="#">
                  <img src="../images/fbook_before.png" alt="facebook login" width="36px" height="36px" />
                </a>

                <a href="#">
                  <img src="../images/twit_before.png" alt="twiter login" width="36px" height="36px" />
                </a>

                <a href="#">
                  <img src="../images/insta_before.png" alt="instagram login" width="36px" height="36px" />
                </a>
              </div>
              <button type="button" onclick="KakaoLogin()">
                <img class="input_login2" src="../images/login_button_02.jpg" />
              </button>
            </div>
            <div class="login_box_footer">
              <span class="login_box_txt1"><a href="../members/join.php">회원가입</a></span>
              <span class="login_box_txt2"><a href="me_find.php">아이디/비밀번호 찾기</a></span>
            </div>
          </div>
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