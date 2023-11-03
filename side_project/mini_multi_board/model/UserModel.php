<?php

namespace model;

// 부모를 상속 받아서 쓰니까 extends 사용
class UserModel extends ParentsModel{
    public function getUserInfo($arrUserInfo, $pwFlg = false) {
        $sql =
            " SELECT "
            ."       * "
            ." FROM user "
            ." WHERE "
            ."  u_id = :u_id ";
        // 원래 sql 순서를 따라서 바로 밑에 and로 들어 감 

        $prepare = [
          ":u_id" => $arrUserInfo["u_id"]
        ];
    
        // PW 추가 처리
        if($pwFlg) {
            $sql .= " AND u_pw = :u_pw ";
            // $sql = $sql." AND u_pw = :u_pw ";
             // 연결 연산자 사용 
            // $sql = "a";
            // $sql .= "b";
            // "ab"로 나옴
            $prepare[":u_pw"] = $arrUserInfo["u_pw"];
        } try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll(); // 실행시킨 결과를 배열로 받아 줌
            return $result;
        } catch(Exception $e) {
            echo "UserModel->getUserInfo Error : ".$e->getMessage();
            exit();
        }
    }
}