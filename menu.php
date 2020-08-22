<?php
session_start();
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
	</ul>
</body>
</html>