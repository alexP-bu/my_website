<?php
//phpmailer import
require './assets/PHPMailer/src/PHPMailer.php';
require './assets/PHPMailer/src/Exception.php';
require './assets/PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$output_to_email = 'apozin@bu.edu';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = $_POST['first-name']; 
    $last_name = $_POST['last-name'];
    $email = $_POST['email-address'];
    $subject = $_POST['message-subject'];
    $message = $_POST['message-text'];


    $mail = new PHPMailer(true);

    try{
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host        = 'ssl://smtp.titan.email';               //Set the SMTP server to send through
        $mail->SMTPAuth    = true;                                   //Enable SMTP authentication
        $mail->Username    = 'admin@alexanderpozin.com';              //SMTP username
        $mail->Password    = 'kartina12';                            //SMTP password
        $mail->SMTPSecure  = 'ssl';
        $mail->Port        = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SMTPAutoTLS = false;
        //Recipients
        $mail->setFrom   ('admin@alexanderpozin.com');
        $mail->addAddress('admin@alexanderpozin.com');               //Add a recipient

        //Content
        $mail->Subject = $subject_out;
        $mail->Body    = $message_out;

        $mail->send();
        header($location_path_success);
        exit();
    } catch (Exception $e) {
        echo 'Message could not be sent. Please contact apozin@bu.edu with error. Mailer Error: {$mail->ErrorInfo}';
    }
}

?>