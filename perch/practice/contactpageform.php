<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$number = $_POST["phone"]
$mail = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "3bearg3@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}