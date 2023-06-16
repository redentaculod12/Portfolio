<?php	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
	

try {
	$otp = rand(100000,999999);     
	$mail = new PHPMailer();
	$mail->isSMTP();                                           
	$mail->Host       = 'smtp.gmail.com';                     
	$mail->SMTPAuth   = true;                                   
	$mail->Username   = 'taculod.reden12@gmail.com';                    
	$mail->Password   = 'mkaqavgijgdmpgxi';                       
	$mail->SMTPSecure = 'ssl';            
	$mail->Port       = 465;                                    

  
	$mail->setFrom('taculod.reden12@gmail.com', 'Oportunity');

	//$mail->addAddress('angel.loisaga@citycollegeoftagaytay.edu.ph');   
	$email_ac = "";
	$email_ac .= 'redentaculod12@gmail.com';
	$mail->addAddress($email_ac); 

	$mail->isHTML(true);                                 
	$mail->Subject = 'Subject:'.$_POST['subject'];
	$mail->Body    = '<p>From:'.$_POST['name'].'<br>Email:'.$_POST['email'].'<br>'.$_POST['message'].'<p>';
	echo $mail->send();
} catch (Exception $e) {
	echo '<script> alert("enter correct email or check your connection"); </script>';
}	
?>