E01 : 데이터 유효성 에러
E02 : 미인증 에러
E03 : URL 에러
E99 : 시스템 에러


신규 생성 및 수정 리스트
app/
    Exceptions/
        Handler.php     예외 발생 처리 추가
    Http/
        Controllers/
            BoardsController.php
        Middleware/
            ApiChkToken.php     토큰체크 미들웨어
        Kernel.php
    Models/
        Board.php
config/
    app.php
database/
    migrations/
        2023_07_04_141759_create_boards_table.php
    seeders/
        BoardSeeder.php
public/
    img/    이미지 저장 디렉토리
routes/
    api.php
    web.php
.env.example        Authorization용 키(APP_AUTHORIZATION_KEY) 추가

[설치 순서 PowerShell사용]
1. laravel_vuestagram 에 env 복붙하기
2. composer install 설치하기 (vendor)
3. php artisan key:generate (라라벨 앱키 생성)
4. php artisan serve (서버 열어서 {"code":"E03"} 에러코드 확인)
5. php artisan migrate (DB 만들기) -> DB_DATABASE=laravel_test 라고 env에서 설정함
6. php artisan db:seed (seeder 생성)
7. npm install (node_modules 생성)
-------------node_modules에 설치 중
8. npm install vuex@next --save (vuex 설치)
9. npm install axios (axios 설치)
10. npm install vue-router@4 (router 설치)
11. npm install --save-dev vue (laravel에 vue.js 설치)
12. npm install --``save-dev vue-loader (오류 방지용)