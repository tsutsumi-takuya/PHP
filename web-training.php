<?php
$date = date("Y-m-d H:i:s");
$scores = [90,72,58,80];
$total = array_sum($scores);

$fp = fopen("score.csv", "r");
$score = [];
$line = fgetcsv($fp);
while ($line != false) {
	$score[] = $line;
	$line = fgetcsv($fp);
}
fclose($fp);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<title>PHP sample</title>
</head>
<body>
	<h3><?php echo $date; ?></h3>
	<h3>Scores</h3>
	<hr>

	<ul>
		<?php for ($i = 0; $i < count($scores); $i++) { ?>
		<li><?php echo $scores[$i]; ?></li>
		<?php } ?>
	</ul>

	<p>Total : <?php echo $total; ?></p>

	<hr>
	<table border="1">
		<tr>
			<th>Subject</th>
			<th>Name</th>
			<th>Score</th>
		</tr>

		<?php for ($i = 0; $i < count($score); $i++) { ?>

		<tr>
			<td><?php echo htmlspecialchars($score[$i][0]); ?></td>
			<td><?php echo htmlspecialchars($score[$i][1]); ?></td>
			<td><?php echo htmlspecialchars($score[$i][2]); ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>