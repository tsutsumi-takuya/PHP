<?php
$message = "PHP Training";
echo $message;
?>

<?php
$color1 = "Red";
echo $color1;
echo ",";
$color2 = "Green";
echo $color2;
echo ",";
$color3 = "Blue";
echo $color3;
?>

<?php
$price = 100;
$count = 3;
$tax = 1.1;
$total = $price * $count * $tax;
echo $total;
?>

<?php
$names = ["Andy","Betty","Carol"];	// 配列
echo "Hello ";
echo $names[0];	// 配列変数の指定([インデックス])
echo "Hello ";
echo $names[1];	// 配列変数の指定([インデックス])
echo "Hello ";
echo $names[2];	// 配列変数の指定([インデックス])
?>

<?php
$names = ["Andy","Betty","Carol"];
$count = count($names);	// count関数の使用(int型で返す)
echo $count;	// $countの表示を行う
?>

