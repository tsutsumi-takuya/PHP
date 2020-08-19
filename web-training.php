<?php
$date = date("Y-m-d H:i:s");
$scores = [90,72,58,80];
$total = array_sum($scores);
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
</body>
</html>