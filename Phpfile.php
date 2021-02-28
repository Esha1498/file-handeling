<!DOCTYPE html>
<html>
<head>
	<title>PHP File Example</title>
</head>
<body>

	<h1>PHP File Example</h1>

	<?php

		$filePath = "file.txt";

		echo readfile($filePath);

		echo "<br>";

		echo fopen($filePath, "a");

		echo "<br>";




		$f = fopen($filePath, "a");

		fwrite($f, "\ndef");

		fclose($f);

		
		

	?>

</body>
</html>