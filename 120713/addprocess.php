<?php

if (isset($_GET['user'])) {
$user = $_GET['user'];
}

if (isset($_COOKIE["$user"]));
else
  header("Location: login.php");
?>

<?php

$image = $_FILES['userfile']['name'];
$image = preg_replace('/\..*$/','',$image);

if($image == NULL) echo "is null"; else echo "$image";
//die(); 

$title = $_POST['title'];
$title = preg_replace('/\..*$/','',$title);

$description = $_POST['description'];
$description = preg_replace('/\..*$/','',$description);

$uploaddir = "images/";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "";
} else {
    echo "Failure.";
}

	$ip = $_SERVER['REMOTE_ADDR'];
	if ($ip == "127.0.0.1")
	$conn = mysql_connect("localhost", "root", "miche11e");
	else
	$conn = mysql_connect("atouchofclass.db.6418905.hostedresource.com", "atouchofclass", "Miche!!e1357");
	//$conn = mysql_connect("localhost", "root", "miche11e");
	if(!$conn) die("Failed to connect to database!");
	$status = mysql_select_db('atouchofclass', $conn);
	if(!$status) die("Failed to select database!");

$title = mysql_real_escape_string($title);
$description = mysql_real_escape_string($description);

$sql = 'SELECT * FROM products order by productid desc limit 1';
$result = mysql_query($sql);
while ($row=mysql_fetch_array($result))
$productid = $row['productid'];

mysql_query 

("Insert Into products
		(
		image,
		title,
		description
				)
	Values
		(
		'$image',
		'$title',
		'$description'
		)");

//mysql_close();

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

<?php
echo "<div align='center'><font color='red'><b>The item has been added and appears as follows:</b></font><br><br><hr noshade size=1 width=800><br><br><table border='0' width='924'>
<tr><td colspan = '2' align='center'><h4><i>$title</i></h4><br></td></tr><tr><td width='300' align='center'><a href='images/$image.jpg' rel='floatboxGroup'><img border='0' src='images/$image.jpg' width='300' alt='$title'></a><br><font size='-2'>(Click Image to Enlarge - Click Again for Full Size)</font></td>";

echo "<td align='center'>$description<br><br>";
?>

</select><br><br>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="LJY46UVQUM4P8">
<input type="hidden" name="lc" value="US">
<?php echo"<input type=\"hidden\" name=\"item_name\" value=\"Item: (#$productid) $title \">"; ?>
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="cn" value="Add special instructions to the seller:">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
<input type="hidden" name="on0" value="Size"><font size="-1">Available as matte print or canvas wrap (Prices Include Shipping):</font><br><br><select name="os0">
	
<?php

$result = mysql_query('SELECT * from sizeprice order by price');
while($row = mysql_fetch_assoc($result))
{
$id = $row['id'];
$id = ($id-1);
$type = $row['type'];
$width = $row['width'];
$height = $row['height'];
$price = $row['price'];

echo "<option value='$type - $width&quot; x $height&quot;'>$type - $width&quot; x $height&quot;&nbsp;&nbsp;$$price USD</option>



";
}
?>

</select>

<!-- *************************************** -->
<input type="hidden" name="currency_code" value="USD">
<?php $result = mysql_query('SELECT * from sizeprice order by width, height');while($row = mysql_fetch_assoc($result))
{
$id = $row['id'];
$id = ($id-1);
$width = $row['width'];
$height = $row['height'];
$price = $row['price'];
echo"

<input type='hidden' name='option_select$id' value='$type - $width&quot; x $height&quot;'>
<input type='hidden' name='option_amount$id' value='$price'>";

}
?>
<!-- *************************************** -->
<br><br> 


<input type="hidden" name="option_index" value="0">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="LJY46UVQUM4P8">
<input type="image" src="view_cart.jpg" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<input type="hidden" name="display" value="1">
</form>

<?php
echo "</td></tr></table><br><hr noshade size=1 width=800></div>
";
?>

</div>
<div align='center'><?php echo"<a href='admin.php?user=$user'><font color='red'>Go to Admin Menu</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='default.php'><font color='red'>Go to Website</font></a></font>"; ?></div><br><br>
</body>
</html>
