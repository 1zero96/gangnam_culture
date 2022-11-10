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
  <link rel="stylesheet" href="../CSS/welcome.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>
  <script>
  function main_go() {
    location.href = '../index.php'
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
    <div class="menu_bar">
      <p class="mbr_txt">홈 > 부가메뉴 > 회원가입</p>
    </div>
  </div>
  <main id="main">
    <div class="completed__wrap">
      <div class="completed">
        <div class="title">
          <h3>환영합니다!</h3>
        </div>
        <div class="title__body">
          <p>%admin%님 회원 가입을 축하합니다!</p>
          <p>강남문화재단에 가입하신 아이디는 <span>%admin%</span> 입니다.</p>
        </div>
        <div class="title__foot">
          <p>
            강남 문화재단은 항상 회원님들의 입장에서<br />
            보다 좋은 서비스를 받으실 수 있도록 노력하겠습니다.
          </p>
        </div>
        <button type="button" class="completed__btn" onclick="main_go()">메인으로</button>
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