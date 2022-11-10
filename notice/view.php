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
  <link rel="stylesheet" href="../CSS/board6-1.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>

</head>

<body>
  <header>
    <?php
        include '../inc/header.php';
        // 데이터 가져오기
        $n_idx = $_GET["n_idx"];
        
        // DB 연결
        include "../inc/dbcon.php";
        
        // 쿼리 작성
        $sql = "select * from notice where idx=$n_idx;";
        // echo $sql;
        // exit;
        
        // 쿼리 전송
        $result = mysqli_query($dbcon, $sql);
        
        // DB에서 데이터 가져오기
        $array = mysqli_fetch_array($result);
        
        // 조회수 업데이트
        $cnt = $array["cnt"]+1;
        /* echo $cnt;
        exit; */
        $sql = "update notice set cnt = $cnt where idx = $n_idx;";
        /* echo $sql;
        exit; */
        mysqli_query($dbcon, $sql);
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
          <div class="board_head">
            <h3> <?php echo $array["n_title"]; ?></h3>
          </div>
          <div class="board_body">
            <table class="board_table">
              <caption hidden>
                공지사항 상세페이지 : 등록일, 조회수, 내용, 첨부파일
              </caption>
              <colgroup>
                <col width="10%" />
                <col width="15%" />
                <col width="10%" />
                <col width="15%" />
                <col width="10%" />
                <col width="15%" />
              </colgroup>
              <thead>
                <tr>
                  <th scope="row" class="txtc">작성자</th>
                  <td class="b_left">
                    <?php echo $array["writer"]; ?>
                  </td>
                  <th scope="row" class="txtc">날짜</th>
                  <td class="b_left1">
                    <?php 
                    $w_date = substr($array["w_date"], 0, 10);
                    echo $w_date; 
                    ?>
                  </td>
                  <th scope="row" class="txtc">조회수</th>
                  <td class="b_left1"><?php echo $cnt; ?></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="4" class="bd_contwrap">
                    <div class="board_content">
                      <?php 
                        // textarea의 엔터를 br로 변경
                        // str_repalce("어떤 문자를", "어떤 문자로", "어떤 값에서");
                        // $n_content = str_replace("\n", "<br>", $array["n_content"]);
                        // $n_content = str_replace(" ", "&nbsp;", $n_content);
                        echo $array["n_content"]; 
                    ?>
                    </div>
                  </td>
                </tr>
                <tr class="table_bottom">
                  <td scope="row">첨부</td>
                  <td colspan="3" class="down_link">
                    <span class="file"><a href="#">download.jpg</a></span>
                    <button type="button">다운로드</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="btm_btns1">
              <div class="btm_btns2">
                <button type="button" onclick="location.href='list.php'">목록</button>
              </div>
            </div>
          </div>
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