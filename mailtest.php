<?php

require_once('phpmailer/class.phpmailer.php');

$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->SMTPDebug = 1; 
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "muhammedtanriverdi@gmail.com";
$mail->Password = "XXXXXXXXX";
$mail->SetFrom("muhammedtanriverdi@gmail.com");

$mail->AddAddress("alon1e@mynet.com");
$mail->Subject = "Php mail gonderme test";
$mail->Body = "Merhaba, php test amacli gonderiyorum bu maili.";
 if(!$mail->Send()){
    echo "Error: " . $mail->ErrorInfo;
}
else{
    echo "Gonderildi";
}
?>
