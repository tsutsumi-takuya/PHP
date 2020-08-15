<?php

define("STATUS_OPENDED", "0"); // 定数の定義(完了)
define("STATUS_CLOSED", "1");  // 定数の定義(未完了)
define("TODO_LIST_CSV", "todo_list.csv");

define("TASK_MAX_LENGTH", 140);
define("MESSAGE_TASK_EMPTY", "タスクが未入力です");	// 文字数の上限設定
define("MESSAGE_TASK_MAX_LENGTH", "タスクが140文字を超えています。");	// エラーメッセージ
define("MESSAGE_ID_INVALID", "入力されたIDは不明です。");	// エラーメッセージ

function read_todo_list($ingres_closed = true) {
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

function get_new_to_do_id() {
	return count(read_todo_list()) + 1;
}

function add_todo_list($todo) {
	$handle = fopen(TODO_LIST_CSV, "a");
	fputcsv($handle, $todo);
	fclose($handle);
}

function write_todo_list($todo_list) {
	$handle = fopen(TODO_LIST_CSV, "w");
	foreach ($todo_list as $todo) {
		fputcsv($handle, $todo);
	}
	fclose($handle);
}

?>