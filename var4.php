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

<?php
$a = 10;	// 10進数
$b = 0b10;	// 2進数(先頭に'0b'を付与)
$c = 010;	// 10進数(先頭に'0'を付与)
$d = 0x10;	// 16進数(先頭に'0x'を付与)
echo $a;
echo ",";
echo $b;
echo ",";
echo $c;
echo ",";
echo $d;
?>

