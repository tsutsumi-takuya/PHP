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

