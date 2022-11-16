<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>자유 게시판 &lt; 열린광장 &lt; 강남문화재단</title>
  <link rel="stylesheet" href="../CSS/reset.css" />
  <link rel="stylesheet" href="../CSS/header.css" />
  <link rel="stylesheet" href="../CSS/topmenu.css" />
  <link rel="stylesheet" href="../CSS/view.css" />
  <link rel="stylesheet" href="../CSS/footer.css" />
  <script src="../JS/jquery-3.6.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script defer src="../JS/header.js"></script>
  <script>
  $(document).ready(function() {
    $(".dat_edit_bt").click(function() {
      /* dat_edit_bt클래스 클릭시 동작(댓글 수정) */
      var obj = $(this).closest(".dap_lo").find(".dat_edit");
      obj.dialog({
        modal: true,
        width: 650,
        height: 200,
        title: "댓글 수정"
      });
    });

    $(".dat_delete_bt").click(function() {
      /* dat_delete_bt클래스 클릭시 동작(댓글 삭제) */
      var obj = $(this).closest(".dap_lo").find(".dat_delete");
      obj.dialog({
        modal: true,
        width: 400,
        title: "댓글 삭제확인"
      });
    });

  });
  </script>

</head>

<body>
  <header>
    <?php
        include '../inc/header.php';
        // 데이터 가져오기
        $f_idx = $_GET["f_idx"];
        $no = $_GET["no"];

        // DB 연결
        include "../inc/dbcon.php";
        
        // 쿼리 작성
        $sql = "select * from free where idx=$f_idx;";
        $count_sql = "SELECT count(*) from free";
        $p_sql = "SELECT * FROM free WHERE idx < $f_idx ORDER BY idx DESC LIMIT 1;";
        $f_sql = "SELECT * FROM free WHERE idx > $f_idx ORDER BY idx ASC LIMIT 1;";
        // echo $sql;
        // exit;
        
        // 쿼리 전송
        $result = mysqli_query($dbcon, $sql);
        $count_result = mysqli_query($dbcon, $count_sql);
        $p_result = mysqli_query($dbcon, $p_sql);
        $f_result = mysqli_query($dbcon, $f_sql);
        
        // DB에서 데이터 가져오기
        $array = mysqli_fetch_array($result);
        $p_array = mysqli_fetch_array($p_result);
        $f_array = mysqli_fetch_array($f_result);
        
        // 조회수 업데이트
        $cnt = $array["cnt"]+1;
        $sql = "update free set cnt = $cnt where idx = $f_idx;";
        mysqli_query($dbcon, $sql);

        $f_idx=$_GET["f_idx"];
        $result2 = $mysqli->query("select * from free where idx=".$f_idx) or die("query error => ".$mysqli->error);
        $rs = $result2->fetch_object();

        $query="select * from memo where status=1 and bid=".$rs->idx." order by memoid asc";
        $memo_result = $mysqli->query($query) or die("query error => ".$mysqli->error);
        while($mrs = $memo_result->fetch_object()){
        $memoArray[]=$mrs;
}
    ?>
  </header>
  <div class="menu_wrap">
    <div class="menu_bar">
      <p class="mbr_txt">홈 > 열린광장 > 자유 게시판</p>
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
            <li><a id="board1" href="#">공지사항</a></li>
            <li><a href="board6_2.html">타기관 공지사항</a></li>
            <li><a href="board6_3.html">단임강사 모집공고</a></li>
            <li><a href="board6_4.html">직원채용 공고</a></li>
            <li><a href="board6_5.html">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="content_wrap">
        <div class="menu_title">
          <div class="menu_txt">
            <h1>자유 게시판</h1>
          </div>
        </div>
        <div class="board_wrap">
          <div class="board_head">
            <h3> <?php echo $array["f_title"]; ?></h3>
          </div>
          <div class="board_body">
            <table class="board_table" style="table-layout: fixed">
              <caption hidden>
                공지사항 상세페이지 : 등록일, 조회수, 내용, 첨부파일
              </caption>
              <!-- 12 / 20 -->
              <colgroup>
                <col width="15%" />
                <col width="15%" />
                <col width="15%" />
                <col width="20%" />
                <col width="15%" />
                <col width="10%" />
                <col width="15%" />
                <col width="10%" />
              </colgroup>
              <thead>
                <tr>
                  <th scope="row" class="txtc">작성자</th>
                  <td class="b_left">
                    <?php echo $array["writer"]; ?>
                  </td>
                  <th scope="row" class="txtc">날짜</th>
                  <td class="b_left1">
                    <?php 
                    $w_date = substr($array["w_date"], 0, 10);
                    echo $w_date; 
                    ?>
                  </td>
                  <th scope="row" class="txtc">추천수</th>
                  <td class="b_left1">
                    <?php echo $array["like_count"]; ?>
                  </td>
                  <th scope="row" class="txtc">조회수</th>
                  <td class="b_left1"><?php echo $cnt; ?></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="6" class="bd_contwrap">
                    <div class="board_content">
                      <?php 
                        // textarea의 엔터를 br로 변경
                        // str_repalce("어떤 문자를", "어떤 문자로", "어떤 값에서");
                        // $n_content = str_replace("\n", "<br>", $array["n_content"]);
                        // $n_content = str_replace(" ", "&nbsp;", $n_content);
                        echo $array["f_content"]; 
                    ?>
                    </div>
                  </td>
                </tr>
                <tr class="table_bottom">
                  <td scope="row">첨부</td>
                  <td colspan="4" class="down_col">
                    <span class="file"><a href="#">download.jpg</a></span>
                    <button class="down_btn" type="button">다운로드</button>
                  </td>
                  <?php 
                    if($s_id != $array['writer']){ ?>
                  <td colspan="1" class="txtr recom_col">
                    <button class="recom_btn" type="button"
                      onclick="window.location.href='../inc/like_ok.php?idx=<?=$array['idx']?>'">좋아요 &#128077;</button>
                  </td>
                  <td colspan="2" class="txtr recom_col">
                    <button class="recom_btn" type="button"
                      onclick="window.location.href='../inc/unlike_ok.php?idx=<?=$array['idx']?>'">취소</button>
                  </td>
                  <?php } ?>
                </tr>
                <tr class="page_prev">
                  <th scope="row" class="txtc">이전글</th>
                  <td colspan="4" class="b_left1 ">
                    <?php if(empty($p_array['idx'])){ ?>
                    <span>이전 글이 없습니다.</span>
                    <?php } else { ?>
                    <a href="view.php?f_idx=<?= $p_array['idx']?>&no=<?= $no - 1 ?>"><?= $p_array['f_title'] ?></a>
                    <?php } ?>
                  </td>
                  <?php $w_date = substr($array["w_date"], 0, 10); ?>
                  <td colspan="2" class="no_date txtr">
                    <?php echo empty($p_array['idx']) ? '' : $w_date ?>
                  </td>
                </tr>
                <tr class="page_next">
                  <th scope="row" class="txtc">다음글</th>
                  <td colspan="4" class="b_left1">
                    <?php if(empty($f_array['idx'])){ ?>
                    <span>다음 글이 없습니다.</span>
                    <?php } else { ?>
                    <a href="view.php?f_idx=<?= $f_array['idx']?>&no=<?= $no + 1 ?>"><?= $f_array['f_title'] ?></a>
                    <?php } ?>
                  </td>
                  <td colspan="2" class="no_date txtr">
                    <?php echo empty($p_array['idx']) ? '' : $w_date ?>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="btm_btns1">
              <div class="btm_btns2">
                <button type="button"
                  onclick="location.href='modify.php?f_idx=<?php echo $f_idx;?>&no=<?php echo $no;?>'">수정</button>
                <button type="button" onclick="remove_free()">삭제</button>
                <button type="button" onclick="location.href='list.php'">목록</button>
              </div>
            </div>
            <!-- 댓글 시작 -->
            <div style="margin-top:20px;">
              <form class="row g-3">
                <div class="col-md-10">
                  <textarea class="form-control" placeholder="댓글을 입력해주세요." id="memo" style="height: 60px"></textarea>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-secondary" id="memo_button">댓글등록</button>
                </div>
              </form>
            </div>
            <div id="memo_place">
              <?php
        foreach($memoArray as $ma){
        ?>
              <div class="card mb-4" style="max-width: 100%;margin-top:20px;">
                <div class="row g-0">
                  <div class="col-md-12">
                    <div class="card-body">
                      <p class="card-text"><?php echo $ma->memo;?></p>
                      <p class="card-text"><small class="text-muted"><?php echo $ma->userid;?> /
                          <?php echo $ma->regdate;?></small></p>
                      <p class="card-text" style="text-align:right"><a href="javascript:;"
                          onclick="memo_modi('<?php echo $ma->memoid?>')">수정</a> / <a href="javascript:;"
                          onclick="memo_del('<?php echo $ma->memoid?>')">삭제</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
            </div>
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
  <script>
  function remove_free() {
    var ck = confirm("정말 삭제하시겠습니까?");
    if (ck) {
      location.href = "delete.php?f_idx=<?php echo $f_idx; ?>";
    };
  };

  $("#memo_button").click(function() {
    var data = {
      memo: $('#memo').val(),
      bid: <?php echo $f_idx;?>
    };
    $.ajax({
      async: false,
      type: 'post',
      url: '../inc/memo_write.php',
      data: data,
      dataType: 'html',
      error: function() {},
      success: function(return_data) {
        if (return_data == "member") {
          alert('로그인 하십시오.');
          return;
        } else {
          $("#memo_place").append(return_data);
        }
      }
    });
  });

  function memo_del(memoid) {

    if (!confirm('삭제하시겠습니까?')) {
      return false;
    }

    var data = {
      memoid: memoid
    };
    $.ajax({
      async: false,
      type: 'post',
      url: 'memo_delete.php',
      data: data,
      dataType: 'json',
      error: function() {},
      success: function(return_data) {
        if (return_data.result == "member") {
          alert('로그인 하십시오.');
          return;
        } else if (return_data.result == "my") {
          alert('본인이 작성한 글만 삭제할 수 있습니다.');
          return;
        } else if (return_data.result == "no") {
          alert('삭제하지 못했습니다. 관리자에게 문의하십시오.');
          return;
        } else {
          $("#memo_" + memoid).hide();
        }
      }
    });

  }

  function memo_modi(memoid) {

    var data = {
      memoid: memoid
    };

    $.ajax({
      async: false,
      type: 'post',
      url: 'memo_modify.php',
      data: data,
      dataType: 'html',
      error: function() {},
      success: function(return_data) {
        if (return_data == "member") {
          alert('로그인 하십시오.');
          return;
        } else if (return_data == "my") {
          alert('본인이 작성한 글만 수정할 수 있습니다.');
          return;
        } else if (return_data == "no") {
          alert('수정하지 못했습니다. 관리자에게 문의하십시오.');
          return;
        } else {
          $("#memo_" + memoid).html(return_data);
        }
      }
    });

  }

  function memo_modify(memoid) {

    var data = {
      memoid: memoid,
      memo: $('#memo_text_' + memoid).val()
    };

    $.ajax({
      async: false,
      type: 'post',
      url: 'memo_modify_update.php',
      data: data,
      dataType: 'html',
      error: function() {},
      success: function(return_data) {
        if (return_data == "member") {
          alert('로그인 하십시오.');
          return;
        } else if (return_data == "my") {
          alert('본인이 작성한 글만 수정할 수 있습니다.');
          return;
        } else if (return_data == "no") {
          alert('수정하지 못했습니다. 관리자에게 문의하십시오.');
          return;
        } else {
          $("#memo_" + memoid).html(return_data);
        }
      }
    });

  }
  </script>
</body>

</html>