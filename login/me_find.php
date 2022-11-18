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
  <link rel="stylesheet" href="../CSS/me_find.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>
</head>

<body>
  <div class="black-bg">
    <div class="wb_wrap">
      <div class="white-bg">
        <form class="ids">
          <fieldset>
            <legend class="ids__title">
              아이디 찾기
            </legend>
            <p class="ids__name">
              <label for="u_name">이름</label>
              <input type='text' id="u_name" class="u_name" placeholder="이름을 입력하세요."></input>
            </p>
            <p class="ids__email">
              <label for="u_email">이메일</label>
              <input type='text' id="u_email" class="u_email" placeholder="이메일을 입력하세요."></input>
            </p>
            <p class="ids__submit">
              <button type="button" id="ids_search">검색하기</button>
            <p>
            <p class="ids__result">
            </p>
          </fieldset>
        </form>
        <button class="btn btn-danger" id="close">닫기</button>
      </div>
    </div>
  </div>
  <div class="black-bg2">
    <div class="wb_wrap">
      <div class="white-bg2">
        <form class="ids">
          <fieldset>
            <legend class="pwd__title">
              비밀번호 재설정
            </legend>
            <p class="hidden">
              <input type="hidden" id="u_id" class="u_id"></input>
            </p>
            <p class="ids__pwd">
              <label for="pwd">비밀번호</label>
              <input type='text' id="pwd" class="pwd" placeholder="사용할 비밀번호를 입력하세요."></input>
              <span class="n_pwd"></span>
            </p>
            <p class="ids__pwd2">
              <label for="pwd2">비밀번호 확인</label>
              <span class="n_pwd2"></span>
              <input type='text' id="pwd2" class="pwd2" placeholder="한번 더 입력하세요."></input>
            </p>
            <p class="ids__con">
              <span> * 8~16자 영문 대 소문자, 숫자, 특수문자를 사용하세요! </span>
            </p>
            <p class="pwd__submit">
              <button type="button" id="pwd_change">변경하기</button>
            <p>
          </fieldset>
        </form>
        <button class="btn btn-danger" id="pwd_close">닫기</button>
      </div>
    </div>
  </div>
  <script>
  $(function() {
    $(".ids_btn").click(function() {
      $(".black-bg").addClass('show-modal');
    });

    $("#close").click(function() {
      $(".black-bg").removeClass('show-modal');
    });

    $("#pwd_close").click(function() {
      $(".black-bg2").removeClass('show-modal');
    });

    $("#ids_search").click(function() {
      var data = {
        u_name: $('#u_name').val(),
        u_email: $("#u_email").val()
      };
      $.ajax({
        async: false,
        type: 'post',
        url: 'id_search.php',
        data: data,
        dataType: 'html',
        error: function() {},
        success: function(return_data) {
          if (return_data == "null") {
            alert('이름과 이메일을 확인해주세요.');
            return;
          } else if (return_data == "no") {
            alert('일치하는 아이디가 없습니다.');
          } else {
            alert(return_data);
            $(".black-bg").removeClass('show-modal');
            // $(".ids__").append(return_data);
            // $("ids__result").focus();
          }
        }
      });
    });

    $("#pwd_btn").click(function() {
      var data = {
        userName: $('#userName').val(),
        userID: $("#userID").val()
      };
      $.ajax({
        async: false,
        type: 'post',
        url: 'id_check.php',
        data: data,
        dataType: 'html',
        error: function() {},
        success: function(return_data) {
          if (return_data == "null") {
            alert('이름과 아이디를 확인해주세요.');
            return;
          } else if (return_data == "no") {
            alert('일치하는 아이디가 없습니다.');
          } else {
            $(".black-bg2").addClass('show-modal');
            // $(".black-bg").removeClass('show-modal');
            $(".u_id").val(return_data);
            // $("ids__result").focus();
          }
        }
      });
    });

    $("#pwd_change").click(function() {

      const regPW = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;

      if (!$("#pwd").val() || !$("#pwd2").val()) {
        alert("비밀번호를 입력해주세요!!");
        return;
      };

      if ($("#pwd").val() != $("#pwd2").val()) {
        alert("비밀번호가 일치하지 않습니다!!");
        return;
      }

      function isMoreThan8Length(value) {
        return (value = regPW.test($("#pwd").val()));
      }

      if (!isMoreThan8Length($("#pwd").val())) {
        alert("8~16자 영문 대 소문자, 숫자, 특수문자를 사용하세요")
        return false;
      }

      var data = {
        u_id: $('#u_id').val(),
        pwd: $('#pwd').val(),
      };
      $.ajax({
        async: false,
        type: 'post',
        url: 'pwd_change.php',
        data: data,
        dataType: 'html',
        error: function() {},
        success: function(return_data) {
          if (return_data == "no") {
            alert("변경을 하지 못했습니다 관리자에게 문의해주세요.");
          } else {
            alert(return_data);
            $(".black-bg2").removeClass('show-modal');
          }
        }
      });
    });
  });
  </script>
  <header>
    <?php
        ini_set( 'display_errors', '0' );
        include '../inc/header.php';
      ?>
  </header>
  <div class="menu_wrap">
    <dlv class="menu_bar">
      <p class="mbr_txt">홈 > 부가메뉴 > 아이디/비밀번호 찾기</p>
    </dlv>
  </div>
  <main id="main">
    <div class="menu_title">
      <div class="menu_txt">
        <h1 class="hidden">아이디</h1>
      </div>
    </div>
    <div class="login__wrap">
      <div class="login">
        <div class="login__title">
          <h2>아이디 찾기</h2>
        </div>
        <p>이메일로 아이디를 찾으실 수 있습니다.</p>
        <button type="button" class="ids_btn">아이디 확인하기</button>
      </div>
    </div>
    <div class="pw-reset__wrap">
      <div class="pw-reset">
        <form action="" method="post">
          <fieldset>
            <div class="pw-reset__title">
              <h2>비밀번호 재설정</h2>
            </div>
            <ul class="pw-reset__input">
              <li>
                <label for="userName">이름</label>
                <input type="text" name="userName" id="userName" class="input__name" title="이름" />
              </li>
              <li>
                <label for="userID">아이디</label>
                <input type="text" name="userID" id="userID" class="input__ID" title="아이디" />
              </li>
            </ul>
          </fieldset>
          <button type="button" id="pwd_btn" class="pwd_btn">비밀번호 변경하기</button>
        </form>
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