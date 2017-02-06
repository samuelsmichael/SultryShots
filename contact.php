
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
<div id="headerbox">
<img src="logo1.png" width="1024" height="155" border="0" alt="" usemap="#logo1_Map">
<map name="logo1_Map">
<area shape="rect" alt="" coords="843,69,974,101" href="contact.php">
<area shape="rect" alt="" coords="662,69,821,102" href="store.php">
<area shape="rect" alt="" coords="448,69,634,102" href="galleries.php">
<area shape="rect" alt="" coords="301,69,428,103" href="default.php">
</map>
</div>
<div id = "bodybox" align="center">
<br><br>
<form name="validation" onSubmit="return checkbae()" action="send_mail.php" method="post">
<table border="0" cellpadding="0" cellspacing="2">
<tr>
<td valign="bottom" align="right" nowrap>
First Name:
</td>
<td align="left">
<input type="text" name="fname" size="25">
</td>
</tr>
<tr>
<td valign="bottom" align="right">
Last Name:
</td>
<td align="left">
<input type="text" name="lname" size="25">
</td>
</tr>
<tr>
<td valign="bottom" align="right">
E-mail Address:
</td>
<td align="left">
<input type="text" name="email" size="25">
</td>
</tr>
<tr>
<td colspan="2">
<br><br>
Please enter your comments or questions below:
<br>
<textarea name="comments" cols="45" rows="7"></textarea>
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<font size ="-1"> ...or... </font>
<input type="reset" value="Clear Form">
<p><br>
</td>
</tr>
</table>
</form>

</div>
</div>
<div id="footerbox">
<br>&copy; <?php print(Date("Y")); ?> Alberto Leopizzi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Services by <a href="mailto:diamondsoftware222@gmail.com">Diamond Software</a>&nbsp;&nbsp;<a href="login.php"><img border="0" src="smiley.png"></a>
</body>
</html>
