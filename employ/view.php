<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>직원채용 공고 &lt; 열린광장 &lt; 강남문화재단</title>
  <link rel="stylesheet" href="../CSS/reset.css" />
  <link rel="stylesheet" href="../CSS/header.css" />
  <link rel="stylesheet" href="../CSS/topmenu.css" />
  <link rel="stylesheet" href="../CSS/view.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>
</head>

<body>
  <header>
    <?php
        include '../inc/header.php';
        // 데이터 가져오기
        $bid = $_GET["bid"];
        $no = $_GET["no"];

        // DB 연결
        include "../inc/dbcon.php";
        
        // 쿼리 작성
        $sql = "select * from employ where bid=$bid;";
        $count_sql = "SELECT count(*) from employ";
        $p_sql = "SELECT * FROM employ WHERE bid < $bid ORDER BY bid DESC LIMIT 1;";
        $n_sql = "SELECT * FROM employ WHERE bid > $bid ORDER BY bid ASC LIMIT 1;";
        // echo $sql;
        // exit;
        
        // 쿼리 전송
        $result = mysqli_query($dbcon, $sql);
        $count_result = mysqli_query($dbcon, $count_sql);
        $p_result = mysqli_query($dbcon, $p_sql);
        $n_result = mysqli_query($dbcon, $n_sql);
        
        // DB에서 데이터 가져오기
        $array = mysqli_fetch_array($result);
        $p_array = mysqli_fetch_array($p_result);
        $n_array = mysqli_fetch_array($n_result);
        
        // 조회수 업데이트
        $cnt = $array["cnt"]+1;
        /* echo $cnt;
        exit; */
        $sql = "update employ set cnt = $cnt where bid = $bid;";
        /* echo $sql;
        exit; */
        mysqli_query($dbcon, $sql);
    ?>
  </header>
  <div class="menu_wrap">
    <div class="menu_bar">
      <p class="mbr_txt">홈 > 열린광장 > 직원채용 공고</p>
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
            <h1>질문과 답변</h1>
          </div>
        </div>
        <div class="board_wrap">
          <div class="board_head">
            <h3> <?php echo $array["n_title"]; ?></h3>
          </div>
          <div class="board_body">
            <table class="board_table" style="table-layout: fixed">
              <caption hidden>
                직원채용 상세페이지 : 등록일, 조회수, 내용, 첨부파일
              </caption>
              <!-- 12 / 20 -->
              <colgroup>
                <col width="12%" />
                <col width="20%" />
                <col width="12%" />
                <col width="20%" />
                <col width="12%" />
                <col width="20%" />
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
                  <td colspan="6" class="bd_contwrap">
                    <div class="board_content">
                      <?php 
                        echo $array["n_content"]; 
                    ?>
                    </div>
                  </td>
                </tr>
                <tr class="table_bottom">
                  <td scope="row">첨부</td>
                  <td colspan="3" class="down_link">
                    <?php if($array["f_name"]){ ?>
                    <span class=filename><a href="../data/employ/<?php echo $array["f_name"]; ?>"
                        download="<?php echo $array["f_name"]; ?>">
                        <?php echo $array["f_name"]; ?>
                      </a>
                    </span>
                    <button type="button" class="file"><a href="../data/empoly/<?php echo $array["f_name"]; ?>"
                        download="<?php echo $array["f_name"]; ?>">
                        다운로드
                      </a></button>
                    <?php } else { ?>
                    <span style="color:#777777;">첨부된 파일이 없습니다.</span>
                    <?php } ?>
                  </td>
                </tr>
                <tr class="page_prev">
                  <th scope="row" class="txtc">이전글</th>
                  <td colspan="4" class="b_left1 ">
                    <?php if(empty($p_array['bid'])){ ?>
                    <span>이전 글이 없습니다.</span>
                    <?php } else { ?>
                    <a href="view.php?bid=<?= $p_array['bid']?>&no=<?= $no - 1 ?>"><?= $p_array['n_title'] ?></a>
                    <?php } ?>
                  </td>
                  <?php $w_date = substr($array["w_date"], 0, 10); ?>
                  <td class="no_date txtc">
                    <?php echo empty($p_array['bid']) ? '.' : $w_date ?>
                  </td>
                </tr>
                <tr class="page_next">
                  <th scope="row" class="txtc">다음글</th>
                  <td colspan="4" class="b_left1">
                    <?php if(empty($n_array['bid'])){ ?>
                    <span>다음 글이 없습니다.</span>
                    <?php } else { ?>
                    <a href="view.php?bid=<?= $p_array['bid']?>&no=<?= $no + 1 ?>"><?= $n_array['n_title'] ?></a>
                    <?php } ?>
                  </td>
                  <td class="no_date txtc">
                    <?php echo empty($p_array['bid']) ? '.' : $w_date ?>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="btm_btns1">
              <div class="btm_btns2" style="margin-left: 59%;">
                <button type="button" style="background: #0d4590;"
                  onclick="location.href='write.php?parent_id=<?php echo $array['bid']?>'">답글</button>
                <button type="button"
                  onclick="location.href='modify.php?bid=<?php echo $bid;?>&no=<?php echo $no;?>'">수정</button>
                <button type="button" onclick="remove_employ()">삭제</button>
                <button type="button" onclick="location.href='list.php'">목록</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer style="margin-top: 150px">
    <?php
      include '../inc/footer.php'
    ?>
  </footer>
  <script>
  function remove_employ() {
    var ck = confirm("정말 삭제하시겠습니까?");
    if (ck) {
      location.href = "delete.php?bid=<?php echo $bid; ?>";
    };
  };
  </script>
</body>

</html>