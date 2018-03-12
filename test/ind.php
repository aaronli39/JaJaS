<?php
$msg = "";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/phpmailer/src/Exception.php';
require './phpmailer/phpmailer/src/PHPMailer.php';
require './phpmailer/phpmailer/src/SMTP.php';

if (isset($_POST['submit'])) {
     $first_name = $_POST['name']; // required
     $email_from = $_POST['email']; // required
     $telephone = $_POST['tel']; // not required
     $comments = $_POST['message']; // required

     $mail = new PHPMailer();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "aaronli39@gmail.com";
	$mail->Password = "abcabcabcd123LI";
	$mail->SMTPSecure = "ssl";
	$mail->Port = 587;
     $mail->addAddress('jchirinos@jajas.store');
     $mail->setFrom($email_from);
     $mail->Subject = "Biggie Peepee";
     $mail->isHTML(true);
     $mail->Body = $comments;

     if ($mail->send())
     $msg = "You email has been sent, thank you!";
     else
     $msg = "Please try again!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="utf-8">
     <title> Contact US</title>
</head>
<body>
     <main>
          <center><p> SEND EMAIL</p>
               <?php if ($msg != "") echo "$msg<br><br>"; ?>
               <form class="" action="ind.php" method="post">
                    <input type="text" name="name" placeholder="Full name">
                    <input type="text" name="email" placeholder="Your email">
                    <textarea name="message" placeholder="message"></textarea>
                    <button type="submit" name="submit">SEND MAIL</button>
               </center>
          </main>

     </body>
     </html>
