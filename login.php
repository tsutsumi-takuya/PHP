<?php
$id = $_POST["id"]; // $_POST変数　=> スーパーグローバル変数
$password = $_POST["password"]; // $_POST変数に"id"や"password"が格納

$message = "NG";
if ($id === "Andy" && $password === "secret") {
	$message = "OK";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP sample</title>
</head>
<body>
	<h1>Login <?php echo $message; ?></h1>
</body>
</html>

<?php
$id = $_GET["id"]; // $_GET変数
$password = $_GET["password"]; // $_GET変数に"id"や"password"が格納

$message = "NG";
if ($id === "Andy" && $password === "secret") {
	$message = "OK";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP sample</title>
</head>
<body>
	<h1>Login <?php echo $message; ?></h1>
</body>
</html>