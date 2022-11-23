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

  function notice2_check() {
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
        // 데이터 가져오기
          $bid = $_GET["bid"];
          $no = $_GET["no"];

        // DB 연결
          include "../inc/dbcon.php";

        // 쿼리 작성
          $sql = "select * from notice2 where bid = $bid;";

        // 쿼리 전송
          $result = mysqli_query($dbcon, $sql);

        // DB에서 데이터 가져오기
          $array = mysqli_fetch_array($result);

        // DB 종료
          mysqli_close($dbcon);
      ?>
  </header>
  <div class="menu_wrap">
    <div class="menu_bar">
      <p class="mbr_txt">홈 > 열린광장 > 타기관 공지사항</p>
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
            <li><a id="board1" href="#">타기관 공지사항</a></li>
            <li><a href="../free/list.php">자유 게시판</a></li>
            <li><a href="../employ/list.php">질문과 답변</a></li>
            <li><a href="../faq/list.php">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="content_wrap">
        <div class="menu_title">
          <div class="menu_txt">
            <h1>타기관 공지사항</h1>
          </div>
        </div>
        <div class="board_wrap">
          <form name="notice2_form" action="edit.php?bid=<?php echo $bid;?>&no=<?php echo $no;?>" method="post"
            enctype="multipart/form-data" onsubmit="return notice2_check()">
            <div class="board_body">
              <table>
                <caption class="hidden">
                </caption>
                <colgroup>
                  <col width="20%">
                  <col width="30%">
                  <col width="20%">
                  <col width="30%">
                </colgroup>
                <thead>
                  <tr class="board_title">
                    <th> 카테고리
                    </th>
                    <td>
                      <select name="category" id="category">
                        <option value="division" <?php if($array["category"] == "division") echo " selected"; ?>>선택
                        </option>
                        <option value="show" <?php if($array["category"] == "show") echo " selected"; ?>>공연</option>
                        <option value="exhibition" <?php if($array["category"] == "exhibition") echo " selected"; ?>>전시
                        </option>
                        <option value="education" <?php if($array["category"] == "education") echo " selected"; ?>>교육
                        </option>
                        <option value="event" <?php if($array["category"] == "event") echo " selected"; ?>>행사</option>
                        <option value="etc" <?php if($array["category"] == "etc") echo " selected"; ?>>기타</option>
                      </select>
                    </td>
                    <th>공지등록
                    <td>
                      <label class="switch">
                        <input type="checkbox" name="n_check" class="n_check">
                        <span class="slider round" style=""></span>
                      </label>
                      <p style="<?php if($array["status"] == "1") echo " display: none"; ?>">OFF</p>
                      <p style="<?php if($array["status"] == "0") echo " display: none"; ?>">ON</p>
                    </td>
                    <script>
                    var check = $("input[type='checkbox']");
                    <?php if($array["status"] == 1){ ?>
                    check.trigger('click');
                    <?php } ?>
                    check.click(function() {
                      $(".board_title td > p").toggle();
                    });
                    </script>
                  </tr>
                  <tr class="board_content">
                    <th> 제목 </th>
                    <td colspan="3">
                      <input type="text" name="n_title" id="n_title" name="n_title" placeholder="제목을 입력하세요."
                        value="<?php echo $array["n_title"]?>" autofocus />
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
                        <textarea id="summernote" class="n_content" name="n_content">
                        <?php echo $array["n_content"]?>
                        </textarea>
                      </div>
                    </td>
                  </tr>
                  <tr class="table_bottom">
                    <td scope="row">첨부</td>
                    <td colspan="3" class="down_link">
                      <input type="file" name="up_file" id="up_file"></input>
                    </td>
                </tbody>
              </table>
              <div class="btm_btns1">
                <div class="btm_btns2">
                  <button type="submit" id="btn_save" onclick="notice2_check()">저장</button>
                  <button type="button" onclick="history.back();">목록</button>
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