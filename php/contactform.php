<?php

if (isset($_post["submit"])) {
  $name = $_POST["name"];
  $mailFrom = $_POST["email"];
  $message = $_POST["message"];
  $subject = "from page";

  $mailTo = "info@justinspasta.co.uk";
  $headers = "From: ".$mailFrom;
  $txt = "You have mail from ".$name.".\n\n".$message;

  mail(mailTo,$subject,$txt,$headers);
  header("Location: index.php?mailsend");

}
?>