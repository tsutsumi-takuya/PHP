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

