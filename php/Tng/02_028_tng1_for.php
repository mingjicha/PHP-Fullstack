<?php
// 반복문을 이용해서 1~10까지 숫자를 출력해 주세요.
// 1
// 2
// 3
// ...
// 10
// for( $i = 1; $i <= 10; $i++ ){
//     echo $i, "\n";
// }

// // 구구단 2단을 반복문을 이용해서 작성해 주세요.
// for( $gu = 1; $gu <= 9; $gu++ ){
//     $mul = $gu * 2;
//     echo "2 X {$gu} = {$mul}\n";
//     // echo "2 X {$gu} = $gu*2, "\n";
// }

// // 구구단 1~9단을 반복문을 이용해서 작성해 주세요.
// // 1단
// // 1 X 1 = 1
// // 1 X 2 = 2
// // ..
// // 2단
// // ...
// // 9 X 9 = 81

// for( $num1 = 1; $num1 <= 9; $num1++ ){
//         echo "\n[{$num1}단]";
//     for( $num2 = 1; $num2 <= 9; $num2++ ){
//         $mul2 = $num1 * $num2;
//       echo "\n{$num1} X {$num2} = {$mul2}";
//     };
// }

// // 2단 ~ 8단은 출력 안 되게 해주세요.
// for( $num1 = 1; $num1 <= 9; $num1++ ){
//     if($num1 >= 2 && $num1 <= 8){
//         continue;}
//         echo "\n[{$num1}단]";
// // if를 먼저 적어주고 echo를 적어줘야함. ** if가 실행되어야 echo가 나온다 라는 뜻
// // 왜 그런지 모르겠으면 순서 바꿔서 적기
//     for( $num2 = 1; $num2 <= 9; $num2++ ){
//         $mul2 = $num1 * $num2;
//       echo "\n{$num1} X {$num2} = {$mul2}";
//     };
// }

// 짝수단만 나오게 해주세요.
for( $num1 = 1; $num1 <= 9; $num1++ ){
    if( $num1 % 2 == 0 ){
        echo "[{$num1}단]\n";
        for( $num2 = 1; $num2 <= 9; $num2++ ){
            $mul2 = $num1 * $num2;
            echo "{$num1} X {$num2} = {$mul2}\n";
        };
    }
}

?>