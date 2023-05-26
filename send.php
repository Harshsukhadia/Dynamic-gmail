<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>



<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require 'includes/PHPMailer.php'; 
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
if(isset($_POST['send'])){

    if(isset($_FILES['image'])){
        //    echo"<pre>"; 
        //    print_r($_FILES); 
        //    echo"</pre>";
        // }
        
            $file_name=$_FILES['image']['name'];
            $file_size=$_FILES['image']['size'];
            $file_tmp=$_FILES['image']['tmp_name']; 
            $file_type=$_FILES['image']['type'];
            
           if(move_uploaded_file($file_tmp,"img/".$file_name)){#/var/www/html/php/form/upload-image   #/var/www/html/php/form
            echo "Image uploaded to the folder";
           }
           else{
            echo "Image cannot be uploaded";
           }
        }

$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'harsh19becem106@gmail.com';                     //SMTP username
    $mail->Password   = 'jkigatuegnswvrpc';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('harsh19becem106@gmail.com', 'Harsh Sukhadia');
    $mail->addAddress($_POST['email']);     //Add a recipient
    // $mail->addAddress('harsh19becem106@gmail.com');               //Name is optional
    // $mail->addReplyTo('harsh19becem106@gmail.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment("img/".$file_name);         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    ?>
   <script> 
   location.href = "index.php";
   alert('Message has been sent Successfully!'); </script>
   
    <?php
    //  header("Location: index.php");
}
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}?>