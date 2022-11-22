<?php
// include "../inc/login_check.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from members;";

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기
$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 5;

// paging : 한 블럭 당 페이지 수
$page_num = 3;

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
  <link rel="stylesheet" href="../CSS/admin_info.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>
  <script>
  function edit_form_check() {
    var pwd = document.getElementById("pwd");
    var repwd = document.getElementById("repwd");


    if (pwd.value) {
      var pwd_len = pwd.value.length;
      if (pwd_len < 4 || pwd_len > 8) {
        pwd.focus();
        return false;
      };
    };

    if (pwd.value) {
      if (pwd.value != repwd.value) {
        repwd.focus();
        return false;
      };
    };
  };


  // 이메일 select 선택시 자동으로 폼에 입력되게 함
  function change_email() {
    let email_dns = document.querySelector("#email_dns");
    let email_sel = document.querySelector("#email_sel");
    var idx = email_sel.options.selectedIndex;
    var val = email_sel.options[idx].value;
    // 순서 array, 순번 index //
    email_dns.value = val;
  };

  function mem_del(g_no) {
    var rtn_val = confirm("정말 삭제하시겠습니까?");
    if (rtn_val == true) {
      location.href = "members/member_delete.php?g_idx=" + g_no;
      // location.href = "member_delete.php";
    };
  };
  </script>
</head>

<body>
  <header>
    <?php
      include '../inc/header.php'
    ?>
  </header>
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
  $sql = "select * from members where idx = '$s_idx' ";

  /** 쿼리 실행 */
  $result = mysqli_query($dbcon, $sql);

  /** DB에서 데이터 가져오기(*select) */
  // mysqli_fetch_row(쿼리실행문) -- 필드순서
  // mysqli_fetch_array(쿼리실행문) -- 필드이름
  // mysqli_num_rows(쿼리실행문) -- 전체 행 개수
  $array = mysqli_fetch_array($result);
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
        <a href="#">
          <li class="tab_menu on">회원정보관리</li>
        </a>
        <a href="admin_notice.php">
          <li class="tab_menu">공지사항 관리</li>
        </a>
        <a href="admin_show.php">
          <li class="tab_menu">공연 등록관리</li>
        </a>
        <a href="#">
          <li class="tab_menu">회원 예매내역</li>
        </a>
      </ul>
      <div id="tab1" class="tab-content on">
        <div class="table_title">
          <img class="table_icon" src="../images/check_button.jpg" />
          <span class="table-top">회원 정보</span>
        </div>
        <!-- 콘텐트 -->
        <p>전체 회원수 <?php echo $total; ?>명</p>
        <table class="mem_list_set">
          <tr class="mem_list_title">
            <th class="no">번호</th>
            <th class="u_name">이름</th>
            <th class="u_id">아이디</th>
            <th class="gender">성별</th>
            <th class="birth">생년월일</th>
            <th class="mobile">전화번호</th>
            <th class="email">이메일</th>
            <th class="address">주소</th>
            <!-- <th class="apply_mail">메일동의</th>
            <th class="apply_sns">문자동의</th> -->
            <th class="reg_date">가입일</th>
            <td class="modify">관리</td>
          </tr>
          <?php
            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
            $start = ($page - 1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개
            $sql = "select * from members limit $start, $list_num;";
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
            <td><?php echo $i; ?></td>
            <td><?php echo $array["u_name"]; ?></td>
            <td><?php echo $array["u_id"]; ?></td>
            <?php
            // $mobile = "00011112222";
            /* $mobile = strval($array["mobile"]);
            $mobile1 = substr($mobile, 0, 3);
            $mobile2 = substr($mobile, 3, -4);
            $mobile3 = substr($mobile, -4);
            $mobile = $mobile1."-".$mobile2."-".$mobile3;
            echo "<td>".$mobile."</td>";  */
            ?>
            <td><?php echo $array["gender"]; ?></td>
            <td><?php echo $array["birth"]; ?></td>
            <td><?php echo $array["mobile"]; ?></td>
            <td><?php echo $array["email"]; ?></td>
            <?php
                $address = $array["ps_code"]." ".$array["addr_b"]." ".$array["addr_d"];
            ?>
            <td><?php echo $address; ?></td>
            <?php
                /* $reg_date = substr($array["reg_date"], 0, 10);
                echo "
                <td>$reg_date; </td>
                "; */
            ?>
            <!-- <td><?php echo $array["apply_mail"]; ?></td>
            <td><?php echo $array["apply_sns"]; ?></td> -->
            <?php $reg_date = substr($array["reg_date"], 0 , 10); ?>
            <td><?php echo $reg_date; ?></td>
            <td>
              <a href="members/member_info.php?g_idx=<?php echo $array["idx"]; ?>">[수정]</a>
              <button type="button" onclick="mem_del(<?php echo $array['idx']; ?>)">[삭제]</button>
            </td>
          </tr>
          <?php
                $i++;
            }; 
        ?>
        </table>
        <p class="pager">
          <?php
    // pager : 이전 페이지
    if($page <= 1){
    ?>
          <a href="list.php?page=1">이전</a>
          <?php } else{ ?>
          <a href="list.php?page=<?php echo ($page - 1); ?>">이전</a>
          <?php }; ?>

          <?php
    // pager : 페이지 번호 출력
    for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
    ?>
          <a href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
          <?php }; ?>

          <?php
    // pager : 다음 페이지
    if($page >= $total_page){
    ?>
          <a href="list.php?page=<?php echo $total_page; ?>">다음</a>
          <?php } else{ ?>
          <a href="list.php?page=<?php echo ($page + 1); ?>">다음</a>
          <?php }; ?>
        </p>
      </div>
      <div id="tab2" class="tab-content">
      </div>
      <div id="tab3" class="tab-content"></div>
      <div id="tab4" class="tab-content"></div>
    </div>
  </main>
  <footer>
    <?php
      include '../inc/footer.php'
    ?>
  </footer>
</body>

</html>