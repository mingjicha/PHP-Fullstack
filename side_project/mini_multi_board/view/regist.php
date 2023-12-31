<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>회원가입</title>
</head>
<body class="vw-100 vh-100">
    <!-- 헤더 설정 -->
    <?php require_once("view/inc/header.php"); ?>

    <main class="d-flex justify-content-center align-items-center h-75">
        <!-- 패스워드 때문에 get이외의 방식으로 통신해야 함 -->
        <form style="width: 350px;" action="/user/regist" method="POST"> 
            <div id="errorMsg" class="form-text text-danger">
                <!-- 에러메시지 불러오기 삼항연산자 사용 -->
                <?php echo count($this->arrErrorMsg) > 0 ? implode("<br>", $this->arrErrorMsg) : "" ?>
            </div> 
            <div class="mb-3">
                <label for="u_id" class="form-label">아이디</label>
                <!-- name을 셋팅 해줘야 DB에서 key가 돼서 값이 넘어 감 -->
                <input type="text" class="form-control" id="u_id" name="u_id" max="20">
                <button type="button" class="btn btn-dark" onclick="idChk(); return false;">중복 확인</button>
				<span id="idChkMsg"></span>
            </div>
            <div class="mb-3">
                <label for="u_pw" class="form-label">비밀번호</label>
                <input type="password" class="form-control" id="u_pw" name="u_pw" max="20">
            </div>
            <div class="mb-3">
                <label for="u_pw_chk" class="form-label">비밀번호 확인</label>
                <input type="password" class="form-control" id="u_pw_chk" name="u_pw_chk" max="20">
            </div>
            <div class="mb-3">
                <label for="u_name" class="form-label">이름</label>
                <input type="text" class="form-control" id="u_name" name="u_name" max="50">
            </div>
            <a href="/user/login" class="btn btn-secondary">취소</a>
            <button type="submit" class="btn btn-dark float-end">가입</button>
          </form>
    </main>

    <footer class="bg-dark fixed-bottom text-light text-center p-3">저작권</footer>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/view/js/common.js"></script>

</body>
</html>