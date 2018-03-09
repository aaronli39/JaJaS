<!DOCTYPE html>
<html>
<body>

    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];
        $to = 'johnny.wong2324@gmail.com';
        $subject = JaJaS Business;
        
        $body = "From: $name\n E-mail: $email\n $message";
        if ($_POST['submit']){
            if(mail($to, $subject, $body)){
                echo '<p>Your message has been sent!</p>';
            }
        }
    
    ?>
    
    
</body>
</html>