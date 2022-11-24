<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>강남문화재단 마이페이지</title>
  <link rel="stylesheet" href="../CSS/reset.css" />
  <link rel="stylesheet" href="../CSS/topmenu.css" />
  <link rel="stylesheet" href="../CSS/header.css" />
  <link rel="stylesheet" href="../CSS/member_ticket.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>
</head>

<body>
  <header>
    <?php
      include '../inc/header.php'
    ?>
  </header>
  <?php
    include "../inc/login_check.php"; // 로그인 사용자만 접근
    include "../inc/dbcon.php"; // DB 연결

      /** 쿼리 작성 */
      $sql = "select * from ticket where u_id = '$s_id'";
  
      /** 쿼리 실행 */
      $result = mysqli_query($dbcon, $sql);
      // $t_result = mysqli_query($dbcon, $t_sql);
      // $row = mysqli_fetch_row($t_result);
  
      /** 전체 데이터 가져오기 */
      $total = mysqli_num_rows($result);
      // $total_count = $row[0];
  
      /** paging : 한 페이지 당 보여질 목록 수 */
      $list_num = 10;
  
      /** 한 블럭 당 페이지 수 */
      $page_num = 5;
  
      /** 현재 페이지의 번호 */
      $page = isset($_GET["page"])? $_GET["page"] : 1;
  
      /** 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림 */
      $total_page = ceil($total / $list_num);
  
      /** 글번호 */
      // $print_num = $total_count - $list_num*($page-1);
  
  
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


      /** 쿼리 작성 */

      /** DB에서 데이터 가져오기(*select) */
      // mysqli_fetch_row(쿼리실행문) -- 필드순서
      // mysqli_fetch_array(쿼리실행문) -- 필드이름
      // mysqli_num_rows(쿼리실행문) -- 전체 행 개수
      $array = mysqli_fetch_array($result);
      ?>

  <?php echo '<script>
          window.onload = function(){
            let page_num = document.getElementById("page' .$page .'");
            page_num.style.color= "#006ab6";
            page_num.style.fontWeight = "bold";
            page_num.style.borderBottom = "1px solid #006ab6";
          }
          </script>'; ?>
  <div class="menu_wrap">
    <div class="menu_bar">
      <p class="mbr_txt">홈 > 부가메뉴 > 마이페이지</p>
    </div>
  </div>
  <main id="main">
    <div class="menu__title">
      <h2>마이페이지</h2>
    </div>
    <div class="container">
      <ul id="tabs" class="tabs">
        <a href="member_info.php">
          <li class="tab_menu">회원정보 수정</li>
        </a>
        <a href="member_post.php">
          <li class="tab_menu">내 게시글</li>
        </a>
        <a href="#">
          <li class="tab_menu on">예매내역</li>
        </a>
        <a href="member_delete.php">
          <li class="tab_menu">회원탈퇴</li>
        </a>
      </ul>
      <div id="tab1" class="tab-content">
      </div>
      <div id="tab2" class="tab-content"></div>
      <div id="tab3" class="tab-content on">
        <div class="table_title">
          <img class="table_icon" src="../images/check_button.jpg" />
          <span class="table-top">예매 내역</span>
        </div>
        <table class="board_List">
          <caption class="hidden">
            게시판 리스트
          </caption>
          <colgroup>
            <col width="8%">
            <col width="8%">
            <col width="38%">
            <col width="17%">
            <col width="17%">
            <col width="17%">
          </colgroup>
          <thead>
            <tr>
              <th class="row1">예약번호</th>
              <th class="row2">공연번호</th>
              <th class="row3">공연명</th>
              <th class="row4">결제일</th>
              <th class="row5">공연일</th>
              <th class="row6">환불 / 취소</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
            $start = ($page - 1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개

            $sql2 = "select * from ticket where u_id = '$s_id'";
            $sql2 .= "order by tid desc limit $start, $list_num;";

            // DB에 데이터 전송
            $result2 = mysqli_query($dbcon, $sql2);

            // DB에서 데이터 가져오기
            // pager : 글번호(역순)
            // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
            $i = $total - (($page - 1) * $list_num);
            while($array = mysqli_fetch_array($result2)){
              $tid = $array["tid"]
            ?>
            <tr>
              <td class="txtc tid"
                onclick="window.open('ticket_info.php?tid=<?php echo $tid?>', 'window_name', 'width=600px, height=375px, location=no, status=no, scrollbars=no')">
                <span class="colb">
                  <?php echo $array["tid"]; ?>
                </span>
              </td>
              <td class="txtc"><?php echo $array["bid"]; ?></td>
              <td id="board_t" class="txtc">
                <?php echo $array["h_title"]; ?>
              </td>
              <td class="txtc"><?php echo $array["t_date"]; ?></td>
              <?php $h_date = substr($array["h_date"], 0, 10); ?>
              <td class="txtc"><?php echo $h_date; ?></td>
              <td class="txtc">
                <?php if($array["status"] == 0){?>
                <button class="refund_btn" onclick="refund()">환불</button>
                <input type="hidden" id="refund" value="<?php echo $array["tid"]?>">
                <?php } else if($array["status"] == 1) { ?>
                <button class="ron refund_btn" onclick="alert('환불 진행중입니다 잠시만 기다려주세요.')">진행중</button>
                <?php } else if($array["status"] == 2) {?>
                <button class="roff refund_btn" onclick="">완료</button>
                <?php } else { ?>
                <button class="rfa refund_btn" onclick="">불가</button>
                <?php } ?>
              </td>
              <script>
              function refund() {
                let ok = confirm("환불 신청 하시겠습니까?");
                if (ok == true) {
                  var data = {
                    tid: $("#refund").val()
                  };
                  $.ajax({
                    async: false,
                    type: 'post',
                    url: 'ticket_refund.php',
                    data: data,
                    dataType: 'html',
                    error: function() {},
                    success: function(return_data) {
                      if (return_data == "no") {
                        alert('관리자에게 문의해주세요');
                        return;
                      } else {
                        alert("환불 신청 되었습니다!");
                        window.location.reload();
                      }
                    }
                  });
                }
              }
              </script>
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
            <a href="member_post.php?page=1"><img src="../images/btn_first.png"></a>
            <?php } else { ?>
            <a href="member_post.php?page=<?php echo $prev_page; ?>"><img src="../images/btn_first.png"></a>
            <?php }
              ?>
            <?php
              // pager : 이전 페이지
              if($page <= 1){
              ?>
            <!-- <a href="list.php?page=1">이전</a> -->
            <?php } else{ ?>
            <a href="member_post.php?page=<?php echo ($page - 1); ?>"><img src="../images/btn_prev.png" alt="이전"></a>
            <?php }; ?>

            <?php
              // pager : 페이지 번호 출력
              for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
              ?>
            <a id="page<?php echo $print_page; ?>"
              href="member_post.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
            <?php }; ?>

            <?php
              // pager : 다음 페이지
              if($page >= $total_page){
              ?>
            <?php } else{ ?>
            <a href="member_post.php?page=<?php echo ($page + 1); ?>"><img src="../images/btn_next.png" alt="다음"></a>
            <?php }; ?>

            <?php
              // pager : 다음 블록 마지막페이지로
              if($now_block == $total_block || $total_page <= 1){
              ?>
            <?php } else{ ?>
            <a href="member_post.php?page=<?php echo $next_page; ?>"><img src="../images/btn_last.png" alt="다다음"></a>
            <?php };?>
          </p>
        </div>
      </div>
      <div id="tab4" class="tab-content">
      </div>
    </div>
    </div>
  </main>
  <footer style="margin-top:280px">
    <?php
      include '../inc/footer.php'
    ?>
  </footer>
</body>

</html>