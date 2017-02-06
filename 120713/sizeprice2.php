
<?php

$ip = $_SERVER['REMOTE_ADDR'];
if ($ip == "127.0.0.1")
$con = mysql_connect("localhost", "root", "miche11e");
else
$con = mysql_connect("osia.db.6418905.hostedresource.com", "osia", "Miche11e1");
if (!$con) {
     die(mysql_error());

}

$db_selected = mysql_select_db("atouchofclass", $con);
if (!$db_selected) {
     die (mysql_error());
}

$sql =

"select		*
from		sizeprice
order by id asc";

$result=mysql_query($sql);

$numrows = mysql_num_rows($result);
$rows = ($numrows + 1);

$i=0;
echo "<select name=\"os0\">";
while ($i < $numrows)
{

$ID = mysql_result($result, $i);

//$data = mysql_fetch_array( $result );
$width=mysql_result($result, $i, "width");
$height=mysql_result($result, $i, "height");
$price=mysql_result($result, $i, "price");

echo
"<option name=$id value=\"$id\">$width\" x $height\" - $price</option>";

$i++;
};
echo "</select>";
$ID = ($ID + 1);

?>
