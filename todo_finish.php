<?php

require_once("functions.php");

$id = (int)filter_input(INPUT_GET, "id",
	FILTER_VALIDATE_INT);

if ($id <= 0) {
	redirect_with_message("todo_list.php",
	MESSAGE_ID_INVALID);
}

$lock_handle = lock_file();

$todo_list = read_todo_list();

foreach ($todo_list as &$todo) { // & => 配列要素の参照データを呼び出し
	if ((int)$todo[0] === $id) {
		$todo[3] = STATUS_CLOSED;
		break;
	}
}

write_todo_list($todo_list);

unlock_file($lock_handle);

redirect("todo_list.php");
// if (count($argv) != 2) {
// 	die(MESSAGE_ID_INVALID . PHP_EOL);
// }

// $id = (int)$argv[1];
// if ($id <= 0) {
// 	die(MESSAGE_ID_INVALID . PHP_EOL);
// }

// $todo_list = read_todo_list();
// foreach ($todo_list as &$todo) {
// 	if ((int)$todo[0] === $id) {
// 		$todo[3] = STATUS_CLOSED;
// 		break;
// 	}
// }

// write_todo_list($todo_list);

?>