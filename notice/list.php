<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>공지사항 &lt; 열린광장 &lt; 강남문화재단</title>
  <link rel="stylesheet" href="../CSS/reset.css" />
  <link rel="stylesheet" href="../CSS/header.css" />
  <link rel="stylesheet" href="../CSS/topmenu.css" />
  <link rel="stylesheet" href="../CSS/board.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>
</head>

<body>
  <header>
    <?php
        include '../inc/header.php'
      ?>
  </header>
  <div class="menu_wrap">
    <div class="menu_bar">
      <p class="mbr_txt">홈 > 열린광장 > 공지사항</p>
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
            <li><a id="board1" href="#">공지사항</a></li>
            <li><a href="board6_2.html">타기관 공지사항</a></li>
            <li><a href="board6_3.html">단임강사 모집공고</a></li>
            <li><a href="board6_4.html">직원채용 공고</a></li>
            <li><a href="board6_5.html">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="content_wrap">
        <div class="menu_title">
          <div class="menu_txt">
            <h1>공지사항</h1>
          </div>
        </div>
        <div class="notice_board_List">
          <div class="bd_top">
            <p class="total">Total <span class="color-main">338</span>건 1 페이지</p>
            <div class="board_control">
              <select name="viewCnt" id="viewCnt" class="select" title="한번에 보여지는 갯수 선택">
                <option value="10">10개씩</option>
                <option value="15">15개씩</option>
                <option value="20">20개씩</option>
              </select>
              <input type="button" class="viewCntBtn" value="보기" onclick="" />
            </div>
          </div>
          <table class="board_List">
            <caption class="hidden">
              게시판 리스트
            </caption>
            <thead>
              <tr>
                <th class="row1">번호</th>
                <th class="row2">제목</th>
                <th class="row3">첨부</th>
                <th class="row4">등록일</th>
                <th class="row5">조회</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="txtc">11</td>
                <td id="board_t">
                  <a href="#">2022 아트프라이즈 강남 운영 용역 선정 공고</a>
                </td>
                <td></td>
                <td class="txtc">2022-09-15</td>
                <td class="txtc">100</td>
              </tr>
            </tbody>
          </table>
          <div class="board_foot">
            <ul class="page_num">
              <li class="list1"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li><a href="#">7</a></li>
              <li><a href="#">8</a></li>
              <li><a href="#">9</a></li>
              <li><a href="#">10</a></li>
              <li class="btn_page">
                <img src="../images/btn_next.png" alt="다음페이지로 이동" />
              </li>
              <li class="btn_page">
                <img src="../images/btn_last.png" alt="마지막 페이지로 이동" />
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="search_bar">
      <select class="search_select">
        <option>제목</option>
        <option>내용</option>
        <option>제목+내용</option>
      </select>
      <input type="text" name="search_txt" id="search_txt" />
      <button type="button">
        <img src="../images/search_icon.jpg" alt="" />
      </button>
    </div>
  </main>
  <footer>
    <?php
      include '../inc/footer.php'
    ?>
  </footer>
</body>

</html>