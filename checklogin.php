
<?php



//$con = mysql_connect("localhost", "root", "miche11e");
$con = mysql_connect("atouchofclass.db.6418905.hostedresource.com", "atouchofclass", "Phototopo1!");
if (!$con) {
     die(mysql_error());
}

$db_selected = mysql_select_db("atouchofclass", $con);
if (!$db_selected) {
     die (mysql_error());
}

// username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql =

"select		*
from		users
where		username='$username' and password='$password'
";

$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row

if($count==1){
// Set cookie and redirect to file "photos_admin.aspx"
setcookie("$username", "$username");
header("location:photos_admin.aspx?user=$username");
}
else {
echo "<div align=center>Wrong Username or Password<br><br><a href=login.php>Try Again</a></div>";
}
?>

