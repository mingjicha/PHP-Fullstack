<?php

?>



<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>삭제</title>
    <link rel="stylesheet" href="/과제애오/src/css/common.css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- javascript -->
    <!-- <script src="/과제애오/src/css/gnb.js"></script> -->
</head>
<body>
    <!-- 배경 이미지 -->
    <div class="back_img"></div>
    <!-- 샤라락 버튼 -->
    <div class="main_btn">
        <a href="javascript:void(0);" class="menu_btn">샤라락</a>
        <div class="gnb_wrap">
            <ul class="gnb active">
                <li>
                    <a href="./02_welcome.html">어스오세요</a>
                </li>
                <li>
                    <a href="./03_hello.html">반갑습니다</a>
                </li>
                <li>
                    <a href="./04_list.html">이래저래요</a>
                </li>
            </ul>
        </div>
    </div>   
    <div class="main">
        <!-- 게시글 불러오기 -->
        <div class="board"> 
            <p>냠냠</p>
            <p>헤이즐넛 라떼 맛있오</p>
            <p>챱챱챱</p>
        </div> 
        <!-- 삭제 화인 문구 -->
        <div class="del_btn">
            <p>삭제 할고야,,?</p>
            <p>진짜 삭제한다???</p>
        </div> 
        <!-- 삭제 : button, 취소 : a 태그 -->
        <a href="./07_delete.html">삭제</a>
        <a href="./04_list.html">취소</a>
    </div>
</body>
</html>