<?php
//네이밍 기법
//	1. 카멜 기법 : 낙타의 등을 연상하고, 단어의 첫글자는 대문자, 나머지는 소문자로 작성 하는 기법
//		예) $testNum
//	2. 스네이크 기법 : 뱀을 연상하고, 단어와 단어 사이를 "_"로 이어주고 전부 소문자로 작성하는 기법
//		예) $test_num

// 화면에 출력하는 방법 : echo문, print문 등
// 단순 출력의 경우 현업에서는 echo를 많이 사용
// 차이점 : print문은 리턴값이 있고, echo는 없음
echo '안녕 PHP';
print '안녕 pringt';

// 변수 : 필요한 데이터를 저장하는 장소
//
$num = 1;
$str = '안녕, 변수';
$str = '바꿈';
// 선언을 하면 각각 메모리에 저장되는데 선언 했던 똑같은 변수가 만들어지면 교환돼서 출력 됨

echo $num, $str;

$sum = $num + 5;

echo $sum;

$sum = $sum + $num;

echo $sum;


?>
