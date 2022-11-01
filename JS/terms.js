function checkBtn1() {
  // 체크버튼 둘 다 체크하면 all 체크되게끔(버튼1)
  let checkBtn1 = document.getElementById("checkBtn1");
  let checkBtn2 = document.getElementById("checkBtn2");
  let checkAll = document.getElementById("checkAll");
  if (checkBtn2.checked == true) {
    checkAll.checked = true;
  }
}

function checkBtn2() {
  // 체크버튼 둘 다 체크하면 all 체크되게끔(버튼2)
  let checkBtn1 = document.getElementById("checkBtn1");
  let checkBtn2 = document.getElementById("checkBtn2");
  let checkAll = document.getElementById("checkAll");
  if (checkBtn1.checked == true) {
    checkAll.checked = true;
  }
}

function pageMove() {
  // 약관 동의 확인
  let checkAll = document.getElementById("checkAll");
  if (checkAll.checked == true) {
    window.location.href = "../3. sign_up/signup.html";
  }
  if (checkAll.checked == false) {
    alert("약관에 동의 해주세요.");
  }
}
