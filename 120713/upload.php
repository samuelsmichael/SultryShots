<?php

if(isset($_REQUEST['submit']))
{
$image = ($_FILES["imgfile"]["name"]);
$title = $_GET['title'];
$description = $_GET['description'];

  $filename=  $_FILES["imgfile"]["name"];
  if ((($_FILES["imgfile"]["type"] == "image/gif")|| ($_FILES["imgfile"]["type"] == "image/jpeg") || ($_FILES["imgfile"]["type"] == "image/png")  || ($_FILES["imgfile"]["type"] == "image/pjpeg")) && ($_FILES["imgfile"]["size"] < 200000))
  {
    if(file_exists($_FILES["imgfile"]["name"]))
    {
      echo "File name exists.";
    }
    else
    {
      move_uploaded_file($_FILES["imgfile"]["tmp_name"],"images/$filename");
      echo "Upload Successful . <a href='images/$filename'>Click here</a> to view the uploaded image";
    }
  }
  else
  {
    echo "invalid file.";
  }
}
else
{
?>
<form method="post" enctype="multipart/form-data">
File name: <input type="file" name="imgfile"><br>
Title: <input type="text" name="title">
<br>
Description: <input type="text" name="description">
<br>
<input type="submit" name="submit" value="upload">



</form>
<?php
}
?>

<?php



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

mysql_close();
?>