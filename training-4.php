<?php
$str = "Hello World";
$length = strlen($str);	// strlen関数(バイト数のカウント) ※スペースや改行も含まれるので注意
echo $length .PHP_EOL;
?>

<?php
$str = "Hello World";
$lower_case = strtolower($str); // strlower関数(変数の値を全て小文字に変換する)
echo $lower_case .PHP_EOL;
?>

<?php
$str = "Hello World";
$oupper_case = strtoupper($str); // strtoupper関数(変数の値を全て大文字に変換する)
echo $oupper_case .PHP_EOL;
?>

<?php
$str = "Hello World";
$sub = substr($str, 6); // substr関数(文字列の一部を返す) ※substr(変数名,開始の位置)
echo $sub .PHP_EOL;
?>

<?php
$str = "Hello World"; // substr関数(文字列の一部を返す) ※substr(変数名,開始の位置,開始位置からの文字数)
$sub = substr($str, 6, 3);
echo $sub .PHP_EOL;
?>

