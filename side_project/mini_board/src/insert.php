<?php
// insert(추가) delete(삭제) update(수정)는 commit 필요함

define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/mini_board/src/"); // 웹서버 root 패스 생성
define("FILE_HEADER", ROOT."header.php"); // 헤더 패스
define("ERROR_MSG_PARAM", "⛔ %s을 입력해 주세요."); //파라미터 에러 메세지 // %s에서 s는 sprintf
require_once(ROOT."lib/lib_db.php"); // DB관련 라이브러리

// POST로 request가 왔을 때 처리
// 데이터를 담아서 서버에게 요청하는 GET방식과 POST방식 https://mommoo.tistory.com/60, https://free-eunb.tistory.com/41 - 참고
// HTTP 패킷
$conn = null; // DB Connection 변수
$http_method = $_SERVER["REQUEST_METHOD"]; // Method 무슨 방식으로 가져오는 지 확인
$arr_err_msg = []; // 에러 메세지 저장용

// list 페이지에서 글작성 버튼은 GET으로 왔기 때문에 디폴트값 GET으로 설정 
// insert에서 작성 버튼을 누르면 POST로 설정된 걸로 들어감
$title = "";
$content = "";

if($http_method === "POST") {
	try {
		$arr_post = $_POST;

		// 파라미터 획득
		$title = isset($_POST["title"]) ? trim($_POST["title"]) : ""; // title 셋팅
		$content = isset($_POST["content"]) ? trim($_POST["content"]) : ""; // content 셋팅

		// 공백이 있을 경우 작성을 못하게 설정
		if($title === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "제목");
		}
		if($content === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "내용");
		}
		// if(count($arr_err_msg) >= 1) {
		// 	throw new Exception(implode("<br>", $arr_err_msg));
		// }
		
		// 제목과 내용 둘 다 작성 했을 때는 실행
		if(count($arr_err_msg) === 0 ) {
			// DB 접속 true면 DB연결이 잘 된 것, false면 에러가 뜸
			if(!my_db_conn($conn)) {
				// DB Instance 에러
				throw new Exception("DB Error : PDO Instance");
			}
			$conn->beginTransaction(); // 트랜잭션 시작 auto commit 끔
			// https://www.php.net/manual/en/pdo.begintransaction.php beginTransaction() - 참고

			// insert
			if(!db_insert_boards($conn, $arr_post)) {
				// DB Insert 에러
				throw new Exception("DB Error : Insert Boards");
			}
	
			$conn->commit(); // 모든 처리 완료 시 커밋
			// 커밋은 신중하게

			// insert가 끝났으니까 리스트 페이지로 이동
			header("Location: list.php");
			exit;
			}
		} catch(Exception $e) {
			if($conn !== null) {
			$conn->rollBack(); 
			}
			// echo $e->getMessage(); // Exception 메세지 출력
			header("Location: error.php/?err_msg={$e->getMessage()}");
			exit;
		} finally {
		db_destroy_conn($conn); // DB 파기 > 할 일 끝난 insert한테 관련된 DB가 더이상 필요가 없으니 불필요한 메모리 제거
	}
}

?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/mini_board/src/css/common.css">
	<title>작성 페이지</title>
</head>
<body>
	<?php
		require_once(FILE_HEADER);
	?>
		<!-- form 양식
			action(백단. 서버단 주소)에 있는 걸 통해서 input 안에 있는 특정 "이름"이 있는 데이터 내용을 서버로 넘긴다 -->
	<div class="sfrom">
		<div class="error_in">
			<?php 
				foreach($arr_err_msg as $val) {
			?>
				<P><?php echo $val ?></P>
			<?php
				}
			?>
		</div>
			<div class="insert_tb">
				<table>
					<form action="/mini_board/src/insert.php" method="post">
					<tr>
						<th>
							<label for="title" class="insert_th">제목 </label>
						</th>
						<td>
							<input type="text" name="title" id="title" value="<?php echo $title ?>" class="input_up_tit"> <!--빈 문자열로 선언을 해두고 value로 넣어줘야함 -->
							<!-- input 짧은 글 -->
						</td>
					</tr>
						<th>
							<label for="content" class="insert_th">내용 </label>
						</th>
						<td>
							<textarea name="content" id="content" cols="30" rows="10" class="input_up_con"><?php echo $content ?></textarea>
							<!-- textarea 긴 글 -->
						</td>
				</table>
						<div class="insert_a">
							<button class="insert_b" type="submit" class="insert_th">작성</button>
							<!-- action으로 선언한 서버로 submit(전송) 해준다 -->
							<a class="insert_b" href="/mini_board/src/list.php">취소</a>						
						</div>
					</form>

			</div>
	</diV>
</body>
</html>