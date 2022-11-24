"use strict";

let u_name = document.querySelector("#u_name");
var errName = document.getElementById("err_name");
let SuccessmessageName = document.querySelector(".name-success-message");
let FailuremessageName = document.querySelector(".name-failure-message");
let u_id = document.querySelector("#u_id");
var errID = document.getElementById("err_ID");
let SuccessmessageID = document.querySelector(".id-success-message");
let FailuremessageID = document.querySelector(".id-failure-message");
let pwd = document.querySelector("#pwd");
var errPW = document.getElementById("err_pw");
let SuccessmessagePW = document.querySelector(".pw-success-message");
let FailuremessagePW = document.querySelector(".pw-failure-message");
let SuccessmessagePW2 = document.querySelector(".pw2-success-message");
let FailuremessagePW2 = document.querySelector(".pw2-failure-message");
let u_year = document.querySelector("#u_year");
let FailuremessageYear = document.querySelector(".year-failure-message");
let u_month = document.querySelector("#u_month");
let u_day = document.querySelector("#u_day");
let FailuremessageDay = document.querySelector(".day-failure-message");
let mobile = document.querySelector("#mobile");
let errPhone = document.getElementById("err_phone");
let email_id = document.querySelector("#email_id");
let email_dns = document.querySelector("#email_dns");
let email_sel = document.querySelector("#email_sel");
let errEmail = document.getElementById("err_email");

const regPW = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,16}/;
const regYear = /(19[0-9][0-9]|20\d{2})/;
const regDay = /^((0?[1-9])|([1-2][0-9])|30|31)$/;
const regID = /^[a-z]+[a-z0-9]{5,11}$/;

u_name.onblur = function () {
  if (u_name.value == "") {
    errName.classList.remove("hide");
    errName.innerHTML = "* 필수 항목 입니다.";
  } else {
    errName.classList.add("hide");
  }
};

// 아이디 입력창에 글자를 키보드로 입력 할 때, 성공 메세지와 실패 메세지 보여 줌
u_id.onkeyup = function () {
  if (isMoreThan4Length(u_id.value)) {
    errID.classList.add("hide");
    SuccessmessageID.classList.remove("hide");
    FailuremessageID.classList.add("hide");
  } else {
    errID.classList.add("hide");
    SuccessmessageID.classList.add("hide");
    FailuremessageID.classList.remove("hide");
  }
  function isMoreThan4Length(value) {
    return (value = regID.test(u_id.value));
  }
};

// 아이디 입력 안하고 다른 요소로 넘어갈때 기존 메세지 삭제 후 새로운 메세지 뜨게 함
u_id.onblur = function () {
  if (u_id.value == "") {
    FailuremessageID.classList.add("hide");
    errID.classList.remove("hide");
    errID.innerHTML = "* 필수 항목 입니다.";
  }
};

//아이디 중복체크 새 창
function idCheck() {
  window.open("id_search.html", "", "width=600,height=300,left=0,top=0");
}

// 패스워드 입력창에 글자를 키보드로 입력 할 때, 성공 메세지와 실패 메세지 보여 줌
pwd.onkeyup = function () {
  if (isMoreThan8Length(pwd.value)) {
    errPW.classList.add("hide");
    SuccessmessagePW.classList.remove("hide");
    FailuremessagePW.classList.add("hide");
  } else {
    errPW.classList.add("hide");
    SuccessmessagePW.classList.add("hide");
    FailuremessagePW.classList.remove("hide");
  }
  function isMoreThan8Length(value) {
    return (value = regPW.test(pwd.value));
  }
};

// 패스워드 입력 안하고 다른 요소로 넘어갈때 기존 메세지 삭제 후 새로운 메세지 뜨게 함
pwd.onblur = function () {
  if (pwd.value == "") {
    FailuremessagePW.classList.add("hide");
    errPW.classList.remove("hide");
    errPW.innerHTML = "* 필수 항목 입니다.";
  }
};

// 패스워드 중복검사 창에 글자를 키보드로 입력 할 때, 성공 메세지와 실패 메세지 보여 줌 + 패스워드 입력 안할 시 입력 못하게 함
repwd.onkeyup = function () {
  if (repwd.value == pwd.value) {
    SuccessmessagePW2.classList.remove("hide");
    FailuremessagePW2.classList.add("hide");
  } else {
    SuccessmessagePW2.classList.add("hide");
    FailuremessagePW2.classList.remove("hide");
  }
  if (pwd.value == "") {
    pwd.focus();
    SuccessmessagePW2.classList.add("hide");
  }
};

// 생년월일 연도 입력 실패 메세지 보여 줌
u_year.onkeyup = function () {
  if (YearCheck(u_year.value)) {
    FailuremessageYear.classList.add("hide");
  } else {
    FailuremessageYear.classList.remove("hide");
  }
  function YearCheck(value) {
    return (value = regYear.test(u_year.value));
  }
};

// 생년월일 Month 입력 하지 않으면 다음 요소로 넘어가지 않게 설정
u_month.onfocus = function () {
  if (u_year.value == 0) {
    u_year.focus();
  }
};

// 생년월일 Day 입력 하지 않으면 다음 요소로 넘어가지 않게 설정
u_day.onfocus = function () {
  if (u_month.selectedIndex == 0) {
    u_month.focus();
  }
};

// 생년월일 날짜 입력 실패 메세지 보여 줌
u_day.onkeyup = function () {
  if (DayCheck(u_day.value)) {
    FailuremessageDay.classList.add("hide");
  } else {
    FailuremessageDay.classList.remove("hide");
  }
  function DayCheck(value) {
    return (value = regDay.test(u_day.value));
  }
};

// 전화번호 숫자만 입력되게 + '-'자동으로 입력되게 함
const autoHyphen = (target) => {
  target.value = target.value.replace(/[^0-9]/g, "").replace(/^(\d{2,3})(\d{3,4})(\d{4})$/, `$1-$2-$3`);
};

// 전화번호 입력 안하고 다른 요소로 이동할때 메세지 띄우게 함
mobile.onblur = function () {
  if (mobile.value == "") {
    errPhone.classList.remove("hide");
    errPhone.innerHTML = "* 필수 항목 입니다.";
  }
};

// 전화번호 다시 입력하면 메세지 사라지게함
mobile.onkeyup = function () {
  if (!mobile.value == "") {
    errPhone.classList.add("hide");
  }
};

email_id.onblur = function () {
  if (email_id.value == "") {
    errEmail.classList.remove("hide");
    errEmail.innerHTML = "* 필수 항목 입니다.";
  }
};

// 이메일 다시 입력하면 메세지 사라지게함
email_dns.onkeyup = function () {
  if (!email_id.value == "" && !email_dns.value == "") {
    errEmail.classList.add("hide");
  }
};

function form_check() {
  let u_name = document.querySelector("#u_name");
  let u_id = document.querySelector("#u_id");
  let pwd = document.querySelector("#pwd");
  let repwd = document.querySelector("#repwd");
  let u_year = document.querySelector("#u_year");
  let u_month = document.querySelector("#u_month");
  let u_day = document.querySelector("#u_day");
  let mobile = document.querySelector("#mobile");
  let email_id = document.querySelector("#email_id");
  let email_dns = document.querySelector("#email_dns");
  let ps_code = document.querySelector("#ps_code");
  let addr_b = document.querySelector("#addr_b");
  let addr_d = document.querySelector("#addr_d");
  const regName = /^[가-힣a-zA-Z]+$/;
  const regPW = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;
  const regYear = /(19[0-9][0-9]|20\d{2})/;
  const regDay = /^((0?[1-9])|([1-2][0-9])|30|31)$/;
  const regID = /^[a-z]+[a-z0-9]{5,11}$/g;
  var errName = document.getElementById("err_name");
  var errPW = document.getElementById("err_pw");
  var errID = document.getElementById("err_ID");
  var errPhone = document.getElementById("err_phone");
  var errEmail = document.getElementById("err_email");
  var errZip = document.getElementById("err_zip");

  // 이름 유효성 검사 //

  if (!regName.test(u_name.value)) {
    errName.classList.remove("hide");
    errName.innerHTML = "* 한글, 영어만 사용 가능 합니다";
    u_name.focus();
    return false;
  } else {
    errName.classList.add("hide");
  }

  // 아이디 유효성 검사 //
  function isMoreThan4Length(value) {
    return (value = regID.test(u_id.value));
  }
  if (!isMoreThan4Length(u_id.value)) {
    errName.classList.remove("hide");
    errID.innerHTML = "* 영문자로 시작하는 6~12자 영문자 또는 숫자만 사용 가능합니다.";
    u_id.focus();
    return false;
  }

  // 패스워드 유효성 검사 //
  function isMoreThan8Length(value) {
    return (value = regPW.test(pwd.value));
  }
  if (!isMoreThan8Length(pwd.value)) {
    errPW.innerHTML = "* 필수 항목 입니다.";
    pwd.focus();
    return false;
  }

  // 패스워드 중복 유효성 검사 //
  if (pwd.value !== repwd.value) {
    repwd.focus();
    return false;
  }

  // 태어난 년도 유효성 검사 //
  if (!regYear.test(u_year.value)) {
    u_year.focus();
    return false;
  }

  //태어난 달 유효성 검사 //
  if (u_month.selectedIndex == 0) {
    var errMonth = document.getElementById("err_Month");
    errMonth.innerHTML = "* 태어난 월을 선택해주세요";
    u_month.focus();
    return false;
  }

  //태어난 날 유효성 검사 //
  if (!regDay.test(u_day.value)) {
    u_day.focus();
    return false;
  }

  //전화번호 유효성 검사 //
  if (mobile.value == "") {
    errPhone.innerHTML = "필수 항목 입니다.";
    mobile.focus();
    return false;
  }

  // 이메일 유효성 검사 //
  if (email_id.value == "") {
    errEmail.innerHTML = "필수 항목 입니다.";
    email_id.focus();
    return false;
  }
  if (email_dns.value == "") {
    errEmail.classList.remove("hide");
    errEmail.innerHTML = "필수 항목 입니다.";
    email_dns.focus();
    return false;
  }

  // 우편번호 유효성 검사 //
  if (ps_code.value == "") {
    errZip.innerHTML = "필수 항목 입니다.";
    ps_code.focus();
    return false;
  }

  if (addr_b.value == "") {
    errZip.innerHTML = "필수 항목 입니다.";
    addr_b.focus();
    return false;
  }
}
// 이메일 select 선택시 자동으로 폼에 입력되게 함
function change_email() {
  let email_dns = document.querySelector("#email_dns");
  let email_sel = document.querySelector("#email_sel");
  var idx = email_sel.options.selectedIndex;
  var val = email_sel.options[idx].value;
  // 순서 array, 순번 index //
  email_dns.value = val;
}
