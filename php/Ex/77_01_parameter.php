<?php

// 참조 하지 않은 경우​
$a = 0;
$b = $a;
$a = 5;
echo $b;     
//  ' 0 ' 출력
// $a 에 5를 대입해도 $b 의 값은 변하지 않는다.

//참조 전달 한 경우​
$a = 0;
$b = &$a;
$a = 5;
echo $b;              
//  ' 5 ' 출력​
// $a 에 5를 대입하면 $b 의 값도 바뀌게 된다.

// 참조 한 경우와 안한경우의 차이점은 $b = &$a;  이부분이다.
// " & " 기호를 붙혀 주면 값을 참조하게 된다.



// 함수에서의 참조 전달을 알아보자.

// 참조 하지 않은 경우

// function func($value) {
// $value += 10;
// }

$value = 5;
func($value);
echo $value;

//  ' 5 ' 출력​
// 함수 안에서 $value 에 10을 더해도 함수 밖에 $value 에는 영향이 없다.  
// 서로 다른 변수로 취급 되기 때문이다. 
 
// 참조 전달 한 경우

function func(&$value) {
$value += 10;
}

$value = 5;
func($value);
echo $value;

//  ' 15 ' 출력​
// 함수의 파라미터 $value 에 " & " 붙혀 주어
// 함수 안과 밖의 $value 변수끼리 값이 참조 된다.

