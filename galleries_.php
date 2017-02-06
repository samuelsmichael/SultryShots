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

<script>

if (parent.frames.length > 0) {
    parent.location.href = self.document.location
}

</script>

</head>

<body>
<div id="container1">
<div id="headerbox">
<img src="logo1.png" width="1024" height="155" border="0" alt="" usemap="#logo1_Map">
<map name="logo1_Map">
<area shape="rect" alt="" coords="843,69,974,101" href="contact.php">
<area shape="rect" alt="" coords="662,69,821,102" href="store.php">
<area shape="rect" alt="" coords="448,69,634,102" href="galleries.php">
<area shape="rect" alt="" coords="301,69,428,103" href="default.php">
</map>
</div>
<div id = "bodybox">
<br><br>
<br><br>
<br><br>

<?php

$path = "webimages/";
$dir_handle = @opendir($path) or die("Unable to open $path");
$filecount = count(glob($path . "*.jpg"));
echo "<div style=\"width:724px; overflow-y:auto;\" align:\"center\"><table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" bgcolor=\"black\"><tr>";
while($file = readdir($dir_handle)) {
  if (substr($file, -3) == 'jpg') {
    echo "<td bgcolor=\"white\"><a href=\"galleries1.php?img=$file\" ><img style=\"border: 1px solid #000000; display: block;\" border=\"0\" src=\"webimages/$file\" width=\"133\"></a></td>";
} }
echo "</tr></table></div>";
closedir($dir_handle);

?>

</td></tr>
</table>
<div align="center">
<br>~~~ Click thumbnails to view larger image and purchase info. ~~~
</div>
</div>
</div>



<div id="footerbox">
<br>&copy; <?php print(Date("Y")); ?> Alberto Leopizzi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Services by <a href="http://www.robinbriggs.com">Robin Briggs</a>
</body>
</html>
