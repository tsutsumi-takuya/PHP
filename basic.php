<?php
echo "Hello PHP";
// 改行はコンソールに反映される
?>

<?php
echo "Hello PHP";
// PHPは終了タグを省略するのが一般的である
// この際は改行はコンソールに反映されない
?>

<?php
$name = "Andy"; // 変数を設定'$'を必ず記載
echo "Hello";
echo $name; // 変数に代入
?>

<?php
$name = "Andy";
// name = "Andy"; '$'がないので使用出来ない
$name2 = "Betty";  // $2name = "Betty"; '$'の直後に数字を使うことが出来ない
$all_names = $name . $name2; // $all-names = $name . $name2; 変数名にハイフンは使用出来ない
echo $all_names;
?>


