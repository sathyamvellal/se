<html>

<head>
	<link href="../css/request.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
session_start();
if ($_SESSION['is_logged_in'] == 0 )
{
    header("Location:index.php");
    die();
}

$username = $_SESSION['name'];
$ta = $_POST['ta'];

$id = $_GET['id'];

$con=mysqli_connect("localhost","root","","projects");

if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sql="INSERT INTO request (name, id, ta)
	  VALUES ('$username', '$id', '$ta')";
if (!mysqli_query($con,$sql))
{
	echo "<div id=\"already_requested\">";
	echo "You have already requested for this project";
	echo "<div>";

	echo "<a href=\"student_projects.php\" id=\"back_home\">";
	echo "Go Home";
	echo "</a>";
}
else
{
	echo "<div id=\"already_requested\">";
	echo "You have requested for project number ".$id;
	echo "</div>";

	echo "<a href=\"student_projects.php\" id=\"back_home1\">";
	echo "<div>";
	echo "Back";
	echo "</div>";
	echo "</a>";
}


?>
</body>



</html>