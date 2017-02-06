
<?php
$image = $_GET['image'];
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
<br><br><br>
<table border="0" cellpadding="0" cellspacing="0" width="90%">
<tr>
<td width="10">
<?php
echo "<a href=\"webimages/$image\" rel=\"floatboxGroup\"><img style=\"border: 1px solid #000000; display: block;\" border=\"0\" src=\"webimages/$image\" height=\"350\"></a>";
?>
<div align="center"><font size="-2">(Click Image to Enlarge - Click Again for Full Size)</font></div>
</td>
<td align="center">

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="LJY46UVQUM4P8">
<input type="hidden" name="lc" value="US">
<?php echo"<input type=\"hidden\" name=\"item_name\" value=\"Item $image \">"; ?>
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="cn" value="Add special instructions to the seller:">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
<table>
<tr>
<td align="center">
Prices Include Shipping
</td>
</tr>
<tr><td><input type="hidden" name="on0" value="Sizes">Sizes:</td></tr><tr><td><select name="os0">
	<option selected value="8&quot; x 10&quot;">8&quot; x 10&quot;&nbsp;&nbsp;$24.95 USD</option>
	<option value="11&quot; x 17&quot;">11&quot; x 17&quot;&nbsp;&nbsp;$34.95 USD</option>
	<option value="13&quot; x 19&quot;">13&quot; x 19&quot;&nbsp;&nbsp;$44.95 USD</option>
</select><br><br> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="option_select0" value="8&quot; x 10&quot;">
<input type="hidden" name="option_amount0" value="24.95">
<input type="hidden" name="option_select1" value="11&quot; x 17&quot;">
<input type="hidden" name="option_amount1" value="34.95">
<input type="hidden" name="option_select2" value="13&quot; x 19&quot;">
<input type="hidden" name="option_amount2" value="44.95">
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
<br>
<a href="galleries.php">Return to Gallery</a>

</td>
</tr>
</table>
</div>

</div>
<div id="footerbox">
<br>&copy; <?php print(Date("Y")); ?> Alberto Leopizzi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Services by <a href="http://www.robinbriggs.com">Robin Briggs</a>
</body>
</html>

<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>