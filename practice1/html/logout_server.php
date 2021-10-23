<?php
// 전역변수 가져오기
session_start();

// 전역변수 해제
session_unset();

// 전역변수 파괴
session_destroy();

// 로그아웃
echo("<script> alert('로그아웃'); location.replace('login.php'); </script>");

?>