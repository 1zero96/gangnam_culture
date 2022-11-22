<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ &lt; 열린광장 &lt; 강남문화재단</title>
  <link rel="stylesheet" href="../CSS/reset.css" />
  <link rel="stylesheet" href="../CSS/header.css" />
  <link rel="stylesheet" href="../CSS/topmenu.css" />
  <link rel="stylesheet" href="../CSS/board.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>
  <script>
  $(document).ready(function() {
    /** tab_menu 'data' 방식 */
    $("ul.tabs li").click(function() {
      let tab_id = $(this).attr("data-tab");

      $("ul.tabs li").removeClass("on");
      $(".tab-content").removeClass("on");

      $(this).addClass("on");
      $("#" + tab_id).addClass("on");
      /* tab_id와 같은 클래스를 찾아서 변겅*/
    });

    /** accordion Menu */
    let acMenu = $(".accordion");
    let i;

    for (i = 0; i < acMenu.length; i++) {
      /** i는 0부터 시작하고, acMenu의 요소의 수의 최대까지 계산, i는 +1씩 증가 */
      acMenu[i].addEventListener("click", function() {
        /** acMenu[i]번째에 이벤트 함수를 추가 */
        this.classList.toggle("active");
        let panel = this.nextElementSibling; /** 다음에 오는 형제 요소 */
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
          /** 변수 panel의 스타일(maxHeight)의 값이 null인지 확인 */
        } else {
          /** 아니라면? */
          panel.style.maxHeight = panel.scrollHeight + "px";
          /** 변수 panel의 스타일(maxHegiht)를 scrollHeight로 변경 */

          /*
        clientHeight 는 요소의 내부 높이입니다. 패딩 값은 포함되며, 스크롤바, 테두리, 마진은 제외됩니다.
        offsetHeight 는 요소의 높이입니다. 패딩, 스크롤 바, 테두리(Border)가 포함됩니다. 마진은 제외됩니다.
        scrollHeight 는 요소에 들어있는 컨텐츠의 전체 높이입니다. 패딩과 테두리가 포함됩니다. 마진은 제외됩니다.
       */
        }
      });
    }
  });
  </script>
</head>

<body>
  <header>
    <?php
          include '../inc/header.php';
      ?>

    <script>
    function sel_view() {
      var view = document.getElementById('viewCnt');
      var idx = view.options.selectedIndex;
      if (idx == 0) {
        location.href = "http://localhost/gangnam_culture/free/search_result.php?category=f_title&search=&view=10"
        alert('변경되었습니다.')
      } else if (idx == 1) {
        location.href = "http://localhost/gangnam_culture/free/search_result.php?category=f_title&search=&view=15"
        alert('변경되었습니다.');
      } else if (idx == 2) {
        location.href = "http://localhost/gangnam_culture/free/search_result.php?category=f_title&search=&view=20"
        alert('변경되었습니다.');
      }
    }

    function no_per() {
      alert("로그인 후 작성 가능합니다");
      location.href = "http://localhost/gangnam_culture/login/login.php";
    }
    </script>

  </header>
  <div class="menu_wrap">
    <div class="menu_bar">
      <p class="mbr_txt">홈 > 열린광장 > FAQ</p>
    </div>
  </div>
  <main id="main">
    <div class="div_wrap">
      <div class="aside_wrap">
        <div class="aside_head">
          <h2 class="aside_title">열린광장</h2>
        </div>
        <div class="aside_body">
          <ul class="aside_menu">
            <li><a href="../notice/list.php">공지사항</a></li>
            <li><a href="../notice2/list.php">타기관 공지사항</a></li>
            <li><a href="../employ/list.php">직원채용 공고</a></li>
            <li><a href="../free/list.php">자유 게시판</a></li>
            <li><a id="board1" href="#">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="content_wrap">
        <div class="menu_title">
          <div class="menu_txt">
            <h1>자주하는 질문</h1>
          </div>
        </div>
        <div class="container">
          <ul class="tabs">
            <li class="tab_menu on" data-tab="tab-1">전체</li>
            <li class="tab_menu" data-tab="tab-2">관람/예매</li>
            <li class="tab_menu" data-tab="tab-3">회원</li>
            <li class="tab_meun" data-tab="tab-4">기타</li>
          </ul>
          <!--탭 메뉴 내용 시작부분-->
          <div id="tab-1" class="tab-content on">
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              <span>&nbsp;티켓 예매는 어떻게 하나요?</span>
            </button>
            <div class="panel">
              <p>
                <br />
                티켓예매는 온라인(홈페이지 모바일웹), 전화, 방문예매가
                가능합니다. <br /><br /><b>[공연 입장권 수령]</b><br />공연
                당일 공연 시작 1시간 전부터 해당 공연장 고객도움자리에서
                (예약자명의 신분증 제시)<br />공연일 이전 강남문화재단에서
                예매한 경우에 한해 9am~6pm 사이(예약자명의 신분증 제시)<br />※
                공연 입장권 수령방법은 공연에 따라 달라질 수 있으며, 본인
                확인이 필요한 특정한 할인을<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;받은 경우에는 사전 수령이 어려울
                수 있음 ※
                <br /><br />
              </p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;예매 수수료는 얼마인가요?
            </button>
            <div class="panel">
              <p>
                <br />강남문화재단을 통한 전화/홈페이지/방문 예매 시에는
                예매수수료가 부과되지 않습니다.<br /><br />
              </p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;공연 예매를 했는데, 휴대폰으로 예매번호가 오지 않습니다.
            </button>
            <div class="panel">
              <p>
                <br />공연을 예매하시는 경우 휴대푠과 이메일로 예매번호를
                전송해 드립니다.<br />그러나 다음의 몇가지 경우 예매번호가
                발송되지 못하는 경우가 있습니다.<br /><br />강남문화재단
                회원의 경우,<br />홈페이지 내 회원정보에 휴대폰 번호를 잘못
                기입하셔서, <br />타인에게 예매번호가 발송되는 경우가 발생하고
                있습니다.<br />우선 회원의 자기 정보 보기에서 휴대폰 번호가
                맞게 입력되어 있는지 확인을 부탁드립니다.<br /><br />
              </p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;예매 시 결제 수단에는 어떤 것들이 있나요?
            </button>
            <div class="panel">
              <p>
                <br />신용카드, 계좌이체(가상계좌번호), 무통장 입금
                가능합니다.<br />
                <br />
              </p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;무통장 입금 결제의 방법은?
            </button>
            <div class="panel">
              <p>
                <br />강남문화재단 무통장 입금 시스템은 가상 계좌를 이용한
                실시간 입금 확인 시스템입니다.<br />

                <br />
                - 가상계좌란? : 각 예매 건에 대해 일시적으로 다른 입금 은행
                계좌가 부여되고 입금마감 시간이 지나면 <br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;예매
                시 부여된 입금 은행계좌가 자동으로 소멸되는 시스템입니다.<br /><br />
                - 입금 계좌 번호는 예매 완료 페이지에 별도 표시됩니다.<br /><br />
                - 가상계좌 입금 시, 반드시 해당 공연의 예매금액과 입금금액이
                일치해야 하며, 일치하지 않는 경우에는<br />
                &nbsp;&nbsp;&nbsp;입금 오류가 발생하여 입금처리 되지 않으므로
                예매 시 예매금액을 꼭 확인해주십시오.<br /><br />
                -가상계좌는 예매일을 포함하여 그 다음날 자정(24:00시, 주말 및
                공휴일 포함)까지 지정된 계좌로 입금<br />&nbsp;&nbsp;하셔야만
                예매가 유효합니다.<br /><br />
              </p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;신용카드 결제 후 영수증을 어떻게 받나요?
            </button>
            <div class="panel">
              <p>
                <br />
                1) 인터넷 예매 시 : <br />결제 후 My Page-관람전 예매내역-공연
                선택하여 [영수증 출력] 클릭하면 출력가능합니다. <br /><br />2)
                콜센터 예매 시 : <br />예매 후 상담원에게 영수증 발급
                요청하시면 당일 티켓 수령 시 함께 받으실 수 있고, 공연일
                이전에 미리 영수증을 받아보셔야 하는 경우 에는 이메일로
                발송해드리고 있습니다.<br /><br />
              </p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;현금영수증을 받고 싶은데 어떻게 해야하죠?
            </button>
            <div class="panel">
              <p>
                <br />강남문화재단 콜센터(1234-8756)를 통하여 신청하실 수
                있습니다.<br />

                주민등록번호 또는 핸드폰 번호로 접수가능하며, 접수내역은
                현금영수증 홈페이지(http://현금영수증.kr)에서 결제일 다음날
                9시부터 조회됩니다.<br /><br />
              </p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;부분 취소 및 예매 변경을 할 수 있나요?
            </button>
            <div class="panel">
              <p>
                <br />인터넷 상에서는 한 예매건의 부분 취소 및 예매변경이
                불가능합니다.<br />
                부분 취소 및 변경을 위해서는 해당예매건 전체를 취소하고 다시
                예매를 해야 하며, <br />이 경우 취소 수수료가 부가될 수
                있습니다.&nbsp;(예매 당일 취소건은 취소 수수료가 없습니다)<br /><br />
              </p>
            </div>
          </div>
          <div id="tab-2" class="tab-content">
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              <span>&nbsp;티켓 예매는 어떻게 하나요?</span>
            </button>
            <div class="panel">
              <p>답변</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변2</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변3</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변4</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변5</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변6</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변7</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변8</p>
            </div>
          </div>
          <div id="tab-3" class="tab-content">
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              <span>&nbsp;티켓 예매는 어떻게 하나요?</span>
            </button>
            <div class="panel">
              <p>답변</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변2</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변3</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변4</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변5</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변6</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변7</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변8</p>
            </div>
          </div>
          <div id="tab-4" class="tab-content">
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              <span>&nbsp;티켓 예매는 어떻게 하나요?</span>
            </button>
            <div class="panel">
              <p>답변</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변2</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변3</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변4</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변5</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변6</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변7</p>
            </div>
            <button class="accordion">
              <span><img src="../images/bottom_arrow.png" alt="" width="20px" height="20px" /></span>
              &nbsp;질문1
            </button>
            <div class="panel">
              <p>답변8</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer style="margin-top:200px">
    <?php
      include '../inc/footer.php'
    ?>
  </footer>
</body>

</html>