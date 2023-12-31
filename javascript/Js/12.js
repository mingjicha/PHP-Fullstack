// 함수

// 함수 생성
// 함수 선언식 (이떄까지 php에서 사용 했던 것) : 호이스팅에 영향을 받는다.
function fnc_test(a, b) {
    return a + b;
}

// 함수 표현식 : 호이스팅에 영향을 받지 않는다.
let fnc1 = function(a, b) {
    return a + b;
}

// 익명함수 : 이름이 없는 함수
// 위에 함수 표현식처럼 이름 없이 적어줄 수도 있음


// 콜백함수 : 다시 호출되는 함수
function fnc_callBack(call) {
    call();
}

fnc_callBack(function(){
    console.log('익명함수')
});

// 배열 객체의 sort의 경우 예시 (대충 이런식)
sort_arr.sort(function(a, b){
    return a - b
});

function sort(call) {
    let num = call();
    if(num < 0){
        // 처리
    } else {
        //
    }
}

// Function 생성자 함수(잘 안 씀)
let tt = Function('a', 'b', 'return a + b;');

// 화살표 함수(Arrow Function)
let f1 = function() {
    return "f1";
}

let f2 = () => "f2";

// 파라미터가 1개인 경우
let f3 = function(a) {
    return a + '입니다.';
}

let f4 = (a) => a + '입니다.';

// 파라미터가 2개 이상인 경우
let f5 = function(a, b) {
    return a + b;
}

let f6 = (a, b) => a + b;

// 함수의 처리가 많을 경우
let f7 = function(a, b) {
    if(a > b) {
        return 'a가 큼';
    } else {
        return 'b가 큼';
    }
}

let f8 = (a, b) => {
    if(a > b) {
        return 'a가 큼';
    } else {
        return 'b가 큼';
    }
}

// 자바스크립트가 소스코드가 다양해서 개발자마다 좀 다름