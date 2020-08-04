<?php
$name = "Andy";		// '='は代入演算子
$Name = "Betty";	// 代入演算子は上書きが行える
$NAME = "Carol";
echo $name;
echo $Name;
echo $NAME;
?>

<?php
$name = "Andy";		// '$name'は'Andy'
echo $name;			// Andy'
$name = "Betty";	// '$name'は'Betty'に変更
echo $name;			// 'Betty'
?>

<?php
$name = "Andy"; 	// '$name'は'Andy'
$age = 20;			// '$age'は'20'
echo "NAME:".$name;	// '$name'の表示
echo "AGE:".$age;	// '$age'の表示
?>

<?php
$price = 1000;
$discount = -100;
echo "PRICE :" .$price;
echo "DISCOUNT :" .$discount;
?>

