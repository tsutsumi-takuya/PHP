<?php
$id = $_POST["id"]; // $_GET変数
$password = $_POST["password"]; // $_GET変数に"id"や"password"が格納

if ($id === "Andy" && $password === "secret") {
	header("Location: menu.php");
} else {
	header("Location: login.html");
}
?>