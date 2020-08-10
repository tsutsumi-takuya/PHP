<?php
$dice = 6;

if($dice >= 4){
	echo "Win";
}
?>

<?php
$dice = 4;

if($dice >= 4){	// 条件分離(true)
	echo "Win";
} else {
	echo "No";	// 条件分離(false)
}
?>

<?php
$dice = 2;

if($dice >= 5){			// 条件分離(5以上または5の場合)
	echo "Win";
} else if($dice >= 3) {	// 条件分離(3以上または3の場合)
	echo "Draw";
} else if($dice >= 2) {	// 条件分離(2以上または2の場合)
	echo "Draw-2";
} else {				// 条件分離(それ以外)
	echo "Lose";
}
?>

<?php
$diceA = 4;
$diceB = 4;

if($diceA >= 4 && $diceB >= 4){ // 論理演算子(&& => 且、and)
	echo "Win";
} else {
	echo "Lose";
}
?>

<?php
$diceA = 4;
$diceB = 3;

if($diceA >= 4 || $diceB >= 4){ // 論理演算子(|| => または、or)
	echo "Win";
} else {
	echo "Lose";
}
?>

<?php
$dice = 4;

if(!($dice > 3)){ // 条件の否定(if($dive <= 3)と同義)
	echo "Win";
} else {
	echo "Lose";
}
?>

<?php
$diceA = 6;		// 整数型の代入
$diceB = "6";	// 文字列型の代入

if($diceA == $diceB){	// 型の相互変換が行われる
	echo "Win";
} else {
	echo "Lose";
}
?>

<?php
$diceA = 6;		// 整数型の代入
$diceB = "6";	// 文字列型の代入

if ($diceA === $diceB) { // 型の相互変換が行われない
	echo "Win";
} else {
	echo "Lose";
}
?>

<?php
$diceA = 6;		// 整数型の代入
$diceB = "6";	// 文字列型の代入

$diceC = (int)$diceB; // データ型の変換(キャスト) ※文字列型から整数型(int)に変換

if ($diceA === $diceC) {
	echo "Win";
} else {
	echo "Lose";
}
?>

<?php
$names = ["Andy","Betty","Carol"];

for ($i = 0; $i < 3; $i++) {
	if ($names[$i]!= "Andy") { // 配列の要素が"Andy"ではない場合
		echo "Hello ";
		echo $names[$i] .PHP_EOL;
	}
}
?>

<?php
$score = $argv[1];	// "$argv" => コマンドライン引数
echo $score .PHP_EOL;
var_dump($argv);
?>

<?php
$score = $argv[1];	// "$argv" => コマンドライン引数

if ($score >= 80) {
	echo "$score : A" .PHP_EOL;
} else if ($score >= 60) {
	echo "$score : B" .PHP_EOL;
} else {
	echo "$score : C" .PHP_EOL;
}
?>

<?php
$scores = [90,72,58,80];

for ($i = 0; $i < count($scores); $i++) {
	$score = $scores[$i];
		if ($score >= 80) {
			echo "$score : A" .PHP_EOL;
		} else if ($score >= 60) {
			echo "$score : B" .PHP_EOL;
		} else {
			echo "$score : C" .PHP_EOL;
		}
	}
?>

<?php
$id = $argv[1];
$password = $argv[2];

if ($id === "Andy" && $password === "password") {
	echo "Clear" .PHP_EOL;
} else {
	echo "Error" .PHP_EOL;
}
?>

