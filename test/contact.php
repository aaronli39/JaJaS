<?php
if (isset($_POST['submit'])) {
     $name = $_POST['name'];
     $subject = $_POST['subject'];
     $mailFrom = $_POST['mail'];
     $message = $_POST['message'];

     $mailTo = "jchirinos@jajas.store";
     $headers = "From: ".$mailFrom;
     $txt = "You have received a message from ".$name.".\n\n".$message;


     mail($mailTo, $subject, $txt, $headers);
     header("Location: index.php?mailsent");

} ?>
