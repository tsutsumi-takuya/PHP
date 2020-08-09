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

<?php
$names = [];
$count = count($names);	// count関数の使用(int型で返す)
echo $count;	// $countの表示を行う
?>

<?php
$names = ["Andy","Betty","Carol"];
$names[] = "Dave";	// 配列の追加($names[3]に代入される)
$count = count($names);
echo count($names);
?>

<?php
$names = ["Andy","Betty","Carol"];
$names[1] = "Dave";	// 配列の要素の変更($name[1]"Betty" => $name[1]"Dave")
echo $names[0];
echo $names[1];
echo $names[2];
?>

<?php
$names = ["Andy","Betty","Carol"];
$names[3] = "Dave";	// 配列の要素の変更($name[1]"Betty" => $name[1]"Dave")
var_dump($names);	// $names[3]に"Dave"が自動追加される
?>

<?php
$names = ["Andy","Betty","Carol"];
$names[0] = $names[2];	// "Andy"に"Carol"の配列の代入を行う
$names[2] = $names[0];	// "Andy"を出力したいが代入されている為、"Carol"が表示されてしまう
var_dump($names);
?>

<?php
$names = ["Andy","Betty","Carol"];
$temp = $names[0];		// $name[0]を一度"$temp"に退避させる
$names[0] = $names[2];	// 退避後、配列の変更を行う
$names[2] = $temp;		// 退避していた"$temp"を代入
var_dump($names);
?>

<?php
$names = ["Andy","Betty","Carol"];
$names[1] = "";	// 配列の要素数は変わらず""が代入されてしまう
var_dump($names);
?>

<?php
$names = ["Andy","Betty","Carol"];
unset($names[1]);	// unset関数を使用し$names[1]を削除(※要素は削除できるが要素番号に空きが出てしまう)
var_dump($names);
?>

<?php
$names = ["Andy","Betty","Carol"];
array_splice($names, 1, 1);	// array_splice関数(削除対象の配列,削除対象の要素番号,削除対象の要素数)を使用
var_dump($names);
?>

<?php
$points = [10,20,30];
$total = $points[0]+$points[1]+$points[2];
echo $total;
?>

<?php
$colors = [];
$colors[] = "Red";
$colors[] = "Green";
$colors[] = "Blue";
var_dump($colors);
?>

<?php
$colors = ["Red","Green","Blue"];
array_splice($colors, 0, 1);
var_dump($colors);
?>

<?php
$i = 0;
while($i < 3){
	echo $i . PHP_EOL;	// 改行コード(PHP_EOL)
	$i++;
}
?>

<?php
$i = 0;
while($i <= 0){
	echo $i . PHP_EOL;
	$i++;
}
?>

<?php
$i = 0;
while($i > 5){
	echo $i . PHP_EOL;	// 改行コード(PHP_EOL)
	$i++;
}
?>

<?php
$i = 3;		// $i => カウンター変数の初期値を設定する
while($i > 0){
	echo $i . PHP_EOL;
	$i--;	// $i => カウンター変数を増加(減少)する
}
?>

<?php
$names = ["Andy","Betty","Carol"];	// 配列の設定
$i = 0;	// $i => カウンター変数の初期値を設定する
while($i < count($names)){	// 反復条件は'count関数'で設定も行える
	echo "Hello ";
	echo $names[$i] . PHP_EOL;	// 配列($names)を要素番号($i)で出力
	$i++;
}
?>

<?php
$names = ["Andy","Betty","Carol"];
for($i = 0; $i < count($names); $i++){ //(初期化処理; 反復条件; 増減処理)
	echo "Hello ";
	echo $names[$i] . PHP_EOL;
}
?>

