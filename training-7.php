<?php
$subject = $_POST["subject"];
$name = $_POST["name"];
$score = $_POST["score"];

$line = "$subject,$name,$score" . PHP_EOL;
file_put_contents("score.csv", $line, FILE_APPEND | LOCK_EX); // 定数の組み合わせ
header("Location: web-training.php");

