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
    $sql = "select * from notice2;";
    $t_sql = "select count(*) from notice2;";

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


    <script>
    function sel_view() {
      var view = document.getElementById('viewCnt');
      var bid = view.options.selectedIndex;
      if (bid == 0) {
        location.href =
          "http://localhost/gangnam_culture/notice2/search_result.php?category=<?php $category?>&n_list=n_title&search=&view=10"
        alert('변경되었습니다.')
      } else if (bid == 1) {
        location.href =
          "http://localhost/gangnam_culture/notice2/search_result.php?category=<?php $category?>&n_list=n_title&search=&view=15"
        alert('변경되었습니다.');
      } else if (bid == 2) {
        location.href =
          "http://localhost/gangnam_culture/notice2/search_result.php?category=<?php $category?>&n_list=n_title&search=&view=20"
        alert('변경되었습니다.');
      }
    }
    </script>

    <?php echo '<script>
          window.onload = function(){
            let page_num = document.getElementById("page' .$page .'");
            page_num.style.color= "#006ab6";
            page_num.style.fontWeight = "bold";
            page_num.style.borderBottom = "1px solid #006ab6";
          }
          </script>'; ?>

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
        <div class="notice2_board_List">
          <div class="bd_top">
            <p class="total">Total <span class="color-main"><?php echo $total; ?></span>건 <?php echo $page;?> 페이지</p>

            <div class="board_control">
              <select name="viewCnt" id="viewCnt" class="select" title="한번에 보여지는 갯수 선택">
                <option value="15">10개씩</option>
                <option value="20">15개씩</option>
                <option value="25">20개씩</option>
              </select>
              <input type="button" class="viewCntBtn" value="보기" onclick="sel_view()" />
            </div>
          </div>
          <table class="board_List">
            <caption class="hidden">
              게시판 리스트
            </caption>
            <thead>
              <tr>
                <th class="row1">번호</th>
                <th class="row2">
                  <select name="" id="category">
                    <option value="division">구분</option>
                    <option value="show">공연</option>
                    <option value="exhibition">전시</option>
                    <option value="education">교육</option>
                    <option value="event">행사</option>
                    <option value="etc">기타</option>
                  </select>
                  <button type="button" class="cate_btn">선택</button>
                </th>
                <th class="row3">제목</th>
                <th class="row4">작성자</th>
                <th class="row5" style="width: 119px;">등록일</th>
                <th class="row6">조회</th>
              </tr>
            </thead>
            <script>
            $(function() {
              $(".cate_btn").on("click", function() {
                if ($("#category").val() == "show") {
                  location.href = "search_result.php?page=1&category=show&n_list=&search=&view=";
                } else if ($("#category").val() == "exhibition") {
                  location.href = "search_result.php?page=1&category=exhibition&n_list=&search=&view=";
                } else if ($("#category").val() == "education") {
                  location.href = "search_result.php?page=1&category=education&n_list=&search=&view=";
                } else if ($("#category").val() == "event") {
                  location.href = "search_result.php?page=1&category=event&n_list=&search=&view=";
                } else if ($("#category").val() == "etc") {
                  location.href = "search_result.php?page=1&category=etc&n_list=&search=&view=";
                } else {
                  location.href = "search_result.php?page=1&category=&n_list=&search=&view=";
                }
              })
            });
            </script>
            <tbody>
              <?php
            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
            $start = ($page - 1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개
            $sql = "select * from notice2 order by status desc, bid desc limit $start, $list_num;";

            // DB에 데이터 전송
            $result = mysqli_query($dbcon, $sql);

            // DB에서 데이터 가져오기
            // pager : 글번호(역순)
            // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
            $i = $total - (($page - 1) * $list_num);
            while($array = mysqli_fetch_array($result)){
              $top = "<img src='../images/br_top.png' alt='top' title='top'";;
              $category = $array["category"];
              if($category == "show"){
                $category = "공연";
              }
              if($category == "exhibition"){
                $category = "전시";
              }
              if($category == "education"){
                $category = "교육";
              }
              if($category == "event"){
                $category = "행사";
              }
              if($category == "etc"){
                $category = "기타";
              }else{
                $category = "";
              }
            ?>
              <tr>
                <td class="txtc">
                  <?php 
                  if($array["status"] == 0){
                    echo $i;
                  } else {
                    echo $top;
                  }
                  ?>
                </td>
                <td class="txtc">
                  <?php 
                if($array["status"] == 0){
                  echo $category;
                }else{
                  echo "<span class='notice'>공지</span>";
                }?>
                </td>
                <td id="board_t" class="txtc">
                  <a href="view.php?bid=<?php echo $array["bid"]?>&no=<?= $i ?>">
                    <?php echo $array["n_title"]; ?>
                  </a>
                </td>
                <td class="txtc"><?php echo $array["writer"]; ?></td>
                <?php $w_date = substr($array["w_date"], 0, 10); ?>
                <td class="txtc"><?php echo $w_date; ?></td>
                <td class="txtc"><?php echo $array["hit"]; ?></td>
              </tr>
              <?php
                $i--;
            }; 
            ?>
            </tbody>
          </table>
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
    <form action="search_result.php?" method="get">
      <div class="search_bar">
        <input type="hidden" name="category" />
        <select name="n_list" class="search_select">
          <option value="n_title">제목</option>
          <option value="writer">글쓴이</option>
          <option value="n_content">내용</option>
        </select>
        <input type="text" name="search" id="search_txt" placeholder="검색어를 입력하세요." />
        <input type="hidden" name="view" />
        <button type="submit" class="btn_search">
          <img src="../images/search_icon.jpg" alt="" />
        </button>
      </div>
    </form>
  </main>
  <footer>
    <?php
      include '../inc/footer.php'
    ?>
  </footer>
</body>

</html>