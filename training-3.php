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
	["name" => "Andy", "age" => 20], // 連想配列
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

