<?php
include('smtp/PHPMailerAutoload.php');
function smtp_mailer($subject, $msg, $to = "info.isotral@gmail.com")
{
    $mail = new PHPMailer();
    $mail->SMTPDebug  = 3;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "noreply.isotral@gmail.com";
    $mail->Password = "srdgkyspaumuvwwk";
    $mail->SetFrom("noreply.isotral@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if (!$mail->Send()) {
        return;
    } else {
        return;
    }
}
