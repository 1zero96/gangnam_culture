<?php
if(!$s_idx){
    echo "
        <script type=\"text/javascript\">
            alert(\"로그인이 필요합니다.\");
            location.href = \"http://localhost/gangnam_culture/login/login.php\";
        </script>
    ";
    exit;
};
?>