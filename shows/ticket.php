<?php
/** 이전 페이지에서 데이터 가져오기 */ 
$bid = $_GET["bid"];

/** 세션이랑 로그인 체크 가져오기 */
include "../inc/session.php";
include "../inc/user_check2.php";


/** DB 가져오기 */
include "../inc/dbcon.php";

/** 쿼리 작성 */
$m_sql = "select * from members where u_id='$s_id';";
$s_sql = "select * from shows where bid='$bid';";

/** 쿼리 전송해서 데이터 가져오기 */
$m_result = mysqli_query($dbcon, $m_sql);
$s_result = mysqli_query($dbcon, $s_sql);
$m_array = mysqli_fetch_array($m_result);
$s_array = mysqli_fetch_array($s_result);
?>

<?php 
  $date = explode(" ",$s_array["h_date"]);
  $time = explode(":",$date[1]);
  $day = $date[0];
  $hour = $time[0]."시";
  $min = $time[1]."분";

  $left = $s_array["headcount"] - $s_array["tcount"];
?>


<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../CSS/reset.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <style>
  .form__wrap {
    padding: 20px;
    display: flex;
    height: 540px;
  }

  .form__left {
    width: 410px;
    padding-right: 25px;
  }

  .form__right {
    width: 365px;
    background: #ddd;
    padding: 30px;
  }

  .ticket__title {
    padding: 10px auto;
  }

  .left__left>p {
    text-align: left;
  }

  .left__text {
    padding: 10px
  }

  .left__text>p {
    padding: 5px;
  }

  .left__text input {
    background: #ddd;
    padding: 3px 3px 3px 15px;
    border: 1px solid #767575;
    border-radius: 0.3em;
  }

  .credit {
    text-align: center;
    width: 220px;
    padding: 3px 14px 3px 4px;
    border: 1px solid #767575;
    background: url(../images/select.png) no-repeat 93% 50%;
    border-radius: 0.3em;
  }

  .bol {
    font-weight: bold;
    font-size: 20px;
  }

  .red {
    color: red;
  }

  .tcount {
    background: white;
    width: 50px;
    height: 25px;
    margin: 4px 0 4px 0;
    text-align: center;
    border: 1px solid #767575;
  }

  .money {
    color: red;
    font-size: 25px;
    font-weight: bold;
  }

  .credit_ok {
    background: #0d4590;
    color: white;
    width: 130px;
    height: 45px;
    margin-right: 5px;
  }

  .exit {
    width: 130px;
    height: 45px;
    background: white;
    border: 1px solid #767575;
  }

  .right__text {
    padding: 0 18px 0 18px;
  }

  .right__text p {
    padding: 10px 0 10px 0;
  }

  .form__img {
    border: 1px solid #dddd;
    width: 369px;
    padding-top: 5px;
    padding-bottom: 5px;
    text-align: center;
  }
  </style>
  <script>
  $(document).ready(function() {
    $("#tcount").change(function() {
      var a = $("#tcount").val();
      var b = $("#price").val();
      var ab = a * b;
      $(".money").text(ab);
    })
  });
  </script>
</head>

<body>
  <div class="bg">
    <form class="ticket" form name="insert_form" action="insert.php?bid=<?php echo $s_array['bid']?>" method="post"
      onsubmit="return insert_check()">
      <fieldset>
        <legend class="ticket__title">
        </legend>
        <div class=form__wrap>
          <div class="form__left">
            <p class="form__img">
              <img src="../data/shows/<?php echo $s_array['f_name'] ?>" style="width:250px;">
            </p>
            <div class="left__text">
              <p>예매자 이름 &nbsp : &nbsp
                <input type="text" name="u_name" value="<?php echo $m_array['u_name'] ?>">
              </p>
              <p>휴대폰 번호 &nbsp : &nbsp
                <input type="text" name="mobile" value="<?php echo $m_array['mobile']?>">
              </p>
              <p style="padding-left: 20px;">결제 수단 &nbsp : &nbsp
                <select class="credit">
                  <option>결제 수단을 선택하세요</option>
                  <option>카카오페이</option>
                </select>
              </p>
            </div>
          </div>
          <div class="form__right">
            <div class="right__text">
              <p>공연 이름 <br>
                <span class="title bol"><?php echo $s_array["h_title"] ?></span>
              </p>
              <br>
              <p>공연 날짜와 시간<br>
                <span class="bol"><?php echo $day ?> <?php echo $hour ?> <?php echo $min ?></span>
              </p>
              <br>
              <p style="padding: 5px 0 15px 0;">티켓 장 수
                <span class="bol">(잔여석: <span class="red"><?php echo $left ?></span> 석)</span><br>
                <input type="text" name="tcount" class="tcount" id="tcount" maxlength="2" value="1">
                <input id="price" type="hidden" value="<?php echo $s_array["price"] ?>" />
              </p>
              <p class="bol" style="padding: 5px 0 5px 0;">총 결제 금액(&#x20a9;)</p>
              <p style="padding: 0; margin-bottom: 20px;">
                <span class="money"><?php echo $s_array["price"] ?></span>
                원
              </p>
              <p>
                <button class="credit_ok">결제</button>
                <button class="exit">취소</button>
              </p>
            </div>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</body>

</html>