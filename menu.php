<?php
session_start();

if (!isset($_SESSION["id"])) {  // isset関数 => 変数に指定したキーが存在するか確認を行う　※アドレスバーからの直接アクセス制限
	header("Location: login.html"); // falseとなった場合"login.html"へリダイレクト
	return;
}

$id = $_SESSION["id"];
$time = $_SESSION["time"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<title>PHP sample</title>
</head>
<body>
	<h3>Menu - Hello <?php echo $id; ?></h3>
	<h5>Login at <?php echo $time; ?></h5>
	<hr>
	<ul>
		<li>Todo</li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</body>
</html>