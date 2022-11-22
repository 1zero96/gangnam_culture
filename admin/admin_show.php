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
  <link rel="stylesheet" href="../CSS/admin_show.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script defer src="../JS/header.js"></script>

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
  // $sql = "select * from members where idx=$g_idx;";

  /** 쿼리 실행 */
  // $result = mysqli_query($dbcon, $sql);
  // $array = mysqli_fetch_array($result);
  // echo $array["u_id"];
  // exit;

  /** DB에서 데이터 가져오기(*select) */
  // mysqli_fetch_row(쿼리실행문) -- 필드순서
  // mysqli_fetch_array(쿼리실행문) -- 필드이름
  // mysqli_num_rows(쿼리실행문) -- 전체 행 개수

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
        <a href="#">
          <li class="tab_menu on">공연 등록관리</li>
        </a>
        <a href="#">
          <li class="tab_menu">회원 예매내역</li>
        </a>
      </ul>
      <div id="tab1" class="tab-content"></div>
      <div id="tab2" class="tab-content"></div>
      <div id="tab3" class="tab-content on">
        <div class="table_title">
          <img class="table_icon" src="../images/check_button.jpg" />
          <span class="table-top">공연등록</span>
        </div>
        <div class="form_wrap">
          <form name="insert_form" action="show_insert.php" method="post" onsubmit="return insert_form_check()"
            enctype="multipart/form-data">
            <fieldset>
              <table class="form__table">
                <caption class="hidden">
                  "공연 등록 관리 폼"
                </caption>
                <colgroup>
                  <col width="30%" />
                  <col width="70%" />
                </colgroup>
                <tbody>
                  <tr>
                    <th scope="row">
                      <label for="h_title">제목</label>
                    </th>
                    <td>
                      <input type="hidden" name="bid" value="<?php echo $array["bid"]; ?>">
                      <input type="text" name="h_title" id="h_title" title="제목" placeholder="제목을 입력해주세요." />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      장르선택
                    </th>
                    <td>
                      <label for="jazz">재즈</label>
                      <input type="radio" style="width: 25px;" name="show" id="jazz" value="재즈"></input>
                      <label for="rock">락/메탈</label>
                      <input type="radio" style="width: 25px;" name="show" id="rock" value="락/메탈"></input>
                      <label for="indie">인디</label>
                      <input type="radio" style="width: 25px;" name="show" id="indie" value="인디"></input>
                      <label for="classic">클래식</label>
                      <input type="radio" style="width: 25px;" name="show" id="classic" value="클래식"></input>
                      <label for="other">기타</label>
                      <input type="radio" style="width: 25px;" name="show" id="other" value="기타"></input>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <label for="h_date">날짜</label>
                    </th>
                    <td>
                      <input type="text" name="h_date" id="h_date" title="날짜" placeholder="ex) 2022.11.22" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <label for="h_time">시간</label>
                    </th>
                    <td>
                      <input type="text" name="h_time" id="h_time" title="공연시간" placeholder="ex)17:00" />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <label for="place">장소</label>
                    </th>
                    <td>
                      <input type="text" name="place" id="place" title="공연장소" placeholder="공연장소를 입력해주세요." />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <label for="person">인원</label>
                    </th>
                    <td>
                      <input type="text" id="person" name="person" title="인원" placeholder="인원 수를 입력하세요." />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <label for="price">가격</label>
                    </th>
                    <td>
                      <input type="text" id="price" name="price" title="가격" placeholder="가격을 입력해주세요." />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <label for="mobile">대표이미지</label>
                    </th>
                    <td>
                      <input type="file" id="up_file" name="up_file" title="이미지 업로드" />
                    </td>
                  </tr>
                </tbody>
              </table>
              <div id="btn_jc">
                <button type="submit" id="btn_join" class="btn_join">등록하기</button>
                <span class="btn_cancle">
                  <a href="#">취소</a>
                </span>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
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