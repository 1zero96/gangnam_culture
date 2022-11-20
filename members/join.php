<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>강남문화재단 회원가입</title>
  <link rel="stylesheet" href="../CSS/reset.css" />
  <link rel="stylesheet" href="../CSS/header.css" />
  <link rel="stylesheet" href="../CSS/topmenu.css" />
  <link rel="stylesheet" href="../CSS/join.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>
  <script defer src="../JS/join.js"></script>
</head>

<body>
  <header>
    <?php
      include '../inc/header.php'
    ?>
  </header>
  <div class="menu_wrap">
    <div class="menu_bar">
      <p class="mbr_txt">홈 > 열린광장 > 회원가입</p>
    </div>
  </div>
  <main id="main">
    <div class="menu__title">
      <h1 class="title">회원가입</h1>
    </div>
    <div class="form__wrap">
      <form name="form" class="form" action="insert.php" method="get" onsubmit="return form_check()">
        <fieldset>
          <div class="form__tit">
            <img src="../images/check_button.jpg" alt="체크아이콘" />
            <h2>기본정보입력</h2>
            <em></em>
          </div>
          <table class="form__table">
            <caption class="hidden">
              "회원가입 정보입력 : 아이디, 비밀번호, 비밀번호 확인, 성별,
              생일, 전화번호, 핸드폰, 이메일, 주소, 메일수신동의,
              문자발송동의, 우편수신동의"
            </caption>
            <colgroup>
              <col width="15%" />
              <col width="%" />
            </colgroup>
            <tbody>
              <tr>
                <th scope="row">
                  <label for="u_name">이름</label>
                </th>
                <td>
                  <input type="text" name="u_name" id="u_name" maxlength="8" title="이름" autofocus />
                  <span id="err_name" class="msgRed"></span>
                  <span id="err_name2" class="msgRed"></span>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <label for="u_id">아이디</label>
                </th>
                <td>
                  <input type="text" name="u_id" id="u_id" title="아이디" />
                  <span id="err_ID" class="msgRed"></span>
                  <span class="id-failure-message hide msgRed">* 영문자로 시작하는 6~12자 영문자 또는 숫자만 사용
                    가능합니다.</span>
                  <span class="id-success-message hide msgBlu">사용할 수 있는 아이디 입니다.</span>
                  <br />
                  <input type="button" value="중복확인" class="id_Check" onclick="idCheck()" />
                  <span>중복확인을 해주세요</span>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <label for="pwd">비밀번호</label>
                </th>
                <td>
                  <input type="password" name="pwd" id="pwd" maxlength="16" title="비밀번호" />
                  <span id="err_pw" class="err_txt msgRed"></span>
                  <span class="pw-failure-message hide msgRed">* 8~16자 영문 대 소문자, 숫자, 특수문자를
                    사용하세요.</span>
                  <span class="pw-success-message hide msgBlu">사용할 수 있는 비밀번호 입니다.</span>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <label for="repwd">비밀번호 확인</label>
                </th>
                <td>
                  <input type="password" name="repwd" id="repwd" title="비밀번호 확인" />
                  <span class="pw2-failure-message hide msgRed">비밀번호가 일치하지 않습니다.</span>
                  <span class="pw2-success-message hide msgBlu">비밀번호가 일치합니다.</span>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <label for="gender">성별</label>
                </th>
                <td>
                  <span>
                    <input type="radio" name="gender" id="male" class="gender" value="m" title="남" checked="checked" />
                    <label for="male">남</label>
                    <input type="radio" name="gender" id="female" class="gender" value="f" title="여" />
                    <label for="female">여</label>
                  </span>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <label for="u_year">생년월일</label>
                </th>
                <td>
                  <input type="text" name="u_year" id="u_year" maxlength="4" />
                  <select id="u_month" class="u_month">
                    <option value="0">월</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                  </select>
                  <input type="text" name="u_day" id="u_day" maxlength="2" />
                  <span id="err_Month" class="msgRed"></span>
                  <span class="year-failure-message hide msgRed">태어난 년도 4자리를 정확하게 입력하세요.</span>
                  <span class="month-faiure-message hide msgRed">
                    태어난 달을 선택하세요.
                  </span>
                  <span class="day-failure-message hide msgRed">
                    태어난 날 2자리를 정확하게 입력하세요(1~31).
                  </span>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <label for="mobile">전화번호</label>
                </th>
                <td>
                  <input type="text" id="mobile" name="mobile" oninput="autoHyphen(this)" maxlength="13" title="전화번호" />
                  <span id="err_phone" class="msgRed"></span>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <label for="email_id">이메일</label>
                </th>
                <td>
                  <input type="text" name="email_id" id="email_id" title="이메일 아이디 입력" value maxlength="20" />
                  <span>@</span>
                  <input type="text" name="email_dns" id="email_dns" title="이메일 주소 입력" value maxlength="20" />
                  <select name="email_sel" id="email_sel" onchange="change_email()" title="이메일 주소 선택">
                    <option value="직접입력">직접입력</option>
                    <option value="naver.com">naver.com</option>
                    <option value="gmail.com">gmail.com</option>
                    <option value="nate.com">nate.com</option>
                    <option value="hanmail.com">hanmail.com</option>
                    <option value="hotmail.com">hotmail.com</option>
                    <option value="kakao.com">kakao.com</option>
                  </select>
                  <span id="err_email" class="msgRed"></span>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <label for="ps_code">주소</label>
                </th>
                <td>
                  <input type="text" name="ps_code" id="ps_code" value="" maxlength="6" title="우편번호" readonly=""
                    placeholder="우편번호를 조회하세요." />
                  <a title="(새창열기)" href="javascript:DaumPostcode();void(0);" class="btn_address"
                    style="margin-left: 5px">우편번호 조회</a>
                  <span id="err_zip" class="msgRed"></span>
                  <br />
                  <input type="text" name="addr_b" id="addr_b" value="" readonly="" onclick="" maxlength="100"
                    title="주소 동 이전까지 입력" width="80%" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <label for="addr_d">상세주소</label>
                </th>
                <td>
                  <input type="text" name="addr_d" id="addr_d" maxlength="100" title="주소 동 이하 입력" />
                </td>
              </tr>
              <script src="https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js"></script>
              <script charset="UTF-8" type="text/javascript"
                src="//t1.daumcdn.net/postcode/api/core/220721/1658402366639/220721.js"></script>
              <script>
              function DaumPostcode() {
                new daum.Postcode({
                  oncomplete: function(data) {
                    // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                    // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                    // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                    var fullAddr = ""; // 최종 주소 변수
                    var extraAddr = ""; // 조합형 주소 변수

                    // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                    if (data.userSelectedType === "R") {
                      // 사용자가 도로명 주소를 선택했을 경우
                      fullAddr = data.roadAddress;
                    } else {
                      // 사용자가 지번 주소를 선택했을 경우(J)
                      fullAddr = data.jibunAddress;
                    }

                    // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                    if (data.userSelectedType === "R") {
                      //법정동명이 있을 경우 추가한다.
                      if (data.bname !== "") {
                        extraAddr += data.bname;
                      }
                      // 건물명이 있을 경우 추가한다.
                      if (data.buildingName !== "") {
                        extraAddr +=
                          extraAddr !== "" ?
                          ", " + data.buildingName :
                          data.buildingName;
                      }
                      // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                      fullAddr +=
                        extraAddr !== "" ? " (" + extraAddr + ")" : "";
                    }

                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    /* 우편번호 한자리 통합
                    document.getElementById('ps_code1').value = data.postcode1; 
                    document.getElementById('ps_code2').value = data.postcode2; 
                    */
                    document.getElementById("ps_code").value =
                      data.zonecode;
                    document.getElementById("addr_b").value =
                      fullAddr;

                    // 커서를 상세주소 필드로 이동한다.
                    document.getElementById("addr_d");
                  },
                }).open();
              }
              </script>
              <tr>
                <th scope="row">뉴스레터 수신동의</th>
                <td>
                  <span>강남문화재단에서 발송하는 이메일을
                    받아보시겠습니까?</span><br />
                  <input type="radio" name="u_mailing" id="u_mailing1" value="y" checked="checked" title="수신동의" />
                  <label for="u_mailing1">예</label>
                  <input type="radio" name="u_mailing" id="u_mailing2" value="f" title="수신거부" />
                  <label for="u_mailing2">아니오</label>
                </td>
              </tr>
              <tr>
                <th scope="row">SNS 수신동의</th>
                <td>
                  <span>강남문화재단에서 발송하는 공연, 전시, 문화예술교육,
                    축제<br />
                    중요 공지사항 안내 SNS를 휴대폰으로
                    전송받으시겠습니까?</span>
                  <br />
                  <input type="radio" name="u_sns" id="u_sns1" value="y" checked="checked" title="수신동의" />
                  <label for="u_sns1">예</label>
                  <input type="radio" name="u_sns" id="u_sns2" value="f" title="수신거부" />
                  <label for="u_sns2">아니오</label>
                </td>
              </tr>
            </tbody>
          </table>
          <div id="btn_jc">
            <input type="submit" id="btn_join" class="btn_join" value="확인" onclick="form_check()" />
            <span class="btn_cancle">
              <a href="#">취소</a>
            </span>
          </div>
        </fieldset>
      </form>
    </div>
  </main>
  <footer>
    <?php
      include '../inc/footer.php'
    ?>
  </footer>
</body>

</html>