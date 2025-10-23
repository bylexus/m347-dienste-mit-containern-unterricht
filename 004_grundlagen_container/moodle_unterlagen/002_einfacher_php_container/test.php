<?php
// Spaghetti-Code, vom Feinsten :-)
// Zeigt ein kleines Formular, und beim Absenden eine
// Willkommens-Nachricht.
if (empty($_POST['name'])):
?>
<!DOCTYPE html>
<html lang="de">

<head>
	<title>Hallo, PHP-Welt!</title>
</head>

<body>
	<h1>Hallo, PHP-Welt!</h1>
	<p>Es ist genau <?php echo date('d.m.Y H:i:s');?>.
	<form action="test.php" method="POST">
		<label for="name">Dein Name:</label>
		<input id="name" name="name" />
		<button type="submit">Absenden</button>
	</form>
	<p><img src="./php-logo.png" width="250"></p>
</body>
</html>
<?php
else:
?>
<!DOCTYPE html>
<html lang="de">

<head>
	<title>Hallo, PHP-Welt!</title>
</head>

<body>
	<h1>Hallo, <?php echo $_POST['name']; ?>!</h1>
	<p>Schön, dich zu sehen. Es ist genau <?php echo date('d.m.Y H:i:s');?>.
	<p><a href="test.php">Zurück!</a></p>
	<p><img src="./php-logo.png" width="250"></p>
</body>
</html>
<?php
endif;
