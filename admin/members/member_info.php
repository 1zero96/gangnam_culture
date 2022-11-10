<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>강남문화재단 마이페이지</title>
  <link rel="stylesheet" href="../../CSS/reset.css" />
  <link rel="stylesheet" href="../../CSS/topmenu.css" />
  <link rel="stylesheet" href="../../CSS/header.css" />
  <link rel="stylesheet" href="../../CSS/member_info.css" />
  <link rel="stylesheet" href="../../CSS/footer.css" />
  <script src="../../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../../JS/header.js"></script>
  <script>
  "use strict";
  /* 제이쿼리 */
  $(document).ready(function() {
    /* tab Menu */
    $("#tabs li").click(function() {
      let tab = $("#tabs li").index(this);
      if ($(this).hasClass("on") === false) {
        $(this).addClass("on");
        $(this).siblings().removeClass("on");
      }
      if ($(".container > div").eq(tab).hasClass("on") === false) {
        $(".container > div").eq(tab).addClass("on");
        $(".container > div").eq(tab).siblings().removeClass("on");
      }
    });
  });

  function edit_form_check() {
    var pwd = document.getElementById("pwd");
    var repwd = document.getElementById("repwd");


    if (pwd.value) {
      var pwd_len = pwd.value.length;
      if (pwd_len < 4 || pwd_len > 8) {
        pwd.focus();
        return false;
      };
    };

    if (pwd.value) {
      if (pwd.value != repwd.value) {
        repwd.focus();
        return false;
      };
    };
  };


  // 이메일 select 선택시 자동으로 폼에 입력되게 함
  function change_email() {
    let email_dns = document.querySelector("#email_dns");
    let email_sel = document.querySelector("#email_sel");
    var idx = email_sel.options.selectedIndex;
    var val = email_sel.options[idx].value;
    // 순서 array, 순번 index //
    email_dns.value = val;
  };
  </script>
</head>

<body>
  <header>
    <?php
      include '../inc/header.php'
    ?>
  </header>
  <?php
  $g_idx = $_GET["g_idx"];
  include "../inc/login_check.php"; // 로그인 사용자만 접근
  include "../inc/dbcon.php"; // DB 연결

  /** 쿼리 작성 */
  $sql = "select * from members where idx=$g_idx;";

  /** 쿼리 실행 */
  $result = mysqli_query($dbcon, $sql);
  $array = mysqli_fetch_array($result);
  // echo $array["u_id"];
  // exit;

  /** DB에서 데이터 가져오기(*select) */
  // mysqli_fetch_row(쿼리실행문) -- 필드순서
  // mysqli_fetch_array(쿼리실행문) -- 필드이름
  // mysqli_num_rows(쿼리실행문) -- 전체 행 개수

  ?>
  <div class="menu_wrap">
    <div class="menu_bar">
      <p class="mbr_txt">홈 > 부가메뉴 > 마이페이지</p>
    </div>
  </div>
  <main id="main">
    <div class="container">
      <div id="tab1" class="tab-content on">
        <div class="table_title">
          <img class="table_icon" src="../../images/check_button.jpg" />
          <span class="table-top">회원정보 수정</span>
        </div>
        <div class="form_wrap">
          <form name="edit_form" action="edit.php" method="post" onsubmit="return edit_form_check()">
            <fieldset>
              <table class="form__table">
                <caption class="hidden">
                  "회원 정보수정 : 비밀번호, 비밀번호 확인, 전화번호, 이메일,
                  주소, 메일수신동의, 문자발송동의, 우편수신동의"
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
                      <input type="hidden" name="g_idx" value="<?php echo $array["idx"]; ?>">
                      <input type="text" name="u_name" id="u_name" maxlength="8" title="이름"
                        value="<?php echo $array["u_name"]; ?>" readonly style="background-color: lightgray" />
                      <span id="err_name" class="msgRed"></span>
                      <span id="err_name2" class="msgRed"></span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <label for="u_id">아이디</label>
                    </th>
                    <td>
                      <input type="text" name="u_id" id="u_id" title="아이디" value="<?php echo $array["u_id"]; ?>"
                        readonly style="background-color: lightgray" />
                      <span id="err_ID" class="msgRed"></span>
                      <span class="id-failure-message hide msgRed">* 영문자로 시작하는 6~12자 영문자 또는 숫자만 사용
                        가능합니다.</span>
                      <span class="id-success-message hide msgBlu">사용할 수 있는 아이디 입니다.</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <label for="pwd">비밀번호</label>
                    </th>
                    <td>
                      <input type="password" name="pwd" id="pwd" maxlength="16" title="비밀번호" autofocus />
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
                      <label for="mobile">전화번호</label>
                    </th>
                    <td>
                      <input type="text" id="mobile" name="mobile" oninput="autoHyphen(this)" maxlength="13"
                        title="전화번호" value="<?php echo $array["mobile"]; ?>" />
                      <span id="err_phone" class="msgRed"></span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <?php $email = explode("@", $array["email"]); ?>
                      <label for="email_id">이메일</label>
                    </th>
                    <td>
                      <input type="text" name="email_id" id="email_id" title="이메일 아이디 입력" maxlength="20"
                        value="<?php echo $email[0]; ?>">
                      <span>@</span>
                      <input type="text" name="email_dns" id="email_dns" title="이메일 주소 입력" maxlength="20"
                        value="<?php echo $email[1]; ?>">
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
                      <input type="text" name="ps_code" id="ps_code" value="<?php echo $array["ps_code"]; ?>"
                        maxlength="6" title="우편번호" readonly="" placeholder="123456" />
                      <a title="(새창열기)" href="javascript:DaumPostcode();void(0);" class="btn_address"
                        style="margin-left: 5px">우편번호 조회</a>
                      <span id="err_zip" class="msgRed"></span>
                      <br />
                      <input type="text" name="addr_b" id="addr_b" value="<?php echo $array["addr_b"]; ?>" readonly=""
                        onclick="" maxlength="100" title="주소 동 이전까지 입력" width="80%" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <label for="userAddress2">상세주소</label>
                    </th>
                    <td>
                      <input type="text" name="addr_d" id="addr_d" maxlength="100" title="주소 동 이하 입력"
                        value="<?php echo $array["addr_d"]; ?>" placeholder="사용자가 제출한 주소 가져오기2" />
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
                        document.getElementById('userZip1').value = data.postcode1; 
                        document.getElementById('userZip2').value = data.postcode2; 
                        */
                        document.getElementById("userZip").value =
                          data.zonecode;
                        document.getElementById("userAddress1").value =
                          fullAddr;

                        // 커서를 상세주소 필드로 이동한다.
                        document.getElementById("userAddress2");
                      },
                    }).open();
                  }
                  </script>
                  <tr>
                    <th scope="row">뉴스레터 수신동의</th>
                    <td>
                      <span>강남문화재단에서 발송하는 이메일을
                        받아보시겠습니까?</span><br />
                      <input type="radio" name="apply_mail" id="apply_mail" value="t"
                        <?php if($array["apply_mail"] == "t") echo " checked";?>>
                      <span>예</span>
                      <input type="radio" name="apply_mail" id="apply_mail" value="t"
                        <?php if($array["apply_mail"] == "f") echo " checked";?>>
                      <span>아니오</span>
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
                      <input type="radio" name="apply_sns" id="apply_sns" value="t"
                        <?php if($array["apply_sns"] == "t") echo " checked";?>>
                      <span>예</span>
                      <input type="radio" name="apply_sns" id="apply_sns" value="f"
                        <?php if($array["apply_sns"] == "f") echo " checked";?>>
                      <span>아니오</span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div id="btn_jc">
                <button type="submit" id="btn_join" class="btn_join">수정</button>
                <span class="btn_cancle">
                  <a href="#">취소</a>
                </span>
              </div>
            </fieldset>
          </form>
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