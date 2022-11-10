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
              <span class="login_box_txt1"><a href="#">회원가입</a></span>
              <span class="login_box_txt2"><a href="#">아이디/비밀번호 찾기</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="footer_wrap">
    <footer class="footer">
      <div class="banner_controls">
        <div class="controls_direction">
          <a href="#">
            <div class="banner_prev"></div>
          </a>
          <a href="#">
            <div class="banner_next"></div>
          </a>
        </div>
      </div>
      <div class="terms">
        <h2 class="hidden">사이트 이용안내</h2>
        <ul class="footer_menu">
          <li>
            <a class="ftm_1" href="">개인정보처리방침</a>
          </li>
          <li>
            <a class="ftm_2" href="#">이용약관</a>
          </li>
          <li>
            <a class="ftm_3" href="#">이메일 무단 수집거부</a>
          </li>
          <li>
            <a class="ftm_4" href="#">오시는길</a>
          </li>
          <li>
            <a class="ftm_5" href="#">사이트맵</a>
          </li>
          <form>
            <fieldset class="site_wrap">
              <select id="f_select" class="familySite select" title="유관기관 사이트 목록">
                <option value selected>유관기관사이트</option>
                <option value="https://www.gangnam.go.kr/">
                  강남구 홈페이지
                </option>
                <option value="https://health.gangnam.go.kr/">
                  강남구 보건소
                </option>
                <option value="https://www.gangnam.go.kr/office/welfare">
                  강남 복지재단
                </option>
                <option value="https://www.gangnam.go.kr/office/gjhope">
                  강남 지역자활센터
                </option>
                <option value="https://www.gangnam.go.kr/office/longlearno">
                  강남 평생학습
                </option>
                <option value="https://edu.ingang.go.kr/">
                  강남구청 인터넷수능방송
                </option>
                <option value="https://visitgangnam.net/">
                  강남 관광안내
                </option>
                <option value="https://medicaltour.gangnam.go.kr/2021">
                  강남 의료관광
                </option>
                <option value="https://www.gncouncil.go.kr/kr/">
                  강남 구의회
                </option>
              </select>
              <a href="#" class="ft_btn" onclick="move_family_site()" title="유관기관 사이트 새창으로 열림">이동</a>
            </fieldset>
            <script>
            function move_family_site() {
              if (document.getElementById("f_select").value != "")
                window.open(document.getElementById("f_select").value);
            }
            </script>
          </form>
        </ul>
      </div>

      <div class="footer_bottom">
        <div class="footer_logo">
          <img src="../images/logo2.jpg" alt="" />
        </div>
        <address class="fb_txt1">
          06088 서울특별시 강남구 선를로 668, 5층 강남문화재단
        </address>
        <p>
          <span class="fb_txt2">
            [경영관리부] 경영지원팀 02-6712-0541~52 | 문화센터팀 1833-8009 |
            시설관리팀 02-6712-0575 |&nbsp;힐링센터팀 02-6712-0570 |
            독서진흥팀 1644-3227
          </span>
        </p>
        <p>
          <span class="fb_txt3">
            [문화사업부] 문화정책팀 02-6712-0511~5 | 기획홍보팀 02-6712-0521~4
            | 공연전시팀 02-6712-0531~5&nbsp;
          </span>
        </p>
        <p>
          <span class="fb_txt4">COPYRIGHT ⓒ 강남구청. ALL RIGHTS RESERVED.. /</span>
          <a class="fb_txt5" href="https://www.freepik.com/vectors/design">Design vector created by freepik -
            www.freepik.com</a>
        </p>
      </div>
    </footer>
  </div>
</body>

</html>