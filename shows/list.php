<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>이달의 일정 &lt; 공연·전시·강좌 &lt; 강남문화재단</title>
  <link rel="stylesheet" href="../CSS/reset.css" />
  <link rel="stylesheet" href="../CSS/header.css" />
  <link rel="stylesheet" href="../CSS/topmenu.css" />
  <link rel="stylesheet" href="../CSS/show.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>

</head>

<body>
  <header>
    <?php
    include '../inc/header.php';
    
    /** DB 연결 */
    include "../inc/dbcon.php";

    /** 쿼리 작성 */
    $sql = "select * from shows;";
    $t_sql = "select count(*) from shows;";

    /** 쿼리 전송 */
    $result = mysqli_query($dbcon, $sql);
    $t_result = mysqli_query($dbcon, $t_sql);
    $row = mysqli_fetch_row($t_result);
    
    /** 전체 데이터 가져오기 */
    $total = mysqli_num_rows($result);
    $total_count = $row[0];

    /** paging : 한 페이지 당 보여질 목록 수 */
    $list_num = 10;

    /** 한 블럭 당 페이지 수 */
    $page_num = 5;

    /** 현재 페이지의 번호 */
    $page = isset($_GET["page"])? $_GET["page"] : 1;

    /** 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림 */
    $total_page = ceil($total / $list_num);

    /** 글번호 */
    $print_num = $total_count - $list_num*($page-1);


    /** $total_block = 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수 */
    $total_block = ceil($total_page / $page_num);
    
    /** 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수 */
    $now_block = ceil($page / $page_num);

    /** 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1 */
    $s_pageNum = ($now_block - 1) * $page_num + 1;

    if($s_pageNum <= 0){
      $s_pageNum = 1;
    };

    /** 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수 */
    $e_pageNum = $now_block * $page_num;

    /** 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록 함 */
    if($e_pageNum > $total_page){
      $e_pageNum = $total_page;
    };

    /** 이전 블럭 이동시 첫 페이지 */
    $prev_page=($now_block*$page_num)-$page_num;
    
    /** 다음 블럭 이동시 첫 페이지 */
    $next_page=($now_block*$page_num)+1;
    ?>

    <?php echo '<script>
          window.onload = function(){
            let page_num = document.getElementById("page' .$page .'");
            page_num.style.color= "#006ab6";
            page_num.style.fontWeight = "bold";
            page_num.style.borderBottom = "1px solid #006ab6";
          }
          </script>'; ?>

  </header>
  <main id="main">
    <div class="div_wrap">
      <div class="aside_wrap">
        <div class="aside_head">
          <h2 class="aside_title">공연·전시·강좌</h2>
        </div>
        <div class="aside_body">
          <ul class="aside_menu">
            <li><a href="#">이달의 일정</a></li>
            <li><a href="board2_2.html">예매안내</a></li>
            <li><a id="board1" href="board2_3.html">공연 안내 및 예매</a></li>
            <li><a href="board2_4.html">전시 안내 및 예매</a></li>
            <li><a href="board2_5.html">축제 및 행사 안내</a></li>
          </ul>
        </div>
      </div>
      <div class="content_wrap">
        <div class="menu_title">
          <div class="menu_txt">
            <h1>공연안내 및 예매</h1>
          </div>
        </div>
        <div class="board_wrap">
          <div class="event__header">
            <h2 class="pagesum">
              Total <span class="number"><?php echo $total_count?></span>건 / <?php echo $page?> 페이지
            </h2>
          </div>
          <?php
            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
            $start = ($page - 1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개
            $sql = "select * from shows order by h_date desc limit $start, $list_num;";
            // echo $sql;
            /* exit; */

            // DB에 데이터 전송
            $result = mysqli_query($dbcon, $sql);

            // DB에서 데이터 가져오기
            // pager : 글번호(역순)
            // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
            $i = $total - (($page - 1) * $list_num);
            while($array = mysqli_fetch_array($result)){
            ?>
          <div class="event">
            <div class="event__img">
              <img src="../images/content1_1.jpg" alt="" width="285px" height="398px" />
            </div>
            <div class="event__list">
              <h3>2022 목요 예술무대가 - 온담</h3>
              <table class="event__table">
                <caption class="hidden">
                  상세정보
                </caption>
                <colgroup>
                  <col width="35%" />
                  <col width="%" />
                </colgroup>
                <tbody>
                  <tr>
                    <th>장르</th>
                    <td class="txtc"><?php echo $array["genre"]; ?></td>
                  </tr>
                  <tr>
                    <th>일시</th>
                    <td class="txtc"><?php echo $array["h_date"]?></td>
                  </tr>
                  <tr>
                    <th>장소</th>
                    <td class="txtc"><?php echo $array["place"]; ?></td>
                  </tr>
                  <tr>
                    <th>관람등급</th>
                    <td class="txtc"><?php echo $array["grade"]; ?> 이상</td>
                  </tr>
                  <tr>
                    <th>입장료</th>
                    <td class="txtc"><?php echo $array["price"]; ?>원</td>
                  </tr>
                  <tr>
                    <th>문의</th>
                    <td>031-123-1234</td>
                  </tr>
                </tbody>
              </table>
              <div class="event__button">
                <button class="viewBtn" type="button">자세히보기</button>
                <button class="credit" type="button">예매하기</button>
              </div>
            </div>
          </div>
          <?php
                $i--;
            }; 
            ?>
          <div class="board_foot">
            <p class="pager">
              <?php
              // pager : 블록 첫 페이지로(첫번째 블록에선 1페이지로 감)
              if($page == 1 ){
              ?>
              <?php } else if($now_block == 1){?>
              <a href="list.php?page=1"><img src="../images/btn_first.png"></a>
              <?php } else { ?>
              <a href="list.php?page=<?php echo $prev_page; ?>"><img src="../images/btn_first.png"></a>
              <?php }
              ?>
              <?php
              // pager : 이전 페이지
              if($page <= 1){
              ?>
              <!-- <a href="list.php?page=1">이전</a> -->
              <?php } else{ ?>
              <a href="list.php?page=<?php echo ($page - 1); ?>"><img src="../images/btn_prev.png" alt="이전"></a>
              <?php }; ?>

              <?php
              // pager : 페이지 번호 출력
              for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
              ?>
              <a id="page<?php echo $print_page; ?>"
                href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
              <?php }; ?>

              <?php
              // pager : 다음 페이지
              if($page >= $total_page){
              ?>
              <?php } else{ ?>
              <a href="list.php?page=<?php echo ($page + 1); ?>"><img src="../images/btn_next.png" alt="다음"></a>
              <?php }; ?>

              <?php
              // pager : 다음 블록 마지막페이지로
              if($now_block == $total_block || $total_page <= 1){
              ?>
              <?php } else{ ?>
              <a href="list.php?page=<?php echo $next_page; ?>"><img src="../images/btn_last.png" alt="다다음"></a>
              <?php };?>
            </p>
            <?php if($s_id == "admin"){ ?>
            <div class="wrt_btn">
              <button type="button" onclick="location.href='write.php'">글쓰기</button>
              <?php } else{ ?>

              <?php }; ?>
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