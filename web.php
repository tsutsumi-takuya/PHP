<?php
$name = ["Andy","Betty","Carol"];
$date = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<title>PHP sample</title>
</head>

<body>

	<h1>Names</h1>
	<ul>
		<li><?php echo $name[0]; ?></li>
		<li><?php echo $name[1]; ?></li>
		<li><?php echo $name[2]; ?></li>
	</ul>
	<hr>
	<p><?php echo $date; ?></p>

	<h1>Names</h1>
	<ul>
		<?php
		for ($i = 0; $i < count($name); $i++) {
		?>
		<li><?php echo $name[$i]; ?></li>
		<?php
		}
		?>
	</ul>
	<hr>
	<p><?php echo $date; ?></p>

</body>
</html>