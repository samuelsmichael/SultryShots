
<?php

if (isset($_GET['user'])) {
$user = $_GET['user'];
}

if (isset($_COOKIE["$user"]));
else
  header("Location: login.php");
?>

<?php

$id = $_GET['id'];
$productid = $id;

$ip = $_SERVER['REMOTE_ADDR'];
	if ($ip == "127.0.0.1")
	$conn = mysql_connect("localhost", "root", "miche11e");
	else
	$conn = mysql_connect("atouchofclass.db.6418905.hostedresource.com", "atouchofclass", "Miche!!e1357");
	//$conn = mysql_connect("localhost", "root", "miche11e");
	if(!$conn) die("Failed to connect to database!");
	$status = mysql_select_db('atouchofclass', $conn);
	if(!$status) die("Failed to select database!");

mysql_query 

("delete from products where productid = '$id'");

mysql_close();

echo "<meta http-equiv=\"Refresh\" content=\"0; url=galleriesedit.php?user=$user\">";

?>