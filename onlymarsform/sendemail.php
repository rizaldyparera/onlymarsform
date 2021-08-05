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
  $fwebsite = $_POST['fwebsite'];
  $browser = $_POST['browser'];
  $device = $_POST['device'];
  $rate = $_POST['rate'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = ''; // Gmail address which you want to use as SMTP server
    $mail->Password = ''; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom("$email", "$name"); // Gmail address which you used as SMTP server
    $mail->addReplyTo("$email", "$name");
    $mail->addAddress(''); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = "$message";
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>How did you hear about this website?: $fwebsite <br>What browser do you use ?: $browser <br>Which device did you use to access the website?: $device <br>Rate This Website: $rate <br>Please Give Your Advice : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
