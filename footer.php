<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>footer.php</title>
  <style></style>
</head>

<body>
  <div class="footer_wrap">
    <footer class="footer">
      <h2 class="hidden">광고</h2>
      <!-- <div class="banner">
        <div class="banner_style">
          <div class="footer_banner_zone">
            <h3 class="hidden">관련사이트</h3>
            <div class="flow_banner_box">
              <div id="banner" class="flow_bann_area">
                <ul>
                  <li>
                    <a href="#">
                      <img src="../images/ad_01.jpg" alt="banner_01" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="../images/ad_02.jpg" alt="banner_02" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="../images/ad_03.png" alt="banner_03" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="../images/ad_04.png" alt="banner_04" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="../images/ad_05.png" alt="banner_05" width="174px" height="49px" />
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <img src="../images/ad_06.png" alt="banner_06" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="../images/ad_07.png" alt="banner_07" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="../images/ad_08.jpg" alt="banner_08" width="174px" height="49px" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="../images/ad_09.png" alt="banner_09" width="174px" height="49px" />
                    </a>
                  </li>
                </ul>
              </div>

              <div class="flow_ctrl_box">
                <a href="#" id="banner_left" class="back"><span class="blind">이전</span></a>
                <a href="#" id="banner_right" class="next"><span class="blind">다음</span></a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
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
          <img src="../images/logo2.jpg" alt="" />
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