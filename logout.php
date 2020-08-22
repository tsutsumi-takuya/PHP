<?php
session_start();

$_SESSION = [];

if (ini_get("session.use_cookies")) { //ini_get関数 => session内でCookieを使用しているか確認
	$params = session_get_cookie_params(); // cookieのパラメータを保持
	setcookie(session_name(), '', time() - 42000,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]);
}

session_destroy(); // session_destroy関数 => ログアウトした場合、紐付けの解除(Cookieは残る)
header("Location: login.html");
?>

