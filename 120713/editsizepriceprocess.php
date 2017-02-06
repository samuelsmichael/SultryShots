<?php

if (isset($_GET['user'])) {
$user = $_GET['user'];
}

if (isset($_GET['action'])) {
$action = $_GET['action'];
}

if (isset($_GET['id'])) {
$id = $_GET['id'];
}

if (isset($_GET['type'])) {
$type = $_GET['type'];
}

if (isset($_GET['width'])) {
$width = $_GET['width'];
}

if (isset($_GET['height'])) {
$height = $_GET['height'];
}

if (isset($_GET['price'])) {
$price = $_GET['price'];
}

if (isset($_COOKIE["$user"]));
else
  header("Location: login.php");

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

if ($action == 'edit')
{
mysql_query ("update sizeprice
set
type='$type',
width=$width,
height=$height,
price=$price
where id=$id");
}

if ($action == 'delete')
{
mysql_query 

("delete from sizeprice where id=$id");
}

if ($action == 'add')
{
mysql_query

("insert into sizeprice
(type,
width,
height,
price)
values
('$type',
$width,
$height,
$price)");
}


echo "<meta http-equiv=\"Refresh\" content=\"0; url=editsizeprice.php?user=$user\">";

//mysql_close();

?>

