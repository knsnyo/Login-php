<?php
// dp.php 불러오기
include('db.php');

// 전역변수 실행
session_start();

// 불러오기
if(isset($_POST['id']) && isset($_POST['pw'])){
    // 보안 코딩
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $pw = mysqli_real_escape_string($db, $_POST['pw']);

    // 빈 칸 확인
    if(empty($id)){
        echo("<script> alert('아이디 칸이 비어있어요.'); location.replace('login.php'); </script>");
    }else if(empty($pw)){
        echo("<script> alert('비밀번호 칸이 비어있어요.'); location.replace('login.php'); </script>");
    }else{
        // 회원가입된 아이디인지 확인
        $sql_findID = "SELECT * FROM user where id = '$id'";
        $result = mysqli_query($db, $sql_findID);
        
        // 회원일 경우
        // php ===은 값과 데이터 타입이 같으면
        // 로그인
        if(mysqli_num_rows($result) === 1){
            // db에 있는 result와 관련된 데이터 전부 
            // 배열 형태로 저장
            $row = mysqli_fetch_assoc($result);

            // db에 저장된 비밀번호 저장
            $hash = $row['password'];

            // 암호화된 비밀번호 확인
            $pw_check = password_verify($pw, $hash);
            if($pw_check){
                // 전역 변수 생성
                $_SESSION['id'] = $row['id'];
                // 로그인 성공
                echo("<script> alert('로그인 성공.'); location.replace('myPage.php'); </script>");
            }else{
                // 비밀번호 다름
                echo("<script> alert('비밀번호가 달라요.'); location.replace('login.php'); </script>");
            }  
        }else{
            // 아이디 없음
                echo("<script> alert('아이디가 달라요.'); location.replace('login.php'); </script>");
        }
    }
}else{
    echo("<script> alert('뜨면 진짜 큰일나는 오류.'); location.replace('signUp.php'); </script>");
}
?>