<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Portal</title>
  <link href="../css/admin_projects.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>

<script type="text/javascript">

</script>
</head>

<body >
<?php
session_start();
if ($_SESSION['is_logged_in'] == 0 || !strcmp ( $_SESSION['type'], 'user' )  )
{
    header("Location:index.php");
    die();
}
echo '
  <div id="header">
    <div id="navbar">
      <div id="project_title">Project Portal</div>
      <div id="menu_table_container">
          <table border="0">
            <tr>
              <td id="menu_col1"><a href="" id="aboutus">About Us</a></td>
              <td id="menu_col1"><a href="../logout.php" id="signout">Sign Out</a></td>
              <td id="menu_col1"><a href="../change_password.html" id="signout">Change Password</a></td>
          </table>
      </div>
    </div>
  </div>

  <div id="container">
    <div id="links_table_container">
      <table id="links_table" border="1" cellspacing="0.6" cellpadding="5">
        <tr>
          <td id="notifications_col"><a href="admin_notifications.php" id="notifications">Notifications</a></td>
        <tr>
        
        <tr>
          <td id="projects_col"><a href="admin_projects.php" id="projects">Projects</a></td>
        <tr>
        <tr>
          <td id="search_col"><a href="admin_search.php" id="search">Search</a></td>
        <tr>
        <tr>
          <td id="manage_users_col"><a href="admin_manage_users.php" id="manage_users">Manage Users</a></td>
        <tr>
        <tr>
          <td id="source_request_col"><a href="admin_source_request.php" id="source_requests">Source Code Requests</a></td>
        <tr>
      </table>
    </div>
    <div id="space_container">';
    $con=mysqli_connect("localhost","root","","projects");

if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM project WHERE review='1'");
if (mysqli_error($con))
{
   die(mysqli_error($con));
}

$i = 1;

while(($row = mysqli_fetch_array($result)) && ($i<4) )
{
  $name = $row['Name'];
  $path = "project_description.php?id=".$row['id']."";
  $id = $row['id']; 
  echo "<a href=$path id=\"prj_title\">$name</a>";
  echo "<br />";
  $file=fopen("../info".$id.".txt","r") or exit("Unable to open file!");
  echo "<div id=\"prj_description\" >";
  while(!feof($file))
  {
    echo fgets($file). "<br>";
  }
  echo "</div>";
  echo "<br />";
  $delete = "delete_project.php?id=".$row['id']."";
  echo "<a href=$delete id=\"admin_delete_button\"><input type='button' name='delete' id='delete' value='Delete'></a>";
  echo "<br />";

  $i = $i + 1;
  echo "<br /><hr/>";

}
mysqli_close($con);

    echo '</div>
  </div>';
?>
  </div>
</body>
</html>
