<?php
$str = "Hello World" .PHP_EOL;
$file = "hello.txt";
file_put_contents($file, $str);	// file_put_contents関数(ファイル名,出力データ) => 文字列をファイルに書き込む関数
?>

<?php
$str = "Hello PHP" .PHP_EOL;
$file = "hello.txt";
file_put_contents($file, $str);	// file_put_contents関数はデフォルトで上書き保存される
?>

<?php
$str = "Hello World" .PHP_EOL;
$file = "hello.txt";
file_put_contents($file, $str, FILE_APPEND);	// FILE_APPEND定数を指定 => ファイルに追記する
?>

<?php
$file = "hello.txt";
$str = file_get_contents($file);	// file_get_contents関数(変数ファイル名) => ファイルの内容を文字列に読み込む関数
echo $str;
?>

<?php
$file = "hello.txt";
$array = file($file);	// file関数(変数名) => ファイルの内容を読み込んで配列に格納する関数
print_r($array);
?>

<?php
$file = "hello.txt";
$array = file($file, FILE_IGNORE_NEW_LINES);	// FILE_IGNORE_NEW_LINES定数を指定 => 各行の終端の改行コードを無視する
print_r($array);
?>

