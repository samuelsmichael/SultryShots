<?php

if (isset($_GET['user'])) {
$user = $_GET['user'];
}

if (isset($_COOKIE["$user"]));
else
  header("Location: login.php");
?>

<?php
$id = $_GET['id'];

$ip = $_SERVER['REMOTE_ADDR'];
if ($ip == "127.0.0.1")
$con = mysql_connect("localhost", "root", "miche11e");
else
$con = mysql_connect("atouchofclass.db.6418905.hostedresource.com", "atouchofclass", "Miche!!e1357");
if (!$con) {
     die(mysql_error());

}

$db_selected = mysql_select_db("atouchofclass", $con);
if (!$db_selected) {
     die (mysql_error());
}

$query =

"select		*
from		products
where		productid = $id";

$result = mysql_query($query);

$numrows = mysql_num_rows($result);

if ($numrows == 0) echo "<script>location.href=\"default.php\";</script>";

$i=0;

$title = mysql_result($result, $i, "title");
$description = mysql_result($result, $i, "description");
$image = mysql_result($result, $i, "image");
$id = mysql_result($result, $i, "productid");

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
<h1><font color='red'>Edit Item <?php echo "#$id"; ?></font></h1>
<br><br>


<?php echo"<form enctype='multipart/form-data' action='editprocess.php?user=$user&id=$id' method='POST'>"; ?>
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
<br><br>

<?php
echo "Edit Item Title: <input name = 'title' type='text' value='$title' size='50'>
<br><br>
Edit Item Description: <textarea name='description' cols='40' rows='2'>
$description
</textarea>
<br><br>
Edit Image (select only if you are changing the existing image): <input name='userfile' type='file'>";
?>
<br><br>
<input type="submit" value="Submit" />

</form>



</div>
<div id="footerbox">
<br>&copy; <?php print(Date("Y")); ?> Alberto Leopizzi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Services by <a href="http://www.robinbriggs.com">Robin Briggs</a>
</body>
</html>
