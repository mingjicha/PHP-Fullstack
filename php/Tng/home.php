<?php
// 1. if문 이용 : 90이면 "수", 80이면 "우", 그 외는 "노력" 출력 
// 1-1. if (조건절){
    //   소스 코드;
    // }
    // else if (조건절){
    //    소스 코드;
    // }
    // else {
    //    소스 코드;
    // }
// $score = 100;
// if ( $score === 90 ) {
//     echo "수";
// }
// elseif ( $score === 80 ) {
//     echo "우";
// }
// else { echo "노력"; }

// 2. while문 이용 : 구구단 8단을 출력해 주세요.
// 2-1. while (조건이 만족할 때) {
//       실행문;
//       증감식;
// }
// $num = 1; // 숫자를 증가시켜야 하는 것
// while( $num <= 9 ) {
// 	$mul = $num * 8;
// 	echo "8 X {$num} = {$mul}\n";
// 	$num++;
// }

// 3. 19단을 출력해 주세요.
// $num = 1;
// while($num <= 9) {
//     $mul = $num * 19;
//     echo "19 X {$num} = {$mul}\n";
//     $num++;
// }

// 4. 두 숫자를 더해주는 함수를 만들어 주세요.
// function sum ($i, $j){
//     $sum = $i + $j;
//     return $sum;
// }

// 5. 짜장면이면 중식, 비빔밥이면 한식, 그 외는 양식으로 출력해 주세요.
$menu = "짜장면";
if( $menu == "짜장면" ) {
    echo "중식";
}
elseif( $menu == "비빔밥" ) {
    echo "한식";
}
else{ echo "양식"; }
