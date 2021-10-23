<?php
// dp.php 불러오기
include('db.php');

// 불러오기
if(isset($_POST['id']) && isset($_POST['pw'])&& isset($_POST['checkpw'])&& isset($_POST['email'])){
    // 보안 코딩
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $pw = mysqli_real_escape_string($db, $_POST['pw']);
    $checkpw = mysqli_real_escape_string($db, $_POST['checkpw']);
    $email = mysqli_real_escape_string($db, $_POST['email']);

    // 빈 칸 확인
    if(empty($id)){
        echo("<script> alert('아이디 칸이 비어있어요.'); location.replace('signUp.php'); </script>");
    }else if(empty($pw)){
        echo("<script> alert('비밀번호 칸이 비어있어요.'); location.replace('signUp.php'); </script>");
    }else if(empty($checkpw)){
        echo("<script> alert('비밀번호 확인 칸이 비어있어요.'); location.replace('signUp.php'); </script>");
    }else if(empty($email)){
        echo("<script> alert('이메일 칸이 비어있어요.'); location.replace('signUp.php'); </script>");
    }else if($pw != $checkpw){
        // 비밀번호 확인 틀림
        echo("<script> alert('비밀번호와 확인이 맞지 않아요.'); location.replace('signUp.php'); </script>");
    }else{
        // 암호화
        $hash = password_hash($pw, PASSWORD_DEFAULT);

        // 아이디 중복 체크 sql 문
        $sql_same = "SELECT * FROM user WHERE id = '$id'";
        // db에서 실행
        $order = mysqli_query($db, $sql_same);
        // 중복 체크 결과
        if(mysqli_num_rows($order) > 0){
            echo("<script> alert('중복된 아이디예요.'); location.replace('signUp.php'); </script>");
        }else{
            // 회원 저장 sql 문
            $sql_save = "INSERT INTO user VALUES('$id', '$hash', '$email')";
            // db에서 실행
            $result = mysqli_query($db, $sql_save);

            if($result){
                // 가입 성공
                echo("<script> alert('가입 성공.'); location.replace('login.php'); </script>");
            }else{
                // 가입 실패
                echo("<script> alert('가입 실패.'); location.replace('signUp.php'); </script>");
            }
        }
    }
}else{
    echo("<script> alert('뜨면 진짜 큰일나는 오류.'); location.replace('signUp.php'); </script>");
}
?>