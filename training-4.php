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
$sub = substr($str, 6); // substr関数(文字列の一部を返す) ※ substr(文字列,開始の位置)
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

<?php
$message = "ハローワールド";
$length = mb_strlen($message); // マルチバイト文字列関数(カタカナ,ひらがな,漢字) ※mb_strlen関数(文字列)
echo $length .PHP_EOL;
?>

<?php
$array = ["Andy","Betty","Carol"];
$length = count($array);	// count関数 => 配列の要素数をカウントする関数
echo $length;
?>

<?php
$array = ["Andy","Betty","Carol"];
$reversed_array = array_reverse($array);	// array_reverse関数 => 配列の要素の順番を逆にする関数
print_r($reversed_array);	// 配列の出力なのでprint_rでの出力になる
?>

<?php
$array = [10,20,30];
$sum = array_sum($array);	// array_sum関数 => 配列の要素数の合計を出す関数
echo $sum;
?>

<?php
$array = ["Andy","Betty","Carol"];
$sliced_array = array_slice($array, 1);	// array_slice関数(対象の配列,開始) => 配列の一部を展開する関数
print_r($sliced_array);
?>

<?php
$array = ["Andy","Betty","Carol"];
$sliced_array = array_slice($array, 1, 1);	// array_slice関数(対象の配列,開始,取得する要素数) => 配列の一部を展開する関数
print_r($sliced_array);
?>

<?php
$array = ["Betty","Carol","Andy"];
sort($array);	// sort関数 => アルファベット順に配列を並び替えてくれる関数(成功した場合はtrue,失敗した場合はfalse)
print_r($array);
?>

<?php
$scores = [90,72,58,80];
$sum = array_sum($scores);
echo $sum .PHP_EOL;
?>

<?php
$scores = [
	"English" => [90,72,58],
	"Math" => [80,82,78],
	"Science" => [94,66,80]
];
foreach ($scores as $key => $value) {
	$sum = array_sum($value);
	echo $key . ":" . $sum .PHP_EOL;
}
?>

<?php
$names = ["Carol","Andy","Betty","Daniel"];
sort($names);	// ["Andy","Betty","Carol","Daniel"]
$done = array_reverse($names);
var_dump($done);
?>

<?php
$names = ["Carol","Andy","Betty","Daniel"];
rsort($names);	// rsort関数 => sort関数を実行し尚且つ、array_reverse関数も付与する関数
var_dump($names);
?>

