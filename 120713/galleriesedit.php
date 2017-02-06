
<?php

if (isset($_GET['user'])) {
$user = $_GET['user'];
}


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
	$pager = new PS_Pagination($conn, $sql, 5, 5, "user=$user&param1=valu1&param2=value2");
	
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
<tr><td colspan = '2' align='center'><b>Item #$productid - '$title'</b><br><br><a href='edit.php?user=$user&id=$productid'><font color='red'>Edit Item</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='delete.php?user=$user&id=$productid'><font color='red'>Delete Item</font></a><br><br></td></tr><tr><td width='300' align='center'><a href='images/$image.jpg' rel='floatboxGroup'><img border='0' src='images/$image.jpg' width='125' alt='$title'></a></td>";




echo "<td align='center'>$description<br><br>";
?>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<font size="-1">Available as matte print or canvas wrap (Prices Include Shipping):</font><br><br><select name="os0">
	
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

echo "<option value='$type - $width&quot; x $height&quot;'>$type - $width&quot; x $height&quot;&nbsp;&nbsp;$$price USD</option>";
}
?>

</select><br><br> 

</form>

<br>
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

<div align='center'><?php echo"<a href='admin.php?user=$user'><font color='red'>Go to Admin Menu</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='default.php'><font color='red'>Go to Website</font></a></font>"; ?></div><br><br>

</body>
</html>
