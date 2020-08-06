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

<?php // 整数型(intger,int)
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

<?php // 浮動小数点型(float,double)
$price = 1000;
$tax = 1.10;
echo $price * $tax; // ２つの変数の掛け算
?>

<?php // 文字列型
$name = "Andy";		// 文字列型は" "か' 'で囲む
echo $name;
$name2 = 'Betty';	// 文字列型は" "か' 'で囲む
echo $name2;
?>

<?php // 変数展開
$name = "Andy";
$message1 = 'Hello $name';	// ''で文字列として表示(埋め込みなし)
echo $message1;
$message2 = "Hello $name";	// " "で変数を埋め込んで表示
echo $message2;
?>

<?php // 論理型(boolean,bool)
$name = "Andy";
$student = true;	// 真偽は" "等はいらない
echo $name;
echo ",";
echo $student;		// 論理データはecho命令で出力するとtrueの場合"1"、falseの場合" "(空文字)に変換されてしまう
echo ",";
var_dump($student);	// var_dump関数での表示を行う(変数の中のデータと型を確認)
?>

<?php
$price = 1000;
$count = 10;
$toptal_price = $price * $count;
echo $toptal_price;
?>

<?php
$x = 5;
$y = 2;
$z = $x + $y;	// 四則演算
echo $z;
echo ",";
$z = $x - $y;	// 四則演算
echo $z;
echo ",";
$z = $x * $y;	// 四則演算
echo $z;
echo ",";
$z = $x / $y;	// 四則演算
echo $z;
echo ",";
$z = $x % $y;	// 余り表示
echo $z;
echo ",";
$z = $x ** $y;	// 累乗
echo $z;
?>

<?php
$age = 20;
$age = $age + 1; // $ageは20
echo $age;		 // 20 + 1
?>

<?php
$age = 20;
$age ++;	// インクリメント(加算子)
echo $age;
?>

<?php
$age = 20;
$age --;	// デクリメント(減算子)
echo $age;
?>

<?php
$message = "Hello ";
$name = "Andy";
$message = $message . $name; // 文字列演算子
echo $message;
?>

