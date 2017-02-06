
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
	//Include the PS_Pagination class
	include('ps_pagination.php');
	
	//Connect to mysql db
	
	$ip = $_SERVER['REMOTE_ADDR'];
	if ($ip == "127.0.0.1")
	$conn = mysql_connect("localhost", "root", "miche11e");
	else
	$conn = mysql_connect("atouchofclass.db.6418905.hostedresource.com", "atouchofclass", "Miche!!e1357");
	//$conn = mysql_connect("localhost", "root", "miche11e");
	if(!$conn) die("Failed to connect to database!");
	$status = mysql_select_db('atouchofclass', $conn);
	if(!$status) die("Failed to select database!");
	$sql = 'SELECT * FROM products order by productid desc';
$result = mysql_query($sql);


	/*
	 * Create a PS_Pagination object
	 * 
	 * $conn = MySQL connection object
	 * $sql = SQl Query to paginate
	 * 10 = Number of rows per page
	 * 5 = Number of links
	 * "param1=valu1&param2=value2" = You can append your own parameters to paginations links
	 */
	$pager = new PS_Pagination($conn, $sql, 5, 5, "param1=valu1&param2=value2");
	
	/*
	 * Enable debugging if you want o view query errors
	*/
	$pager->setDebug(true);
	
	/*
	 * The paginate() function returns a mysql result set
	 * or false if no rows are returned by the query
	*/
	$rs = $pager->paginate();
	if(!$rs) die(mysql_error());
	while($row = mysql_fetch_assoc($rs)) {

$productid = $row['productid'];
$title = $row['title'];
$description = $row['description'];
$image = $row['image'];

echo "<div align='center'><table border='0' width='924'>
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
<input type="hidden" name="on0" value="Size"><font size="-1">Available Sizes (Prices Include Shipping): </font><select name="os0">
	
<?php

$result = mysql_query('SELECT * from sizeprice order by width, height');
while($row = mysql_fetch_assoc($result))
{
$id = $row['id'];
$id = ($id-1);
$width = $row['width'];
$height = $row['height'];
$price = $row['price'];

echo "<option value='$width&quot; x $height&quot;'>$width&quot; x $height&quot;&nbsp;&nbsp;$$price USD</option>



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

<input type='hidden' name='option_select$id' value='$width&quot; x $height&quot;'>
<input type='hidden' name='option_amount$id' value='$price'>";

}
?>
<!-- *************************************** -->
<br><br> 


<input type="hidden" name="option_index" value="0">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<br><form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="LJY46UVQUM4P8">
<input type="image" src="view_cart.jpg" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<input type="hidden" name="display" value="1">
</form>

<?php
echo "</td></tr></table><br><hr noshade size=1 width=800></div>
";
	}
	
	//Display the full navigation in one go
	echo"<div align=\"center\">";
	echo $pager->renderFullNav();
	echo "</div><br /><br>";
	
	/*
	 * Or you can display the individual links for more
	 * control over HTML rendering.
	 * 
	*/
	
	//Display the link to first page: First
	//echo $pager->renderFirst();
	
	//Display the link to previous page: <<
	//echo $pager->renderPrev();
	
	/*
	 * Display page links: 1 2 3
	 * $prefix = Will be prepended to the page link (optional)
	 * $suffix = Will be appended to the page link (optional)
	 * 
	*/
	//echo $pager->renderNav('<span>', '</span>');
	
	//Display the link to next page: >>
	//echo $pager->renderNext();
	
	//Display the link to last page: Last
	//echo $pager->renderLast();
?>

</div>
<div id="footerbox">
<br>&copy; <?php print(Date("Y")); ?> Alberto Leopizzi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Services by <a href="http://www.robinbriggs.com">Robin Briggs</a>
</body>
</html>
