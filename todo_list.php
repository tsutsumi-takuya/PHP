<?php
require_once("functions.php"); // require_once関数 => 異なるPHPファイルを読み込む関数

$todo_list = read_todo_list(false);

for ($i = 0; $i < count($todo_list); $i ++) {
	$todo = $todo_list[$i];
	echo $todo[0] . ":" . $todo[1] . "(" . $todo[2] . ")" . PHP_EOL;
}

?>
