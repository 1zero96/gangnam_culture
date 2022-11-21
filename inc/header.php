<?php
  include "session.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>header.php</title>
</head>

<body>
  <header id="header">
    <div id="topMenu">
      <h2 class="hidden">사용자 메뉴</h2>
      <ul class="topMenu__list">
        <li class="topMenu__sns">
          <a href="#"><img src="http://localhost/gangnam_culture/images/top_menu_1.jpg" alt="SNS" /></a>
          <ul class="topMenu__snsIcon">
            <li>
              <a href="#"><img src="http://localhost/gangnam_culture/images/kakao.jpg" alt="카카오톡" /></a>
            </li>
            <li>
              <a href="#"><img src="http://localhost/gangnam_culture/images/instagram.jpg" alt="인스타그램" /></a>
            </li>
            <li>
              <a href="#"><img src="http://localhost/gangnam_culture/images/blog.jpg" alt="네이버 블로그" /></a>
            </li>
            <li>
              <a href="#"><img src="http://localhost/gangnam_culture/images/facebook.jpg" alt="페이스북" /></a>
            </li>
            <li>
              <a href="#"><img src="http://localhost/gangnam_culture/images/youtube.jpg" alt="유튜브" /></a>
            </li>
          </ul>
        </li>
        <?php if(!$s_idx){ ?>
        <!-- 로그인 전 -->
        <li class="topMenu__txt2">
          <a href="http://localhost/gangnam_culture/members/join.php"><span>회원가입</span></a>
        </li>
        <li class="topMenu__txt1">
          <a href="http://localhost/gangnam_culture/login/login.php"><span>로그인</span></a>
        </li>
        <?php } else if($s_id == "admin") { ?>
        <!-- 로그인 후 -->
        <li class="topMenu__txt5">
          <a href="http://localhost/gangnam_culture/members/member_info.php"><span class="admin_page">마이페이지</span></a>
        </li>
        <li class="topMenu__txt4">
          <a href="http://localhost/gangnam_culture/admin/admin_info.php"><span class="admin_page">관리자 페이지</span></a>
        </li>
        <li class="topMenu__txt3">
          <span class="prt_name"><?php echo $s_name; ?></span>님
          <a href="http://localhost/gangnam_culture/login/logout.php">로그아웃</a>
        </li>
        <?php } else { ?>
        <!-- 로그인 후 -->
        <li class="topMenu__txt4">
          <a href="http://localhost/gangnam_culture/members/member_info.php"><span>마이페이지</span></a>
        </li>
        <li class="topMenu__txt3">
          <span class="prt_name"><?php echo $s_name; ?></span>님
          <a href="http://localhost/gangnam_culture/login/logout.php">로그아웃</a>
        </li>
        <?php }; ?>
      </ul>
    </div>

    <div id="logo">
      <h1 class="logo__txt" title="강남문화재단">
        <a href="http://localhost/gangnam_culture/index.php"><img src="http://localhost/gangnam_culture/images/logo.jpg"
            alt="강남문화재단" /></a>
      </h1>
    </div>
    <nav id="gnb">
      <h2>주요 메뉴</h2>
      <ul class="gnb__menu" style="line-height: 200%">
        <li class="gnb__title">
          <a href="#">축제·행사</a>
          <ul class="gnb__content">
            <li><a href="#">강남페스티벌</a></li>
            <li><a href="#">국악 어울림 축제</a></li>
            <li><a href="#">양재천하모니</a></li>
            <li><a href="#">우리국악 한마당</a></li>
            <li><a href="#">기타 축제</a></li>
            <li><a href="#"></a></li>
          </ul>
        </li>
        <li>
          <a href="#">공연·전시·강좌</a>
          <ul class="gnb__content">
            <li><a href="#">이달의 일정</a></li>
            <li><a href="#">예매안내</a></li>
            <li><a href="#">공연 안내 및 예매</a></li>
            <li><a href="#">전시 안내 및 예매</a></li>
            <li><a href="#">축제 및 행사 안내</a></li>
          </ul>
        </li>
        <li>
          <a href="#">문화공간</a>
          <ul class="gnb__content">
            <li><a href="#">강남 문화센터</a></li>
            <li><a href="#">강남 힐링센터</a></li>
            <li><a href="#">강남 문화도서관</a></li>
          </ul>
        </li>
        <li>
          <a href="#">아트큐브강남</a>
          <ul class="gnb__content">
            <li><a href="#">아트큐브강남 소개</a></li>
            <li><a href="#">문화교육</a></li>
            <li><a href="#">문화공간</a></li>
          </ul>
        </li>
        <li>
          <a href="#">재단소식</a>
          <ul class="gnb__content">
            <li><a href="#">언론보도</a></li>
            <li><a href="#">갤러리</a></li>
            <li><a href="#">자료실</a></li>
            <li><a href="#">동영상</a></li>
            <li><a href="#">문화캘린더</a></li>
            <li><a href="#">소식지 구독신청</a></li>
          </ul>
        </li>
        <li>
          <a href="#">열린광장</a>
          <ul class="gnb__content">
            <li><a href="http://localhost/gangnam_culture/notice/list.php">공지사항</a></li>
            <li><a href="http://localhost/gangnam_culture/notice2/list.php">타기관 공지사항</a></li>
            <li><a href="http://localhost/gangnam_culture/employ/list.php">단임강사 모집공고</a></li>
            <li><a href="http://localhost/gangnam_culture/free/list.php">자유 게시판</a></li>
            <li><a href="#">FAQ</a></li>
            <!-- <li><a href="#">하위메뉴</a></li> -->
          </ul>
        </li>
        <li>
          <a href="#">재단소개</a>
          <ul class="gnb__content">
            <li><a href="#">이사장 인사말</a></li>
            <li><a href="#">연혁 및 CI소개</a></li>
            <li><a href="#">조직도</a></li>
            <li><a href="#">행정정보/경영공시</a></li>
            <li><a href="#">오시는길</a></li>
            <!-- <li><a href="#">하위메뉴</a></li> -->
          </ul>
        </li>
      </ul>
    </nav>
    <div class="nav__bg"></div>
  </header>
</body>

</html>