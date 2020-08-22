<?php

// $name = null;
// if (!isset($_GET["name"])) { // キーが存在しない場合に発火
// 	$name = null;
// } else if (!is_string($_GET["name"])) { // is_string関数 => 文字列データか確認
// 	$name = false;
// } else {
// 	$name = $_GET["name"];
// }

// $name = $_GET["name"];
$name = (string)filter_input(INPUT_GET, "name");

$names = file("names.txt", FILE_IGNORE_NEW_LINES);
$searched_names = [];

if ($name !== "") {
	for ($i = 0; $i < count($names); $i++) {
		if (strpos($names[$i], $name) !== false) { // strpos関数 => 配列の要素の中にキーワードがあるかどうか
			$searched_names[] = $names[$i];
		}
	}
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>PHP sample</title>
</head>
<body>
	<h3>Search</h3>
	<hr>
	<ul>
		<?php
		for ($i = 0; $i < count($searched_names); $i++) { ?>
			<li><?php echo $searched_names[$i]; ?></li>
		<?php
		} ?>
	</ul>
</body>
</html>