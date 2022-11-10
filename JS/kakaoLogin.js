Kakao.init("3168eabc29e9acd3ca76b94915f8c2c3");
Kakao.isInitialized();

function KakaoLogin() {
  Kakao.Auth.login({
    success: function (authObj) {
      // 로그인 했을 때 성공 여부 불러옴
      Kakao.API.request({
        url: "/v2/user/me",
        success: function (res) {
          // 로그인한 사람의 개인정보 불러옴
          console.log(JSON.stringify(res));
          //alert(res.id);
          console.log(res.id);
          document.LogInPage.UserKakao.value = res.id;
          document.forms["LogInPage"].submit();
        },
        fail: function (error) {
          //alert(JSON.stringify(error));
        },
      });
    },
    fail: function (err) {
      //alert(JSON.stringify(err));
    },
  });
}
// Kakao.Auth.authorize({
//   // redirectUri: '{REDIRECT_URI}'
// });
