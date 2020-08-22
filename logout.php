<?php
session_start();
session_destroy(); // session_destroy関数 => ログアウトした場合、紐付けの解除
header("Location: login.html");
?>
