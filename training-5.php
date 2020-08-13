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

<?php
$dir = "hello";
mkdir($dir); // mkdir関数 => ディレクトリを作成する(make directory)
?>

<?php
$file = "hello.txt";
$handle = fopen($file, "r");	// fopen関数 => ファイルを開く関数 ※ "r"は読み込み

$line = fgets($handle);			// fgets関数 => ファイルポインタから1行目のデータを読み込む
echo $line;

fclose($handle);				// fclose関数 => ファイルポインタを削除してくれる
?>

<?php
$file = "hello.txt";
$handle = fopen($file, "r");
while (($line = fgets($handle)) !== false) { // $fileをfalseになるまで表示させる
	echo $line;
}
fclose($handle);
?>

<?php
$names = ["Andy","Betty"];
$file = "names.txt";
$handle = fopen($file, "w"); // fopen関数 => ファイルを開く関数 ※ "w"は書き込みモード
for ($i = 0; $i < count($names); $i++) {
	fwrite($handle, $names[$i] .PHP_EOL);
}
fclose($handle);
?>

<?php
$file = "hello.txt";
$handle = @fopen($file, "r"); // エラー表示を削除する為に@をfopen関数の前に付ける(エラー制御演算子)
if ($handle === false) {
	die("can't open file" .PHP_EOL); // die関数 => プログラムを自動終了
}
while (($line = fgets($handle)) !== false) { // $fileをfalseになるまで表示させる
	echo $line;
}
fclose($handle);
?>

<?php
$file = "score.txt";
$lines = file($file, FILE_IGNORE_NEW_LINES);
$total = array_sum($lines);
echo $total .PHP_EOL;

$handle = fopen($file, "r"); // 変数handleにファイルポインタを読み込んで代入
$line = fgets($handle);	// fgets関数を使用し、変数handleから1行のデータを読み込んで代入
$scores = [];	// 配列データへの代入
while ($line !== false) {
	$scores[] = trim($line); // trim関数 => 改行コードや半角スペースやタブ文字を削除する
	$line = fgets($handle);  // 2行目、3行目へとアクセスして行く
}
fclose($handle);

$total = array_sum($scores);
echo $total .PHP_EOL;
?>

<?php
$scores = [
	[90,88,80],
	[64,72,72,],
	[90,92,94]
];
$file = "score.csv";
$handle = fopen($file, "w");
for ($i = 0; $i < count($scores); $i++) {
	$score = $scores[$i];
	fputcsv($handle, $score); // fput関数 => CSVデータをimplode関数で変換する必要がなくなる
	// $line = implode(",", $score);
	// fwrite($handle, $line .PHP_EOL);
}
fclose($handle);
?>

<?php
$file = "score.csv";
$handle = fopen($file, "r");
# fgets($handle);
$scores = [];
$line = fgetcsv($handle); // fgets関数とexplode関数の処理をまとめて行う関数
while ($line !== false) {
	$scores[] = $line;
	$line =fgetcsv($handle);
}
fclose($handle);

// $lines = file($file, FILE_IGNORE_NEW_LINES);
// $scores = [];

// for ($i = 0; $i < count($lines); $i++) {
// 	$line = $lines[$i];
// 	$score = explode(",", $line);
// 	$scores[] = $score;
// }

$total = 0;
for ($i = 0; $i < count($scores); $i++) {
	$score = $scores[$i];
	for ($j = 0; $j < count($score); $j++) {
		$total = $total + $score[$j];
	}
}
echo $total;

?>

