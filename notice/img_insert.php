<?php
//업로드할 폴더
$uploads_dir = $this->input->post('tempFolder');

//폴더가 없으면 생성해 줍니다.
if(!is_dir($_SERVER['DOCUMENT_ROOT']."/".$uploads_dir)) {
    @mkdir($_SERVER['DOCUMENT_ROOT']."/".$uploads_dir, 0777);
    @chmod($_SERVER['DOCUMENT_ROOT']."/".$uploads_dir, 0777);
}

//업로드 허용 확장자
$allowed_ext = array('jpg','jpeg','png','gif');

//결과를 담을 변수
$result = array();
foreach($_FILES['file']['name'] as $f=>$name) {
    $name = $_FILES['file']['name'][$f];
    
    //확장자 추출
    $exploded_file = strtolower(substr(strrchr($name, '.'), 1));
    
    //변경할 파일명(중복되지 않게 처리하기 위해 파일명을 변경해 줍니다.)
    $thisName = date("YmdHis",time())."_".md5($name).".".$exploded_file;
    
    //업로드 파일(업로드 경로/변경할 이미지 파일명)
    $uploadFile = $uploads_dir."/".$thisName;
    if(in_array($exploded_file, $allowed_ext)) {
        if(move_uploaded_file($_FILES['file']['tmp_name'][$f], $uploadFile)){
            //파일을 업로드 폴더로 옮겨준후 $result 에 해당 경로를 넣어줍니다.
            array_push($result, "/".$uploadFile);
        }
    }
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>