
<?php

if (isset($_GET['user'])) {
$user = $_GET['user'];
}

if (isset($_COOKIE["$user"]));
else
  header("Location: login.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<title>Sultry Shots</title>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="description" content="Sultry Shots" />	
<meta name="keywords" content="" />
<meta name="revisit" content="1 days" />
<meta name="robots" content="index, follow" />

<link rel="stylesheet" type="text/css" href="main.css" />

<link type="text/css" rel="stylesheet" href="floatbox/floatbox.css" />
<script type="text/javascript" src="floatbox/floatbox.js"></script>

<script>

if (parent.frames.length > 0) {
    parent.location.href = self.document.location
}

</script>

</head>

<body>

<div id="container1">

<img src="logo1.png" width="1024" height="155" border="0" alt="" usemap="#logo1_Map">


<map name="logo1_Map">
<area shape="rect" alt="" title="" coords="272,66,454,103" href="default.php" target="" />
<area shape="rect" alt="" title="" coords="454,66,797,103" href="galleries2.php" target="" />
<area shape="rect" alt="" title="" coords="799,66,993,104" href="contact.php" target="" />
</map>

<div id="bodybox" align="center">
<br>
<h1><font color='red'>Add New Product</font></h1>
<br><br>


<?php echo"<form enctype='multipart/form-data' action='addprocess.php?user=$user' method='POST'>"; ?>
<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
<br><br>

Item Title: <input name = "title" type="text">
<br><br>
Item Description: <input name = "description" type = "text">
<br><br>
Image: <input name="userfile" type="file" />
<br><br>
<input type="submit" value="Submit" />

</form>



</div>
<div align='center'><?php echo"<a href='admin.php?user=$user'><font color='red'>Go to Admin Menu</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='default.php'><font color='red'>Go to Website</font></a></font>"; ?></div><br><br>
</div>
</body>
</html>
