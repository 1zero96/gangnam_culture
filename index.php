<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="CSS/reset.css" />
  <link type="text/css" rel="stylesheet" href="CSS/normalize.css" />
  <link rel="stylesheet" href="CSS/slick.css" />
  <link rel="stylesheet" href="CSS/topmenu.css" />
  <link rel="stylesheet" href="CSS/header.css" />
  <link rel="stylesheet" href="CSS/main.css" />
  <link rel="stylesheet" href="CSS/slick-theme.css" />
  <script src="JS/jquery-3.6.1.min.js"></script>
  <script src="JS/slick.min.js"></script>
  <script defer src="JS/header.js"></script>
  <script defer src="JS/main.js"></script>
  <script type="text/javascript" src="js/jquery.carouFredSel-5.5.0-packed.js"></script>
  <title>강남문화재단</title>
</head>

<body>
  <header>
    <?php
        include 'inc/header.php'
      ?>
  </header>
  <main>
    <div id="slideBanner">
      <div class="contentIMG imgBG1">
        <img src="images/main_image01.jpg" alt="" width="1194px" height="350px" margin="auto" />
      </div>
      <div class="contentIMG imgBG2">
        <img src="images/main_image02.jpg" alt="" width="1194px" height="350px" />
      </div>
      <div class="contentIMG imgBG3">
        <img src="images/main_image03.jpg" alt="" width="1194px" height="350px" />
      </div>
      <div class="contentIMG imgBG4">
        <img src="images/main_image04.jpg" alt="" width="1194px" height="350px" />
      </div>
      <div class="contentIMG imgBG5">
        <img src="images/main_image05.jpg" alt="" width="1194px" height="350px" />
      </div>
    </div>
    <div id="qmenu_wrap">
      <div class="qmenu">
        <ul>
          <li class="size90">
            <a href="#">
              <img src="images/qmenu_01.png" width="60px" height="60px" alt="이달의 일정" /><br /><br />
              <span>이달의 일정</span>
            </a>
          </li>
          <li class="size90">
            <a href="#">
              <img src="images/qmenu_02.png" width="60px" height="60px" alt="아트큐브 강남" /><br /><br />
              <span>아트큐브 강남</span>
            </a>
          </li>
          <li class="size90">
            <a href="#">
              <img src="images/qmenu_03.png" width="60px" height="60px" alt="예매하기" />
              <br /><br />
              <span>공연예매</span>
            </a>
          </li>
          <li class="size90">
            <a href="#">
              <img src="images/qmenu_04.png" width="60px" height="60px" alt="구독신청" />
              <br /><br />
              <span>구독신청</span>
            </a>
          </li>
          <li class="size90">
            <a href="#">
              <img src="images/qmenu_05.png" width="60px" height="60px" alt="FAQ" />
              <br /><br />
              <span>FAQ</span>
            </a>
          </li>
          <li class="size91">
            <a href="#">
              <img src="images/qmenu_06.png" width="60px" height="60px" alt="재단소식" /><br /><br />
              <span>재단 소식</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <section id="main_content_wrap">
      <div class="main_content">
        <div class="tab_container">
          <h2 class="content_txt1">
            <span class="content_txt2">강남 문화재단</span>과 함께
          </h2>
          <ul class="tab_title">
            <li class="on">전체</li>
            <li>공연/전시</li>
            <li>축제/행사</li>
            <li>교육/체험</li>
          </ul>

          <div class="tab_cont">
            <div class="tabs">
              <div class="tab active">
                <div class="slider">
                  <div class="item item3-1">
                    <div class="content_info3-1">
                      <p>[n개의 서울] 2022 강남문화재단 ART CIRCLE</p>
                      <br />
                      <ul>
                        <li>
                          <span>모집대상 : '강남'을 사랑하고 함께 이야기 하고<br />
                            싶은 아마추어 예술가/창작가</span>
                        </li>
                        <li><span>모집기간 : 2022.08.01 - 22.09.12</span></li>
                        <li>
                          <span>신청방법 : 신청서 작성 후 이메일 발송</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn3-1">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content3_1.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item3-2">
                    <div class="content_info3-2">
                      <p>2022년 문화예술교육프로그램 <br />[나는 감상자다]</p>
                      <br />
                      <ul>
                        <li>
                          <span>강사명 : 정유진, 정승혜, 정지혜, 이언정,
                            천수림</span>
                        </li>
                        <li><span>강연일정 : 22.09.03 ~ 22.10.15</span></li>
                        <li>
                          <span>주최 : 문화체육관광부</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn3-2">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content3_2.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item3-3">
                    <div class="content_info3-3">
                      <p>러브유어 디포 강남파빌리온<br />[LOVE YOUR DEPOT]</p>
                      <br />
                      <ul>
                        <li>
                          <span>강의장소 : 강남구 수서동 520번지</span>
                        </li>
                        <li><span>강연 일정 : 22.07,01 ~ 22.09.30</span></li>
                        <li>
                          <span>주최 : 문화체육관광부, 서울시</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn3-3">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content3_3.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item3-4">
                    <div class="content_info3-4">
                      <p>[이야기가 있는 토크콘서트]<br />카라바조</p>
                      <br />
                      <ul>
                        <li>
                          <span>출연진 : 더겐발스 뮤직 소사이어티</span>
                        </li>
                        <li>
                          <span>강연 일정 : 22.08.24 ~ 22. 08. 26</span>
                        </li>
                        <li>
                          <span>수강료 : 무료(선착순 예매자에 한함)</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn3-4">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content3_4.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item3-5">
                    <div class="content_info3-5">
                      <p>[이야기가 있는 토크콘서트]<br />클로드 모네</p>
                      <br />
                      <ul>
                        <li>
                          <span>출연진 : 더겐발스 뮤직 소사이어티</span>
                        </li>
                        <li>
                          <span>강연 일정 : 22.08.24 ~ 22.08.25</span>
                        </li>
                        <li>
                          <span>수강료 : 무료(선착순 예매자에 한함)</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn3-5">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content3_5.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item2-1">
                    <div class="content_info2-1">
                      <p>우리동네 작음 음악회<br />[수서동 궁마을공원]</p>
                      <br />
                      <ul>
                        <li>
                          <span>출연진 : 이서연 퀸텟, 코르타도, 앙상블
                            조이너스</span>
                        </li>
                        <li><span>공연 일정 : 22.05.20 ~ 22.05.22</span></li>
                        <li>
                          <span>주최 : 강남문화재단, 앙상블리안, 나음아트홀</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn2-1">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content2_1.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item2-2">
                    <div class="content_info2-2">
                      <p>2022 강남페스티벌<br />[별마당 패션쇼]</p>
                      <br />
                      <ul>
                        <li>
                          <span>행사장소 : 스타필드 코엑스몰 별마당
                            도서관일대</span>
                        </li>
                        <li>
                          <span>행사 일정 : 22.10. 01.(토) 17:00~19:30</span>
                        </li>
                        <li>
                          <span>주최 : 강남구</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn2-2">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content2_2.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item2-3">
                    <div class="content_info2-3">
                      <p>2022 강남페스티벌<br />[가을의 향연]</p>
                      <br />
                      <ul>
                        <li>
                          <span>행사장소 : 코엑스 K-POP 광장</span>
                        </li>
                        <li>
                          <span>행사 일정 : 22.10. 01.(토) 17:00~19:30</span>
                        </li>
                        <li>
                          <span>주최 : 강남구, 강남문화재단, 한국무역협회</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn2-3">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content2_3.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item2-4">
                    <div class="content_info2-4">
                      <p>우리 국악 한마당<br />[라온가락뜰]</p>
                      <br />
                      <ul>
                        <li>
                          <span>행사 장소 : 도산공원</span>
                        </li>
                        <li>
                          <span>행사 기간 : 22.10.18.(화) 12:30PM</span>
                        </li>
                        <li>
                          <span>가격 : 무료 공연</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn2-4">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content2_4.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item1-1">
                    <div class="content_info1-1">
                      <p>2022 목요예술무대가<br />[온담]</p>
                      <br />
                      <ul>
                        <li>
                          <span>공연 장소 : 강남씨어터</span>
                        </li>
                        <li><span>공연 일정 : 22.04.01 ~ 22.12.31</span></li>
                        <li>
                          <span>예매 가격 : 무료 또는 유료(1~3만원)</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn1-1">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content1_1.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item1-2">
                    <div class="content_info1-2">
                      <p>직장인 쉼표 하나! 콘서트<br />[톡톡! 음악배달부]</p>
                      <br />
                      <ul>
                        <li>
                          <span>공연 장소 : 무역센터 아셈광장</span>
                        </li>
                        <li><span>공연 기간 : 22.10.20.(목) 12:00</span></li>
                        <li>
                          <span>예매 가격 : 무료관람 (전체관람가)</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn1-2">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content1_2.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item1-3">
                    <div class="content_info1-3">
                      <p>18회 한마음 콘서트<br />[톡톡! 음악배달부]</p>
                      <br />
                      <ul>
                        <li>
                          <span>공연 장소 : 자곡문화센터 4층 다목적강당</span>
                        </li>
                        <li>
                          <span>공연 장소 : 자곡문화센터 4층 다목적강당</span>
                        </li>
                        <li>
                          <span>예매 가격 : 무료관람 (전체관람가)</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn1-3">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content1_3.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item1-4">
                    <div class="content_info1-4">
                      <p>18회 키즈 예술 공연<br />[계단의 아이]</p>
                      <br />
                      <ul>
                        <li>
                          <span>공연 장소 : 강남씨어터(역삼 1문화센터 3층)</span>
                        </li>
                        <li>
                          <span>공연 기간 : 22.09.17.(토) 10시/14시</span>
                        </li>
                        <li>
                          <span>예매 가격 : 전석 5000원(6세이상)</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn1-4">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content1_4.jpg" alt="" width="280px" height="384px" />
                  </div>
                </div>
              </div>
              <div class="tab">
                <div class="slider">
                  <div class="item item1-1">
                    <div class="content_info1-1">
                      <p>2022 목요예술무대가<br />[온담]</p>
                      <br />
                      <ul>
                        <li>
                          <span>공연 장소 : 강남씨어터</span>
                        </li>
                        <li><span>공연 일정 : 22.04.01 ~ 22.12.31</span></li>
                        <li>
                          <span>예매 가격 : 무료 또는 유료(1~3만원)</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn1-1">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content1_1.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item1-2">
                    <div class="content_info1-2">
                      <p>직장인 쉼표 하나! 콘서트<br />[톡톡! 음악배달부]</p>
                      <br />
                      <ul>
                        <li>
                          <span>공연 장소 : 무역센터 아셈광장</span>
                        </li>
                        <li><span>공연 기간 : 22.10.20.(목) 12:00</span></li>
                        <li>
                          <span>예매 가격 : 무료관람 (전체관람가)</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn1-2">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content1_2.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item1-3">
                    <div class="content_info1-3">
                      <p>18회 한마음 콘서트<br />[톡톡! 음악배달부]</p>
                      <br />
                      <ul>
                        <li>
                          <span>공연 장소 : 자곡문화센터 4층 다목적강당</span>
                        </li>
                        <li>
                          <span>공연 장소 : 자곡문화센터 4층 다목적강당</span>
                        </li>
                        <li>
                          <span>예매 가격 : 무료관람 (전체관람가)</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn1-3">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content1_3.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item1-4">
                    <div class="content_info1-4">
                      <p>18회 키즈 예술 공연<br />[계단의 아이]</p>
                      <br />
                      <ul>
                        <li>
                          <span>공연 장소 : 강남씨어터(역삼 1문화센터 3층)</span>
                        </li>
                        <li>
                          <span>공연 기간 : 22.09.17.(토) 10시/14시</span>
                        </li>
                        <li>
                          <span>예매 가격 : 전석 5000원(6세이상)</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn1-4">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content1_4.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item">
                    <img src="images/content1_1.jpg" alt="" width="280px" height="384px" />
                  </div>
                </div>
              </div>
              <div class="tab">
                <div class="slider">
                  <div class="item item2-1">
                    <div class="content_info2-1">
                      <p>우리동네 작음 음악회<br />[수서동 궁마을공원]</p>
                      <br />
                      <ul>
                        <li>
                          <span>출연진 : 이서연 퀸텟, 코르타도, 앙상블
                            조이너스</span>
                        </li>
                        <li><span>공연 일정 : 22.05.20 ~ 22.05.22</span></li>
                        <li>
                          <span>주최 : 강남문화재단, 앙상블리안, 나음아트홀</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn2-1">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content2_1.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item2-2">
                    <div class="content_info2-2">
                      <p>2022 강남페스티벌<br />[별마당 패션쇼]</p>
                      <br />
                      <ul>
                        <li>
                          <span>행사장소 : 스타필드 코엑스몰 별마당
                            도서관일대</span>
                        </li>
                        <li>
                          <span>행사 일정 : 22.10. 01.(토) 17:00~19:30</span>
                        </li>
                        <li>
                          <span>주최 : 강남구</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn2-2">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content2_2.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item2-3">
                    <div class="content_info2-3">
                      <p>2022 강남페스티벌<br />[가을의 향연]</p>
                      <br />
                      <ul>
                        <li>
                          <span>행사장소 : 코엑스 K-POP 광장</span>
                        </li>
                        <li>
                          <span>행사 일정 : 22.10. 01.(토) 17:00~19:30</span>
                        </li>
                        <li>
                          <span>주최 : 강남구, 강남문화재단, 한국무역협회</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn2-3">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content2_3.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item2-4">
                    <div class="content_info2-4">
                      <p>우리 국악 한마당<br />[라온가락뜰]</p>
                      <br />
                      <ul>
                        <li>
                          <span>행사 장소 : 도산공원</span>
                        </li>
                        <li>
                          <span>행사 기간 : 22.10.18.(화) 12:30PM</span>
                        </li>
                        <li>
                          <span>가격 : 무료 공연</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn2-4">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content2_4.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item2-1">
                    <div class="content_info2-1">
                      <p>우리동네 작음 음악회<br />[수서동 궁마을공원]</p>
                      <br />
                      <ul>
                        <li>
                          <span>출연진 : 이서연 퀸텟, 코르타도, 앙상블
                            조이너스</span>
                        </li>
                        <li><span>공연 일정 : 22.05.20 ~ 22.05.22</span></li>
                        <li>
                          <span>주최 : 강남문화재단, 앙상블리안, 나음아트홀</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn2-1">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content2_1.jpg" alt="" width="280px" height="384px" />
                  </div>
                </div>
              </div>
              <div class="tab">
                <div class="slider">
                  <div class="item item3-1">
                    <div class="content_info3-1">
                      <p>[n개의 서울] 2022 강남문화재단 ART CIRCLE</p>
                      <br />
                      <ul>
                        <li>
                          <span>모집대상 : '강남'을 사랑하고 함께 이야기 하고<br />
                            싶은 아마추어 예술가/창작가</span>
                        </li>
                        <li><span>모집기간 : 2022.08.01 - 22.09.12</span></li>
                        <li>
                          <span>신청방법 : 신청서 작성 후 이메일 발송</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn3-1">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content3_1.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item3-2">
                    <div class="content_info3-2">
                      <p>2022년 문화예술교육프로그램 <br />[나는 감상자다]</p>
                      <br />
                      <ul>
                        <li>
                          <span>강사명 : 정유진, 정승혜, 정지혜, 이언정,
                            천수림</span>
                        </li>
                        <li><span>강연일정 : 22.09.03 ~ 22.10.15</span></li>
                        <li>
                          <span>주최 : 문화체육관광부</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn3-2">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content3_2.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item3-3">
                    <div class="content_info3-3">
                      <p>러브유어 디포 강남파빌리온<br />[LOVE YOUR DEPOT]</p>
                      <br />
                      <ul>
                        <li>
                          <span>강의장소 : 강남구 수서동 520번지</span>
                        </li>
                        <li><span>강연 일정 : 22.07,01 ~ 22.09.30</span></li>
                        <li>
                          <span>주최 : 문화체육관광부, 서울시</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn3-3">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content3_3.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item3-4">
                    <div class="content_info3-4">
                      <p>[이야기가 있는 토크콘서트]<br />카라바조</p>
                      <br />
                      <ul>
                        <li>
                          <span>출연진 : 더겐발스 뮤직 소사이어티</span>
                        </li>
                        <li>
                          <span>강연 일정 : 22.08.24 ~ 22. 08. 26</span>
                        </li>
                        <li>
                          <span>수강료 : 무료(선착순 예매자에 한함)</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn3-4">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content3_4.jpg" alt="" width="280px" height="384px" />
                  </div>
                  <div class="item item3-5">
                    <div class="content_info3-5">
                      <p>[이야기가 있는 토크콘서트]<br />클로드 모네</p>
                      <br />
                      <ul>
                        <li>
                          <span>출연진 : 더겐발스 뮤직 소사이어티</span>
                        </li>
                        <li>
                          <span>강연 일정 : 22.08.24 ~ 22.08.25</span>
                        </li>
                        <li>
                          <span>수강료 : 무료(선착순 예매자에 한함)</span>
                        </li>
                      </ul>
                      <br />
                      <div class="itembtn3-5">
                        <span> "자세히보기"</span>
                      </div>
                    </div>
                    <img src="images/content3_5.jpg" alt="" width="280px" height="384px" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="board_list_wrap">
      <div class="board_list">
        <h2 class="hidden">주요 게시판</h2>
        <div class="board_wrap">
          <div class="board_top">
            <artice class="board_1">
              <h3 class="board_title"><span>공지</span>사항</h3>
              <ul>
                <li class="board_style">
                  <a href="#">
                    2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board1_time">2022-09-07</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board1_time">2022-09-02</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board1_time">2022-06-29</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board1_time">2022-05-31</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board1_time">2022-04-29</span>
                </li>
              </ul>
              <div>
                <a class="board1_more" href="#"></a>
              </div>
            </artice>

            <article class="board_2">
              <h3 class="board_title"><span>직원</span>채용</h3>
              <ul>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board2_time">2022-09-07</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board2_time">2022-09-02</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board2_time">2022-06-29</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board2_time">2022-05-31</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board2_time">2022-04-29</span>
                </li>
              </ul>
              <div>
                <a class="board2_more" href="#"></a>
              </div>
            </article>
          </div>
          <div class="board_bottom">
            <article class="board_3">
              <h3 class="board_title"><span>언론</span>보도</h3>
              <ul>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board3_time">2022-09-07</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board3_time">2022-09-02</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board3_time">2022-06-29</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board3_time">2022-05-31</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board3_time">2022-04-29</span>
                </li>
              </ul>
              <div>
                <a class="board2_more" href="#"></a>
              </div>
            </article>

            <article class="board_4">
              <h3 class="board_title"><span>단일강사</span>모집공고</h3>
              <ul>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board4_time">2022-09-07</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board4_time">2022-09-02</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board4_time">2022-06-29</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board4_time">2022-05-31</span>
                </li>
                <li class="board_style">
                  <a href="#">2022년 강남예술단 찾아가는 공연 『톡톡! 음악배달부』 7월
                    선정결과 안내</a>
                  <span class="board4_time">2022-04-29</span>
                </li>
              </ul>
              <div>
                <a class="board4_more" href="#"></a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <div>
      <article id="main_facilly_wrap">
        <div class="slide">
          <ul>
            <li class="fa01">
              <a href="#">
                <div>
                  <p>강남<br />심포니 오케스트라 <br /></p>
                </div>
                <img src="images/place_1_1.jpg" alt="" />
              </a>
            </li>
            <li class="fa02">
              <a href="#">
                <div>
                  <p>강남 문화센터</p>
                </div>
                <img src="images/place_2_1.jpg" alt="" />
              </a>
            </li>
            <li class="fa03">
              <a href="#">
                <div>
                  <p>강남 힐링센터</p>
                </div>
                <img src="images/place_3_1.jpg" alt="" />
              </a>
            </li>
            <li class="fa04">
              <a href="#">
                <div>
                  <p>강남 문화도서관</p>
                </div>
                <img src="images/place_4_1.jpg" alt="" />
              </a>
            </li>
          </ul>
        </div>
      </article>
    </div>
    <section id="main_sns_wrap">
      <div class="sns_wrap">
        <h1 class="sns_title">강남문화재단 SNS</h1>
        <p class="sns_title2">
          <span class="txt_b">SNS</span>를 통해
          <span class="txt_colorb">강남문화재단</span>의
          <span class="txt_colorb">다양한 소식</span>을 만나보세요
        </p>
        <div class="sns_content">
          <article class="sns_facebook">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous"
              src="https://connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v15.0" nonce="9OTtKWaX"></script>
            <div class="fb-page" data-href="https://www.facebook.com/gfac.kr/" data-tabs="timeline" data-width="376"
              data-height="437" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
              data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/gfac.kr/" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/gfac.kr/">강남문화재단</a>
              </blockquote>
            </div>
          </article>
          <article class="sns_blog">
            <iframe src="https://m.blog.naver.com/i_gfac" style="border: 0px #ffffff none" name="myiFrame"
              scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="437px" width="376px"
              allowfullscreen></iframe>
          </article>
          <article class="sns_youtube">
            <iframe width="376" height="437" src="https://www.youtube.com/embed/pup3PQWp9as"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </article>
        </div>
      </div>
    </section>
  </main>
  <div id="quick" class="side_quick clearfix" tabindex="0">
    <p class="tit">
      <span>
        <img src="images/quick_bg.jpg" alt="" />
      </span>
    </p>
    <ul class="clear_fix">
      <li class="q01">
        <a href="#"><span>메뉴 1</span></a>
      </li>
      <li class="q02">
        <a href="#"><span>메뉴 2</span></a>
      </li>
      <li class="q03">
        <a href="#"><span>메뉴 3</span></a>
      </li>
      <li class="q04">
        <a href="#"><span>메뉴 4</span></a>
      </li>
    </ul>
  </div>
  <div id="top">
    <a href="#">
      <img src="images/top_arrow_white.png" alt="" />
      <span>TOP</span>
    </a>
  </div>
  <div class="footer_wrap">
    <footer class="footer">
      <h2 class="hidden">광고</h2>
      <div class="banner">
        <div class="banner_style">
          <div class="footer_banner_zone">
            <h3 class="blind">관련사이트</h3>

            <!-- banner -->
            <div class="flow_banner_box">
              <div id="banner" class="flow_bann_area">
                <ul>
                  <li>
                    <a href="#">
                      <img src="images/ad_01.jpg" alt="banner_01" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/ad_02.jpg" alt="banner_02" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/ad_03.png" alt="banner_03" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/ad_04.png" alt="banner_04" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/ad_05.png" alt="banner_05" width="174px" height="49px" />
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <img src="images/ad_06.png" alt="banner_06" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/ad_07.png" alt="banner_07" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/ad_08.jpg" alt="banner_08" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/ad_09.png" alt="banner_09" width="174px" height="49px" />
                    </a>
                  </li>
                </ul>
              </div>

              <!-- controll -->
              <div class="flow_ctrl_box">
                <a href="#" id="banner_left" class="back"><span class="blind">이전</span></a>
                <a href="#" id="banner_right" class="next"><span class="blind">다음</span></a>
                <!-- <a href="#" id="banner_play" class="play"
                    ><span class="">재생</span></a
                  >
                  <a href="#" id="banner_pause" class="stop"
                    ><span class="">멈춤</span></a
                  > -->
              </div>
              <!-- //controll -->
            </div>
            <!-- //banner -->
          </div>
          <!-- //footer_banner -->
        </div>
      </div>
      <div class="terms">
        <h2 class="hidden">사이트 이용안내</h2>
        <ul class="footer_menu">
          <li>
            <a class="ftm_1" href="">개인정보처리방침</a>
          </li>
          <li>
            <a class="ftm_2" href="#">이용약관</a>
          </li>
          <li>
            <a class="ftm_3" href="#">이메일 무단 수집거부</a>
          </li>
          <li>
            <a class="ftm_4" href="#">오시는길</a>
          </li>
          <li>
            <a class="ftm_5" href="#">사이트맵</a>
          </li>
          <form>
            <fieldset class="site_wrap">
              <select id="f_select" class="familySite select" title="유관기관 사이트 목록">
                <option value selected>유관기관사이트</option>
                <option value="https://www.gangnam.go.kr/">
                  강남구 홈페이지
                </option>
                <option value="https://health.gangnam.go.kr/">
                  강남구 보건소
                </option>
                <option value="https://www.gangnam.go.kr/office/welfare">
                  강남 복지재단
                </option>
                <option value="https://www.gangnam.go.kr/office/gjhope">
                  강남 지역자활센터
                </option>
                <option value="https://www.gangnam.go.kr/office/longlearno">
                  강남 평생학습
                </option>
                <option value="https://edu.ingang.go.kr/">
                  강남구청 인터넷수능방송
                </option>
                <option value="https://visitgangnam.net/">
                  강남 관광안내
                </option>
                <option value="https://medicaltour.gangnam.go.kr/2021">
                  강남 의료관광
                </option>
                <option value="https://www.gncouncil.go.kr/kr/">
                  강남 구의회
                </option>
              </select>
              <a href="#" class="ft_btn" onclick="move_family_site()" title="유관기관 사이트 새창으로 열림">이동</a>
            </fieldset>
            <script>
            function move_family_site() {
              if (document.getElementById("f_select").value != "")
                window.open(document.getElementById("f_select").value);
            }
            </script>
          </form>
        </ul>
      </div>

      <div class="footer_bottom">
        <div class="footer_logo">
          <img src="images/logo2.jpg" alt="" />
        </div>
        <address class="fb_txt1">
          06088 서울특별시 강남구 선를로 668, 5층 강남문화재단
        </address>
        <p>
          <span class="fb_txt2">
            [경영관리부] 경영지원팀 02-6712-0541~52 | 문화센터팀 1833-8009 |
            시설관리팀 02-6712-0575 |&nbsp;힐링센터팀 02-6712-0570 |
            독서진흥팀 1644-3227
          </span>
        </p>
        <p>
          <span class="fb_txt3">
            [문화사업부] 문화정책팀 02-6712-0511~5 | 기획홍보팀 02-6712-0521~4
            | 공연전시팀 02-6712-0531~5&nbsp;
          </span>
        </p>
        <p>
          <span class="fb_txt4">COPYRIGHT ⓒ 강남구청. ALL RIGHTS RESERVED.. /</span>
          <a class="fb_txt5" href="https://www.freepik.com/vectors/design">Design vector created by freepik -
            www.freepik.com</a>
        </p>
      </div>
    </footer>
  </div>
</body>

</html>