<?php

$email = "alberto@atouchofclassimages.com";
$subject = "Message from Sultry Shots";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$senderemail = $_POST["email"];
$comments = $_POST["comments"];

// compose headers
$headers = "From: $senderemail \r\n";
$headers .= "BCC: webmaster@glassrose.com\r\n";


$message =
"The following information has been sent from the contact form at www.sultryshots.com: \r\n
Name: $fname $lname \r\n
Comments: \r\n$comments \r\n
Reply to: $senderemail \r\n";

if (mail($email, $subject, $message, $headers))

{
  echo "<script type=\"text/javascript\">
<!--
window.location = \"thanks.htm\"
//-->
</script>";
} else {
  echo "<body bgcolor=\"black\" text=\"silver\"><div align=\"center\"><h4>Can't send email to $email</h4></div></body><meta http-equiv=\"refresh\" content=\"2; URL=default.php\">";
}

?>

