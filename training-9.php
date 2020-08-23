<?php
session_start();
$cart = [];
if (isset($_SESSION["cart"])) {
	$cart = $_SESSION["cart"];
}
if (isset($_GET["item"])) {
	$cart[] = $_GET["item"];
}

$_SESSION["cart"] = $cart;
$items = implode(", ", $cart); // implode関数 => １つの文字列として変換
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<title>Shop sample</title>
</head>
<body>
	<h3>shop</h3>
	<p>Cart: <?php echo $items; ?></p>
	<hr>
	<ul>
		<li><a href="training-9.php?item=apple">Apple</a></li>
		<li><a href="training-9.php?item=orange">Orange</a></li>
		<li><a href="training-9.php?item=lemon">Lemon</a></li>
	</ul>
</body>
</html>