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
$dice = 4;
if($dice >= 5){			// 条件分離(5以上の場合)
	echo "Win";
} else if($dice >= 3) {	// 条件分離(3以上の場合)
	echo "Draw";
} else {				// 条件分離(それ以外)
	echo "Lose";
}
?>

