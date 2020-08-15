<?php

define("STATUS_OPENDED", "0");
define("STATUS_CLOSED", "1");
define("TODO_LIST_CSV", "todo_list.csv");

define("TASK_MAX_LENGTH", 140);
define("MESSAGE_TASK_EMPTY", "タスクが未入力です");
define("MESSAGE_TASK_MAX_LENGTH", "タスクが140文字を超えています。");
define("MESSAGE_ID_INVALID", "入力されたIDは不明です。");

function read_todo_list($ingres_closed = true){

	$handle = fopen(TODO_LIST_CSV, "r");
	$todo_list = [];
	while ($todo = fgetcsv($handle)) {
		if (!$include_closed && $todo[3] === STATUS_CLOSED) {
			continue;
		}
		$todo_list[] = $todo;
	}
	fclose($handle);
	return $todo_list;
}

