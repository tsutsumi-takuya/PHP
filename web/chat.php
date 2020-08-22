<?php
$file = "../data/chat.txt";
$messages = file($file, FILE_IGNORE_NEW_LINES);

if ($_SERVER["REQUEST_METHOD"] === "POST") { // REQUEST_METHOD(getかpostか判定)
	$message = (string)filter_input(INPUT_POST, "message");

	if ($message !== "") {
		$messages[] = $message;
		file_put_contents($file, $message . PHP_EOL, FILE_APPEND | LOCK_EX); // FILE_APPEND | LOCK_EX => ファイル追記と同時更新
	}
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<title>Chat sample</title>
</head>
<body>
	<h3>Chat</h3>
	<hr>
	<form action="chat.php" method="post">
		<input type="text" name="message">
		<input type="submit" value="Send">
	</form>
	<ul>
		<?php for ($i = 0; $i < count($messages); $i++) { ?>
		<li><?php echo htmlspecialchars($messages[$i], ENT_QUOTES); ?></li>
		<!-- htmlspecialchars関数 => html特殊文字を特別な文字列に置き換えてから出力 -->
		<!-- ENT_QUOTES => シングルクォーテーションもエスケープ出来る -->
	<?php } ?>
	</ul>
</body>
</html>