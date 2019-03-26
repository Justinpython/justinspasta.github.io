<?php

if (isset($_post["submit"])) {
  $name = $_POST["name"];
  $subject = $_POST["subject"];
  $mailFrom = $_POST["mail"];
  $message = $_POST["message"];

  $mailTo = "info@justinspasta.co.uk"
  $headers = "From: ".$mailFrom;
  $txt = "You have mail from ".$name.".\n\n".$message;

  mail(mailTo,$subject,$txt,$headers);
  header("Location: index.php?mailsend");

}
