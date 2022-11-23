<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>자유 게시판 &lt; 열린광장 &lt; 강남문화재단</title>
  <link rel="stylesheet" href="../CSS/reset.css" />
  <link rel="stylesheet" href="../CSS/header.css" />
  <link rel="stylesheet" href="../CSS/topmenu.css" />
  <link rel="stylesheet" href="../CSS/free_write.css" />
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
      width: 770, // 에디터 넓이
      height: 300, // 에디터 높이
      minHeight: null, // 최소 높이
      maxHeight: null, // 최대 높이
      focus: true, // 에디터 로딩후 포커스를 맞출지 여부
      lang: "ko-KR", // 한글 설정
      placeholder: '내용을 등록합니다.', //placeholder 설정
      toolbar: [
        ['fontsize', ['fontsize']],
        ['style', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
        ['color', ['forecolor', 'color']],
        ['table', ['table']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        // ['insert', ['picture', 'link', 'video']],
      ],
      fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', '맑은 고딕', '궁서', '굴림체', '굴림', '돋움체',
        '바탕체'
      ],

    });
  });

  function setContentsLength(str, index) {
    var status = false;
    var texthit = 0; //총 글자수
    var maxhit = 100; //최대 글자수
    var editorText = f_SkipTags_html(str); //에디터에서 태그를 삭제하고 내용만 가져오기
    editorText = editorText.replace(/\s/gi, ""); //줄바꿈 제거
    editorText = editorText.replace(/&nbsp;/gi, ""); //공백제거

    texthit = editorText.length;
    if (maxhit > 0) {
      if (texthit > maxhit) {
        status = true;
      }
    }

    if (status) {
      var msg = "등록오류 : 글자수는 최대 " + maxhit + "까지 등록이 가능합니다. / 현재 글자수 : " + texthit + "자";
      console.log(msg);
    }
  }

  function free_check() {
    var f_title = document.getElementById("f_title");
    var f_content = document.getElementById("f_content");

    if (!f_title.value) {
      alert("제목을 입력하세요.");
      f_title.focus();
      return false;
    };

    if (!f_content.value) {
      alert("내용을 입력하세요.");
      f_content.focus();
      return false;
    };
  };
  </script>
</head>

<body>
  <header>
    <?php
        include '../inc/header.php';
        include "../inc/user_check.php";
      ?>
  </header>
  <div class="menu_wrap">
    <div class="menu_bar">
      <p class="mbr_txt">홈 > 열린광장 > 자유 게시판</p>
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
            <li><a id="board1" href="#">자유 게시판</a></li>
            <li><a href="../employ/list.php">질문과 답변</a></li>
            <li><a href="../faq/list.php">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="content_wrap">
        <div class="menu_title">
          <div class="menu_txt">
            <h1>자유 게시판</h1>
          </div>
        </div>
        <div class="board_wrap">
          <form name="free_form" action="insert.php" method="post" onsubmit="return free_check()"
            enctype="multipart/form-data">
            <div class="board_body">
              <table>
                <caption class="hidden">
                </caption>
                <thead>
                  <tr class="board_title">
                    <th scope="row">
                      <label for="f_title">제목 *</label>
                    </th>
                    <td>
                      <input type="text" name="f_title" id="f_title" name="f_title" placeholder="제목을 입력하세요."
                        autofocus />
                    </td>
                  </tr>
                  <!-- <tr class="board_title">
                    <th scope="row">
                      <label for="writer">작성자 *</label>
                    </th>
                    <td>
                      <input type="text" name="writer" id="writer" name="writer" autofocus
                        value="<?php echo $s_name; ?>" />
                    </td>
                  </tr> -->
                </thead>
                <tbody>
                  <tr>
                    <td colspan="4" class="bd_contwrap">
                      <div class="board_content">
                        <textarea id="summernote" name="f_content"></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr class="table_bottom">
                    <td scope="row">첨부</td>
                    <td colspan="3" class="down_link">
                      <input type="file" name="up_file" id="up_file"></input>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="btm_btns1">
                <div class="btm_btns2">
                  <button type="submit" id="btn_save" onclick="free_check()">저장</button>
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