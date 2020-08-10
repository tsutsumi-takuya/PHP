<?php
$student = ["name" => "Andy", "age" => 20]; // 連想配列(ダブルアロー演算子を使用)
echo $student["name"] .PHP_EOL;
echo $student["age"] .PHP_EOL;
?>

<?php
$student = ["name" => "Andy", "age" => 20];
$student["height"] = 180;
echo $student["height"] .PHP_EOL; // 連想配列で"$student"に配列の追加を行う
?>

<?php
$student = ["name" => "Andy", "age" => 20];
$student["height"] = 180;
echo count($student) .PHP_EOL; // 連想配列で"$student"に配列の追加を行う
?>

<?php
$student = ["name" => "Andy", "age" => 20];
$student["age"] = 21; // "age"配列の値を更新する
echo $student["age"]; // 更新後の値の表示
?>

<?php
$student = ["name" => "Andy", "age" => 20];
unset($student["age"]); // unset関数を使用し"age"配列の削除を行う
var_dump($student);		// $student変数の表示
?>

<?php
$students = [ // 添字配列
	["name" => "Andy", "age" => 20], // 連想配列(文字列と値で管理)
	["name" => "Betty", "age" => 19],
	["name" => "Carol", "age" => 21]
];

for ($i = 0; $i < count($students); $i++) {
	if ($students[$i]["age"] >= 20) { // "age"配列が条件に該当する配列のみ表示
		echo "Hello ";
		echo $students[$i]["name"] .PHP_EOL; // "name"配列の表示
	}
}
?>

<?php
$score = ["English" => 90, "Math" => 88, "Science" => 80];
$total = $score["English"] + $score["Math"] + $score["Science"];
echo $total;
?>

<?php
$score = ["English" => 90, "Math" => 88, "Science" => 80];
$total = 0;

foreach ($score as $key => $value) { // foreach ($variable as $key => $value){} ※ $variableに配列データ、$keyと$valueは好きに決めて良い
	$total = $total + $value;
}
echo $total .PHP_EOL;
?>

<?php
$scores = [ // 二次元配列(配列の中の要素がまた配列になっている)
	["English" => 90, "Math" => 88, "Science" => 80], // 連想配列(文字列と値で管理)
	["English" => 64, "Math" => 72, "Science" => 72],
	["English" => 90, "Math" => 92, "Science" => 94]
];

$math_total = 0;
for ($i = 0; $i < count($scores); $i++) {
	$score = $scores[$i];
	$math_total= $math_total + $score["Math"];
}
echo $math_total .PHP_EOL;
?>

<?php
$countries = [
	"Japan" => ["Tokyo", "Osaka", "Nagoya"], // 連想配列(文字列と値で管理)
	"England" => ["London", "Birmingham", "Glasgow"],
	"France" => ["Paris", "Marseille", "Lyon"]
];

$cities = $countries["England"];
for ($i = 0; $i < count($cities); $i++) {
	echo $cities[$i] .PHP_EOL;
}
?>

