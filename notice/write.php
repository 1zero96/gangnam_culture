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
  <link rel="stylesheet" href="../CSS/notice_write.css" />
  <link rel="stylesheet" href="../CSS/header.css">
  <link rel="stylesheet" href="../CSS/summernote/summernote-lite.css">
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script src="../JS/summernote/summernote-lite.min.js"></script>
  <script defer src="../JS/header.js"></script>
  <script>
  $(document).ready(function() {
    //여기 아래 부분
    $('#summernote').summernote({
      height: 300, // 에디터 높이
      minHeight: null, // 최소 높이
      maxHeight: null, // 최대 높이
      focus: true, // 에디터 로딩후 포커스를 맞출지 여부
      lang: "ko-KR", // 한글 설정
      placeholder: '최대 2048자까지 쓸 수 있습니다' //placeholder 설정

    });
  });

  function notice_check() {
    var n_title = document.getElementById("n_title");
    var n_content = document.getElementById("n_content");

    if (!n_title.value) {
      alert("제목을 입력하세요.");
      n_title.focus();
      return false;
    };

    if (!n_content.value) {
      alert("내용을 입력하세요.");
      n_content.focus();
      return false;
    };
  };
  </script>
</head>

<body>
  <header>
    <?php
        include '../inc/header.php';
        include "../inc/admin_check.php";
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
        <div class="board_wrap">
          <form name="notice_form" action="insert.php" method="post" onsubmit="return notice_check()">
            <div class="board_body">
              <table>
                <caption class="hidden">
                </caption>
                <thead>
                  <tr class="board_title">
                    <th scope="row">
                      <label for="n_title">제목 *</label>
                    </th>
                    <td>
                      <input type="text" name="n_title" id="n_title" name="n_title" autofocus />
                    </td>
                  </tr>
                  <tr class="board_title">
                    <th scope="row">
                      <label for="writer">작성자 *</label>
                    </th>
                    <td>
                      <input type="text" name="writer" id="writer" name="writer" autofocus
                        value="<?php echo $s_name; ?>" />
                    </td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="4" class="bd_contwrap">
                      <div class="board_content">
                        <textarea id="summernote" name="n_content"></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr class="table_bottom">
                    <td scope="row">첨부</td>
                    <td colspan="3" class="down_link">
                      <span class="file"><a href="#">선택된 파일 없음</a></span>
                      <button type="button">파일선택</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="btm_btns1">
                <div class="btm_btns2">
                  <button type="submit" id="btn_save" onclick="notice_check()">저장</button>
                  <button type="button">목록</button>
                </div>
              </div>
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