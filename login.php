<?php
// Tài khoản mẫu, bạn có thể thay đổi thành thông tin tài khoản thực tế
$correct_username = "admin";
$correct_password = "password";

// Lấy thông tin đăng nhập từ form
$username = $_POST['username'];
$password = $_POST['password'];

// Kiểm tra thông tin đăng nhập
if ($username == $correct_username && $password == $correct_password) {
    echo "<h1>Đăng nhập thành công!</h1>";
} else {
    echo "<h1>Đăng nhập thất bại. Vui lòng thử lại!</h1>";
}
?>
