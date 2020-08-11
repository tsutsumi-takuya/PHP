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
$sub = substr($str, 6); // substr関数(文字列の一部を返す) ※ substr(変数名,開始の位置)
echo $sub .PHP_EOL;
?>

<?php
$str = "Hello World"; // substr関数(文字列の一部を返す) ※ substr(変数名,開始の位置,開始位置からの文字数)
$sub = substr($str, 6, 3);
echo $sub .PHP_EOL;
?>

<?php
$str = "Andy,Betty,Carol";		// 文字列(string型)を定義
$array = explode(",", $str);	// explode関数(文字列を配列に変換する) ※ explode(区切り文字,変換対象の文字列)
print_r($array);				// 配列はechoでは出力できない為、print_f関数で出力
?>

<?php
$array = ["Andy","Betty","Carol"];	// 配列の定義
$str = implode("-", $array);		// implode関数(配列を文字列に変換する) ※ implode(区切り文字,変換対象の配列)
echo $str .PHP_EOL;
?>

<?php
$colors = ["Red","Green","Blue"];
for ($i = 0; $i < count($colors); $i++) {
	echo strtoupper($colors[$i]) .PHP_EOL;
}
?>

<?php
$colors = ["Red","Green","Blue"];
for ($i = 0; $i < count($colors); $i++) {
	echo substr($colors[$i], 0, 1) .PHP_EOL;
}
?>

<?php
$str = "Hyper-Text-Markup-language";
$array = explode("-", $str);
for ($i = 0; $i < count($array); $i++) {
	echo substr($array[$i], 0, 1);
}
?>

