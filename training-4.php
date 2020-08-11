<?php
$str = "Hello World";
$length = strlen($str);	// strlen関数(バイト数のカウント) ※スペースや改行も含まれるので注意
echo $length .PHP_EOL;
?>

<?php
$str = "Hello World";
$lower_case = strtolower($str); // strlower関数(変数の値を小文字に変換する)
echo $lower_case .PHP_EOL;
?>

