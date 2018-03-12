<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
// Alias the League Google OAuth2 provider class
use League\OAuth2\Client\Provider\Google;
use PHPMailer\PHPMailer\Exception;

date_default_timezone_set('Etc/UTC');


//Load composer's autoloader
require '../vendor/autoload.php';

if(isset($_POST['submit'])) {

     // CHANGE THE TWO LINES BELOW
     $first_name = $_POST['name']; // required
     $email_from = $_POST['email']; // required
     $telephone = $_POST['tel']; // not required
     $comments = $_POST['message']; // required

     $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
     try {
          //Server settings
          $mail->SMTPDebug = 2;                                 // Enable verbose debug output
          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'jchirinos@jajas.store';                 // SMTP username
          $mail->Password = 'brandon125';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to
          $mail->AuthType = "XOAUTH2";
          //Recipients
          $mail->setFrom($email_from, $first_name);
          $mail->addAddress('jchirinos@jajas.store');               // Name is optional
          $mail->addReplyTo('jchirinos@jajas.store', 'JaJaS');

          //Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = "Hello JaJaS: You have received a new message from the website!";
          $mail->Body    = $comments."\n\nTelephone: ".$telephone;
          $mail->AltBody = $comments."\n\nTelephone: ".$telephone;

          $mail->send();
          header("Location: index.php?mailsend");
          echo 'Message has been sent';
     } catch (Exception $e) {
          echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
     }
     ?>

     <?php
}
die();
?>
