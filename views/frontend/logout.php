<?php
session_start();

// Xóa toàn bộ thông tin phiên làm việc
session_destroy();

// Chuyển hướng người dùng đến trang đăng nhập hoặc trang chủ
header("Location: index.php");
exit;