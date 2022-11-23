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
  <link rel="stylesheet" href="../CSS/employ_write.css" />
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
    var textCnt = 0; //총 글자수
    var maxCnt = 100; //최대 글자수
    var editorText = f_SkipTags_html(str); //에디터에서 태그를 삭제하고 내용만 가져오기
    editorText = editorText.replace(/\s/gi, ""); //줄바꿈 제거
    editorText = editorText.replace(/&nbsp;/gi, ""); //공백제거

    textCnt = editorText.length;
    if (maxCnt > 0) {
      if (textCnt > maxCnt) {
        status = true;
      }
    }

    if (status) {
      var msg = "등록오류 : 글자수는 최대 " + maxCnt + "까지 등록이 가능합니다. / 현재 글자수 : " + textCnt + "자";
      console.log(msg);
    }
  }

  function employ_check() {
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
        include '../inc/dbcon.php';
        $parent_id=$_GET["parent_id"];

        if($parent_id){

          $sql = "select * from employ where bid=".$parent_id;
          $result = mysqli_query($dbcon, $sql) or die("query error => ".$mysqli->error);
          $rs = mysqli_fetch_object($result);
          $rs->n_title = "[RE]".$rs->n_title;
      }

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
            <li><a href="../notice/list.php">공지사항</a></li>
            <li><a href="../notice2/list.php">타기관 공지사항</a></li>
            <li><a href="../free/list.php">자유 게시판</a></li>
            <li><a id="board1" href="#">질문과 답변</a></li>
            <li><a href="../faq/list.php">FAQ</a></li>
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
          <form name="employ_form" action="insert.php" method="post" enctype="multipart/form-data"
            onsubmit="return employ_check()">
            <div class="board_body">
              <table>
                <caption class="hidden">
                </caption>
                <thead>
                  <tr class="board_title">
                    <th scope="row">
                      <label for="n_title">제목 </label>
                    </th>
                    <td>
                      <input type="text" name="n_title" id="n_title" name="n_title" placeholder="제목을 입력하세요."
                        value="<?php echo $rs->n_title;?>" autofocus />
                    </td>
                  </tr>
                  <tr>
                    <th>글잠금</th>
                    <td style="padding: 0px 40px 0 26px;">
                      <input type="password" name="pwd" id="pwd" placeholder="비밀번호">
                      <input type="checkbox" value="1" name="lockpost" id="lockpost" style="margin-left: 15px;" />
                      <label for="lockpost">해당 글을 잠급니다.</label>
                      <input type="hidden" name="parent_id" value="<?php echo $parent_id;?>">
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
                      <input type="file" name="up_file" id="up_file"></input>
                    </td>
                  </tr>
              </table>
              <div class="btm_btns1">
                <div class="btm_btns2">
                  <button type="submit" id="btn_save" onclick="employ_check()">저장</button>
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