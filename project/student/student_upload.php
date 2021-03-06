<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Portal</title>
	<link href="../css/upload.css" rel="stylesheet" type="text/css">
	<!--<link href="css/admin_search.css" rel="stylesheet" type="text/css">
	<link href="css/student.css" rel="stylesheet" type="text/css">-->
	<link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>
	
<script type="text/javascript">

function selected(cb){

	if(cb.checked == true)
		document.getElementById("tobe_hidden").style.visibility = "visible";
	else
		document.getElementById("tobe_hidden").style.visibility = "hidden";
}

</script>


</head>
<body >
	<div id="test">
		<div id="title">Project Portal</div>
		<table id="menu_table" border="0">
			<tr>
				<td id="c1"><a href="student_projects.php" id="home">Home</a></td>
				<td id="c4"><a href="../logout.php" id="signout">Sign Out</a></td>
				<td id="c4"><a href="../change_password.html" id="signout">Change Password</a></td>
			</tr>
		</table>	
	</div>

	
		<div id="signup_text">Upload</div>
		<form action="upload_file.php" method="post" enctype="multipart/form-data">
		<table id="table" border="0">
			<tr>
					<td id="col1">Project Title<sup id="required">*</td>
					<td id="col2"><input type="text" id="project_title" name="title"></td>
				</tr>
				<tr>
					<td id="col1">Authors<sup id="required">*</td>
					<td id="col2"><input type="text" id="authors" name="authors"/></td>
				</tr>
				<tr>
					<td id="col1">Guide<sup id="required">*</td>
					<td id="col2"><input type="text" id="guide" name="guide" /></td>
				</tr>
				<tr>
					<td id="col1">Year<sup id="required">*</td>
					<td id="col2"><input type="text" id="year" name="year"/></td>
				</tr>
				<tr>
					<td id="col1" >Programming<br>Languages Used<sup id="required">*</td>
					<td id="col2"><input type="text" id="languages" name="languages" /></td>
				</tr>
				<tr>
					<td id="col1">Domain<sup id="required">*</td>
					<td id="col2"><input type="text" id="domain" name="domain"/></td>
				</tr>
				</tr>
				<tr>
					<td id="col1">Upload Info File<sup id="required">*</td>
					<td id="col2"><input type="file" id="info" required name="info" style="text-align: center"></td>
				</tr>
				<!--<tr>
					<td id="col1">Email-Id<sup id="required">*</td>
					<td id="col2"><input type="text" id="email" placeholder="some@example.com"/></td>
				</tr>-->

				<tr>
					<td id="col1">Completed?</td>
					<td id="col2"><input type="checkbox" id="check" onchange="selected(this)" name="check" value="1"/></td>
				</tr>
				<tr id="tobe_hidden">
					<td id="col1">Upload Project<sup id="required">*</td>
					<td id="col2"><input type="file" id="file" name="file" style="text-align: center"></td>
				</tr>
				<tr>
					<td id="col1"></td>
					<td id="col2"><input type="submit" onClick="upload()" value="Upload" style="font-size:1em; width: 50%; position: relative; left: 40%;" id="upload_button"/></td>
				</tr>
		</table>
	</form>
		<div id="required_text">* Marked Details Required</div>
	
</body>


</html>