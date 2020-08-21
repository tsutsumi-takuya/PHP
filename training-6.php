<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $x + $y;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP sample</title>
</head>
<body>
	<h3>Calc</h3>
	<hr>
	<p>
		<?php echo $x; ?>
		+
		<?php echo $y; ?>
		=
		<?php echo $z; ?>
	</p>
</body>
</html>