<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contactalphadiop@gmail.com';
    $mail->Password = 'Alphadiop1.'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('contactalphadiop@gmail.com');
    $mail->addAddress('alphakhoss@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Alpha Website)';
    $mail->Body = "<h3>Nom Complet : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert alert-success" role="alert">
                 <span>Message Envoyé! Merci De Me Contacter.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert alert-danger" role="alert">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
