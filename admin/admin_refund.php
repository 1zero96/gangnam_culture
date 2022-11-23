<?php
// include "../inc/login_check.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from ticket where status > '0';";

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기
$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 10;

// paging : 한 블럭 당 페이지 수
$page_num = 5;

// paging : 현재 페이지
// $page = $_GET["page"];
// $page = isset($page)?

$page = isset($_GET["page"])? 
$_GET["page"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : ".$total_page;
// exit;

// paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);

// paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
$now_block = ceil($page / $page_num);

// paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};

// paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
// 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};

    /** 이전 블럭 이동시 첫 페이지 */
    $prev_page=($now_block*$page_num)-$page_num;
    
    /** 다음 블럭 이동시 첫 페이지 */
    $next_page=($now_block*$page_num)+1;
?>
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
  <link rel="stylesheet" href="../CSS/admin_refund.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>

<body>
  <header>
    <?php
      include '../inc/header.php'
    ?>
  </header>
  <?php echo '<script>
          window.onload = function(){
            let page_num = document.getElementById("page' .$page .'");
            page_num.style.color= "#006ab6";
            page_num.style.fontWeight = "bold";
            page_num.style.borderBottom = "1px solid #006ab6";
          }
          </script>'; ?>
  <?php
  include "../inc/login_check.php"; // 로그인 사용자만 접근
  if($s_id != "admin"){
    echo "
        <script type=\"text/javascript\">
            alert(\"관리자 로그인이 필요합니다.\");
            location.href = \"http://localhost/gangnam_culture/admin/login/login.php\";
        </script>
    ";
    exit;
};
  include "../inc/dbcon.php"; // DB 연결

  /** 쿼리 작성 */
  $sql = "select * from ticket where status > '0'";

  /** 쿼리 실행 */
  $result = mysqli_query($dbcon, $sql);

  /** DB에서 데이터 가져오기(*select) */
  // mysqli_fetch_row(쿼리실행문) -- 필드순서
  // mysqli_fetch_array(쿼리실행문) -- 필드이름
  // mysqli_num_rows(쿼리실행문) -- 전체 행 개수
  $array = mysqli_fetch_array($result);
  $row = mysqli_fetch_row($result);
  $total2 = mysqli_num_rows($result);

  ?>
  <div class="menu_wrap">
    <dlv class="menu_bar">
      <p class="mbr_txt">홈 > 부가메뉴 > 관리자페이지</p>
    </dlv>
  </div>
  <main id="main">
    <div class="menu__title">
      <h2>관리자페이지</h2>
    </div>
    <div class="container">
      <ul id="tabs" class="tabs">
        <a href="admin_info.php">
          <li class="tab_menu">회원정보관리</li>
        </a>
        <a href="admin_notice.php">
          <li class="tab_menu">공지사항 관리</li>
        </a>
        <a href="admin_show.php">
          <li class="tab_menu">공연 등록관리</li>
        </a>
        <a href="#">
          <li class="tab_menu on">환불관리</li>
        </a>
      </ul>
      <div id="tab1" class="tab-content"></div>
      <div id="tab2" class="tab-content"></div>
      <div id="tab3" class="tab-content"></div>
      <div id="tab4" class="tab-content on">
        <div class="table_title">
          <img class="table_icon" src="../images/check_button.jpg" />
          <span class="table-top">환불관리</span>
        </div>
        <!-- 콘텐트 -->
        <table class="mem_list_set">
          <tr class="mem_list_title">
            <th class="tid">예약번호</th>
            <th class="h_title">공연명</th>
            <th class="u_name">예매자</th>
            <th class="t_date">예매일</th>
            <th class="r_date">환불요청일</th>
            <th class="modify">환불상태</th>
          </tr>
          <?php
            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
            $start = ($page - 1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개
            $sql = "select * from ticket where status > '0' order by r_date desc limit $start, $list_num;";
            // echo $sql;
            /* exit; */

            // DB에 데이터 전송
            $result = mysqli_query($dbcon, $sql);

            // DB에서 데이터 가져오기
            // pager : 글번호
            $i = $start + 1;
            while($array = mysqli_fetch_array($result)){
        ?>
          <tr class="mem_list_content">
            <td><?php echo $array["tid"]; ?></td>
            <td><?php echo $array["h_title"]; ?></td>
            <td><?php echo $array["u_name"]; ?></td>
            <td><?php echo $array["t_date"]; ?></td>
            <td><?php echo $array["r_date"]; ?></td>
            <td>
              <?php if($array["status"] == 1){ ?>
              <button type="button" onclick="refund()"><span class="refund_up">[대기중]</span></button>
              <?php } else if($array["status"] == 2){ ?>
              <button type="button" onclick=""><span class="refund_down">[환불완료]</span></button>
              <?php } ?>
            </td>
            <script>
            function refund() {
              let ok = confirm("환불 신청 하시겠습니까?");
              if (ok == true) {
                var data = {
                  tid: <?php echo $array["tid"] ?>,
                  bid: <?php echo $array["bid"] ?>,
                  tcount: <?php echo $array["tcount"]?>
                };
                $.ajax({
                  async: false,
                  type: 'post',
                  url: 'refund_check.php',
                  data: data,
                  dataType: 'html',
                  error: function() {},
                  success: function(return_data) {
                    if (return_data == "no") {
                      alert('관리자에게 문의해주세요');
                      return;
                    } else {
                      alert('신청 되었습니다!');
                      window.location.reload();
                    }
                  }
                });
              }
            }
            </script>
          </tr>
          <?php
                $i++;
            }; 
        ?>
        </table>
        <div class="board_foot">
          <p class="pager">
            <?php
              // pager : 블록 첫 페이지로(첫번째 블록에선 1페이지로 감)
              if($page == 1 ){
              ?>
            <?php } else if($now_block == 1){?>
            <a href="admin_notice.php?page=1"><img src="../images/btn_first.png"></a>
            <?php } else { ?>
            <a href="admin_notice.php?page=<?php echo $prev_page; ?>"><img src="../images/btn_first.png"></a>
            <?php }
              ?>
            <?php
              // pager : 이전 페이지
              if($page <= 1){
              ?>
            <!-- <a href="admin_notice.php?page=1">이전</a> -->
            <?php } else{ ?>
            <a href="admin_notice.php?page=<?php echo ($page - 1); ?>"><img src="../images/btn_prev.png" alt="이전"></a>
            <?php }; ?>

            <?php
              // pager : 페이지 번호 출력
              for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
              ?>
            <a id="page<?php echo $print_page; ?>"
              href="admin_notice.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
            <?php }; ?>

            <?php
              // pager : 다음 페이지
              if($page >= $total_page){
              ?>
            <?php } else{ ?>
            <a href="admin_notice.php?page=<?php echo ($page + 1); ?>"><img src="../images/btn_next.png" alt="다음"></a>
            <?php }; ?>

            <?php
              // pager : 다음 블록 마지막페이지로
              if($now_block == $total_block || $total_page <= 1){
              ?>
            <?php } else{ ?>
            <a href="admin_notice.php?page=<?php echo $next_page; ?>"><img src="../images/btn_last.png" alt="다다음"></a>
            <?php };?>
          </p>

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