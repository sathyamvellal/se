<html>

<head>
	<link href="../css/admin_request.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
session_start();

if ($_SESSION['is_logged_in'] == 0 || !strcmp ( $_SESSION['type'], 'user' )  )
{
    header("Location:index.php");
    die();
}

$id = $_GET['id'];
$path = "req.php?id=" .$id. "";

echo "<form action=$path method='post'>
		<div id=\"request_text\">
			Why do you want the source ?
		</div>
			<br>
			<textarea rows='6' cols='40' id='ta' name='ta'></textarea>
			<input type='submit' name='submit' id='submit' value='send'>
		</div>
	</form>";
?>

</body>

</html>