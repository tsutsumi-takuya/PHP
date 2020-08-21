<?php
$subject = $_GET["subject"];
$fp = fopen("score.csv", "r");
$scores = [];
$line = fgetcsv($fp);
while ($line !== false) {
	if ($subject === $line[0]){
		$scores[] = $line;
	}
	$line = fgetcsv($fp);
}
fclose($fp);
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP sample</title>
</head>
<body>
	<h3>Scores</h3>
	<hr>
	<table border="1">
			<tr>
				<th>Subject</th>
				<th>Name</th>
				<th>Score</th>
			</tr>
		<?php for ($i = 0; $i < count($scores); $i++) { ?>
			<tr>
				<td><?php echo $scores[$i][0]; ?></td>
				<td><?php echo $scores[$i][1]; ?></td>
				<td><?php echo $scores[$i][2]; ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>