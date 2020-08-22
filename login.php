<?php
$id = $_POST["id"]; // $_GET変数
$password = $_POST["password"]; // $_GET変数に"id"や"password"が格納

if ($id === "Andy" && $password === "secret") {
	session_start(); // session_start関数 => スーパーグローバル変数
	$_SESSION["id"] = $id;
	$_SESSION["time"] = date("Y-m-d H:i:s");

	header("Location: menu.php");
} else {
	header("Location: login.html");
}
?>