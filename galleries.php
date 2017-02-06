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

<script language=JavaScript>
<!--

//Disable right click script III- By Renigade (renigade@mediaone.net)
//For full source code, visit http://www.dynamicdrive.com

var message="";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>

<div id="container1">

<img src="logo1.png" width="1024" height="155" border="0" alt="" usemap="#logo1_Map">
<map name="logo1_Map">
<area shape="rect" alt="" coords="843,69,974,101" href="contact.php">
<area shape="rect" alt="" coords="662,69,821,102" href="store.php">
<area shape="rect" alt="" coords="448,69,634,102" href="galleries.php">
<area shape="rect" alt="" coords="301,69,428,103" href="default.php">
</map>

<div id="bodybox" align="center">
<br><br>
<br><br>

<?php

$path = "webimages/";
$dir_handle = @opendir($path) or die("Unable to open $path");
$filecount = count(glob($path . "*.jpg"));
echo "<div style=\"width:900px; overflow-x:auto;\"><table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" bgcolor=\"black\"><tr>";
while($file = readdir($dir_handle)) {
  if (substr($file, -3) == 'jpg') {
    echo "<td bgcolor=\"white\"><a href=\"galleries1.php?image=$file\"><img style=\"border: 1px solid #000000; display: block;\" border=\"0\" src=\"webimages/$file\" width=\"100\"></a></td>";
} }
echo "</tr></table></div>";
closedir($dir_handle);

?>

</td></tr>
<tr><td align="center" bgcolor="afafaf"><?php if ($filecount > 6); ?><img border="0" src="scroll.jpg"><br><font size="-1">(Click Images to Enlarge)
</td>
</tr>
</table>

</div>

</div>
<div id="footerbox">
<br>&copy; <?php print(Date("Y")); ?> Alberto Leopizzi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Services by <a href="mailto:diamondsoftware222@gmail.com">Diamond Software</a>&nbsp;&nbsp;<a href="login.php"><img border="0" src="smiley.png"></a>
</body>
</html>
