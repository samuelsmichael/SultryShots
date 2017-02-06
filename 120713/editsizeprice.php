<?php

if (isset($_GET['user'])) {
$user = $_GET['user'];
}

if (isset($_COOKIE["$user"]));
else
  header("Location: login.php?user=$user");
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
<h1><font color='red'>Edit Size/Price Chart</font></h1>
<br><br>

<?php
echo "
<table width='500' border='0' cellpadding='4' cellspacing='0' style='font-family: arial; font-size:10pt'>

<tr>
<th align='center'>ID</th>
<th align='center'>Type</th>
<th align='center'>Width</th>
<th align='center'>Height</th>
<th align='center'>Price</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>";

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

$db_selected = mysql_select_db("atouchofclass", $con);
if (!$db_selected) {
     die (mysql_error());
}

$sql =

"select		*
from		sizeprice order by price";

$result=mysql_query($sql);

$numrows = mysql_num_rows($result);
$rows = ($numrows + 1);

$i=0;

$bg=1;

while ($i < $numrows)
{

$id=mysql_result($result, $i, "id");
$type=mysql_result($result, $i, "type");
$width=mysql_result($result, $i, "width");
$height=mysql_result($result, $i, "height");
$price=mysql_result($result, $i, "price");

if( $bg == 1){
        echo "<tr bgcolor=#e1e1e1>";
        $bg=2;
    }else{
        echo "<tr bgcolor=#ffffff>";
        $bg=1;
    }

echo "<form action  = 'editsizepriceprocess.php'>
<tr>
<td align=\"center\">$id</td>
<td align=\"center\"><input type='text' name='type' value='$type' size='11'></td>
<td align=\"center\"><input type='text' name='width' value='$width' size='3'></td>
<td align=\"center\"><input type='text' name='height' value='$height' size='3'></td>
<td align=\"center\"><input type='text' name='price' value='$price' size='3'></td>
<td align='center'><input type='submit' value='Edit Item'>
<input type='hidden' name='action' value='edit'>
<input type='hidden' name='user' value='$user'>
<input type='hidden' name='id' value='$id'>
</form></td>
<td align='center'><a href='editsizepriceprocess.php?action=delete&user=$user&id=$id'>Delete Item</a></td>
</tr>";

$i++;
};

$id = ($id + 1);
?>

<form action='editsizepriceprocess.php'>
<tr><th colspan='6' align='center'>Add New Item</th>
<tr>
<td>&nbsp;</td>
<td align='center'><input type='text' name='type' size='11'></td>
<td align='center'><input type='text' name='width' size='3'></td>
<td align='center'><input type='text' name='height' size='3'></td>
<td align='center'><input type='text' name='price' size='3'></td>
<td align='center' width='1'><input type='submit' value='Add New Item'></td>
<td>&nbsp;</td>
</tr>
<?php echo"<input type='hidden' name='action' value='add'>
<input type='hidden' name='user' value='$user'>
</form>
</table>
</div>
<div align='center'><a href='admin.php?user=$user'><font color='red'>Go to Admin Menu</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='default.php'><font color='red'>Go to Website</font></a></font></div><br><br>
"; ?>

</div>
</body>
</html>