<?php
	  $array=$callclass->_get_backend_settings_detail($conn, 'BK_ID001');
	  $fetch = json_decode($array, true);
	  $smtp_host=$fetch[0]['smtp_host'];
	  $smtp_username=$fetch[0]['smtp_username'];
	  $smtp_password=$fetch[0]['smtp_password'];
	  $smtp_port=$fetch[0]['smtp_port'];
	  $sender_name=$fetch[0]['sender_name'];
	  $support_email=$fetch[0]['support_email'];
		$currentDate=date("l, d F Y");

	  $bank_name=$fetch[0]['bank_name'];
	  $account_name=$fetch[0]['account_name'];
	  $account_number=$fetch[0]['account_number'];

		require 'mail/PHPMailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer;
		$mail->SMTPDebug = 0;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = $smtp_host;  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = $smtp_username;                 // SMTP username
		$mail->Password = $smtp_password;                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = $smtp_port;                                    // TCP port to connect to
		
		$mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
		)
		);
		$mail->setFrom($smtp_username, $sender_name);

		$mail->WordWrap = 50;   
		$mail->isHTML(true);                                  // Set email format to HTML


?>



<?php 
if ($mail_to_send=='send_exam_registration_success_email'){

$reciever_name=$user_name;
$message='
<div style="width:70%; margin:auto; height:auto; min-width:300px;">
<img src="cid:mec_exam_registration" width="100%">
<div style="font-size:13px;">

<p>Dear <strong >'.$user_name.'</strong> ('.$user_email.'),</p>
<p>Trust this mail meets you well.</p>
<p>Below is your <strong>'.$exam_id.'</strong> registration details.</p>

<div style="background:#DAEEFE; padding:10px; margin-bottom:20px;">

<div style=" border-bottom:#FFF 1px solid; height:25px; line-height:25px;">
STUDENT/AGENT <div style="float:right; color:#06F;">'.$user_name.'</div>
</div><br clear="all" />

<div style="border-bottom:#FFF 1px solid; height:25px; line-height:25px;">
TRANSACTION ID <div style="float:right; color:#06F;">'.$transaction_id.'</div>
</div><br clear="all" />
<div style="border-bottom:#FFF 1px solid; height:25px; line-height:25px;">
TRANSACTION STATUS <div style="float:right; color:#06F;">'.$status_name.'</div>
</div><br clear="all" />

</div>


<div style="background:#DAEEFE; padding:10px; margin-bottom:20px;">

<div style="padding:5px;  height:25px; line-height:25px;">
<strong>REGISTRATION DETAILS</strong>
</div>

<div style="padding:10px; line-height:25px; background:#FFF;">
<div style="color:#06F; border-bottom:#CCC 1px solid;" >BASIC INFO</div>
FIRST NAME <div style="float:right; color:#06F;">'.$first_name.'</div><br clear="all" />
MIDDLE NAME <div style="float:right; color:#06F;">'.$middle_name.'</div><br clear="all" />
LAST NAME <div style="float:right; color:#06F;">'.$last_name.'</div><br clear="all" />
GENDER <div style="float:right; color:#06F;">'.$gender.'</div><br clear="all" />
DATE OF BIRTH <div style="float:right; color:#06F;">'.$date_of_birth.'</div><br clear="all" />
EMAIL <div style="float:right; color:#06F;">'.$email.'</div><br clear="all" />
PHONE NUMBER <div style="float:right; color:#06F;">'.$phone.'</div><br clear="all" />
</div><br clear="all" />

<div style="padding:10px; line-height:25px; background:#FFF;">
<div style="color:#06F; border-bottom:#CCC 1px solid;" >EXAM DETAILS</div>
EXAM <div style="float:right; color:#06F;">'.$exam_id.'</div><br clear="all" />
EXAM VERSION <div style="float:right; color:#06F;">'.$exam_version_name.'</div><br clear="all" />
EXAM CENTRE <div style="float:right; color:#06F;">'.$exam_centre_name.'</div><br clear="all" />
ALTERNATIVE EXAM CENTRE  <div style="float:right; color:#06F;">'.$alt_exam_centre_name.'</div><br clear="all" />
EXAM DATE <div style="float:right; color:#06F;">'.$exam_date_name.'</div><br clear="all" />
ALTERNATIVE EXAM DATE <div style="float:right; color:#06F;">'.$alt_exam_date_name.'</div><br clear="all" />
PASSPORT PHOTOGRAPH <div style="float:right; color:#06F;">'.$mail_passport.'</div><br clear="all" />
INTERNATIONAL PASSPORT <div style="float:right; color:#06F;">'.$mail_intl_passport.'</div><br clear="all" />
REGISTRATION STATUS <div style="float:right; color:#06F;">'.$exam_status.'</div><br clear="all" />
</div><br clear="all" />
</div>


<div style="background:#DAEEFE; padding:10px;">

<div style="padding:5px;  height:25px; line-height:25px;">
<strong>BILLING</strong>
</div>

<div style="padding:10px; line-height:25px; background:#FFF;">
PAYMENT METHOD <div style="float:right; color:#06F;">'.$fund_method_name.'</div><br clear="all" />
AMOUNT PAID <div style="float:right; color:#06F;">'.$currency_name.' '.$exam_reg_price.'</div><br clear="all" />
PAYMENT STATUS <div style="float:right; color:#06F;">'.$status_name.'</div><br clear="all" />
</div><br clear="all" />

<div style="padding:10px; line-height:25px; background:#FFF;">
<div style="color:#06F; border-bottom:#CCC 1px solid;" >TAX DEDUCTION AND GRAND TOTAL</div>
PROVISIONAL SALES TAX (PST) - (<span style="color:#06F;">0.00%</span>) <div style="float:right; color:#06F;">'.$currency_name.'0.00</div><br clear="all" />
GOODS AND SERVICES TAX (GST) - (<span style="color:#06F;">0.00%</span>) <div style="float:right; color:#06F;">'.$currency_name.'0.00</div><br clear="all" />
<div style="border-top:#F00 1px solid;" >
<strong style="color:#F00;">GRAND TOTAL</strong> <div style="float:right; color:#F00;"><strong>'.$currency_name.' '.$exam_reg_price.'</strong></div><br clear="all" />
</div>

</div>
</div>


<p><strong>MyExamConnect Management.</strong><br> Mail Sent '.$currentDate.'.</p>
</div>

<div style="min-height:30px; background:#333; text-align:left; color:#FFF; line-height:20px; padding:20px 10px 20px 50px;">
&copy; All Right Reserve. <br>MyExamConnect.</div>
</div>
';


$send_to=$user_email;
$subject="$exam_id EXAM REGISTRATION DETAILS FOR $student_fullname";

$mail->AddAddress($send_to, $reciever_name);
$mail->addAddress($support_email, $sender_name);// Name is optional
$mail->addAddress('afootechglobal@gmail.com', 'AfooTECH Global');// Name is optional
$mail->addReplyTo($smtp_username, $sender_name); // reply to the sender email

$mail->Subject = $subject;
$mail->addEmbeddedImage('mail/img/mec_exam_registration.jpg', 'mec_exam_registration');
$mail->Body = $message;
$mail->AltBody = strip_tags($message);

if(!$mail->send()){
	echo 'Not Working';
}
}
?>



























<?php 
if ($mail_to_send=='exam_registration_invoice'){

$reciever_name=$user_name;
$message='
<div style="width:70%; margin:auto; height:auto; min-width:300px;">
<img src="cid:mec_exam_registration" width="100%">
<div style="font-size:13px;">

<p>Dear <strong >'.$user_name.'</strong> ('.$user_email.'),</p>
<p>Trust this mail meets you well.</p>
<p>Below is your <strong>'.$exam_id.'</strong> registration details.</p>

<div style="background:#DAEEFE; padding:10px; margin-bottom:20px;">

<div style=" border-bottom:#FFF 1px solid; height:25px; line-height:25px;">
STUDENT/AGENT <div style="float:right; color:#06F;">'.$user_name.'</div>
</div><br clear="all" />

<div style="border-bottom:#FFF 1px solid; height:25px; line-height:25px;">
TRANSACTION ID <div style="float:right; color:#06F;">'.$transaction_id.'</div>
</div><br clear="all" />
<div style="border-bottom:#FFF 1px solid; height:25px; line-height:25px;">
TRANSACTION STATUS <div style="float:right; color:#06F;">'.$status_name.'</div>
</div><br clear="all" />

</div>


<div style="background:#DAEEFE; padding:10px; margin-bottom:20px;">

<div style="padding:5px;  height:25px; line-height:25px;">
<strong>REGISTRATION DETAILS</strong>
</div>

<div style="padding:10px; line-height:25px; background:#FFF;">
<div style="color:#06F; border-bottom:#CCC 1px solid;" >BASIC INFO</div>
FIRST NAME <div style="float:right; color:#06F;">'.$first_name.'</div><br clear="all" />
MIDDLE NAME <div style="float:right; color:#06F;">'.$middle_name.'</div><br clear="all" />
LAST NAME <div style="float:right; color:#06F;">'.$last_name.'</div><br clear="all" />
GENDER <div style="float:right; color:#06F;">'.$gender.'</div><br clear="all" />
DATE OF BIRTH <div style="float:right; color:#06F;">'.$date_of_birth.'</div><br clear="all" />
EMAIL <div style="float:right; color:#06F;">'.$email.'</div><br clear="all" />
PHONE NUMBER <div style="float:right; color:#06F;">'.$phone.'</div><br clear="all" />
</div><br clear="all" />

<div style="padding:10px; line-height:25px; background:#FFF;">
<div style="color:#06F; border-bottom:#CCC 1px solid;" >EXAM DETAILS</div>
EXAM <div style="float:right; color:#06F;">'.$exam_id.'</div><br clear="all" />
EXAM VERSION <div style="float:right; color:#06F;">'.$exam_version_name.'</div><br clear="all" />
EXAM CENTRE <div style="float:right; color:#06F;">'.$exam_centre_name.'</div><br clear="all" />
ALTERNATIVE EXAM CENTRE  <div style="float:right; color:#06F;">'.$alt_exam_centre_name.'</div><br clear="all" />
EXAM DATE <div style="float:right; color:#06F;">'.$exam_date_name.'</div><br clear="all" />
ALTERNATIVE EXAM DATE <div style="float:right; color:#06F;">'.$alt_exam_date_name.'</div><br clear="all" />
PASSPORT PHOTOGRAPH <div style="float:right; color:#06F;">'.$mail_passport.'</div><br clear="all" />
INTERNATIONAL PASSPORT <div style="float:right; color:#06F;">'.$mail_intl_passport.'</div><br clear="all" />
REGISTRATION STATUS <div style="float:right; color:#06F;">'.$exam_status.'</div><br clear="all" />
</div><br clear="all" />
</div>


<div style="background:#DAEEFE; padding:10px;">

<div style="padding:5px;  height:25px; line-height:25px;">
<strong>BILLING</strong>
</div>

<div style="padding:10px; line-height:25px; background:#FFF;">
PAYMENT METHOD <div style="float:right; color:#06F;">'.$fund_method_name.'</div><br clear="all" />
AMOUNT PAID <div style="float:right; color:#06F;">'.$currency_name.' '.$exam_reg_price.'</div><br clear="all" />
PAYMENT STATUS <div style="float:right; color:#06F;">'.$status_name.'</div><br clear="all" />
</div><br clear="all" />

<div style="padding:10px; line-height:25px; background:#FFF;">
<div style="color:#06F; border-bottom:#CCC 1px solid;" >TAX DEDUCTION AND GRAND TOTAL</div>
PROVISIONAL SALES TAX (PST) - (<span style="color:#06F;">0.00%</span>) <div style="float:right; color:#06F;">'.$currency_name.'0.00</div><br clear="all" />
GOODS AND SERVICES TAX (GST) - (<span style="color:#06F;">0.00%</span>) <div style="float:right; color:#06F;">'.$currency_name.'0.00</div><br clear="all" />
<div style="border-top:#F00 1px solid;" >
<strong style="color:#F00;">GRAND TOTAL</strong> <div style="float:right; color:#F00;"><strong>'.$currency_name.' '.$exam_reg_price.'</strong></div><br clear="all" />
</div>

</div>
</div>


<p>Kindly validate the registration details and proceed with the payment to the account details provided below:</p>


<div style="background:#DAEEFE; padding:10px;">

<div style="padding:5px;  height:25px; line-height:25px;">
<strong>METHODS OF PAYMENT</strong>
</div>

<div style="padding:10px; line-height:25px; background:#FFF;">
<div style="color:#06F; border-bottom:#CCC 1px solid;" >BANK TRANSFER:</div>
ACCOUNT NAME:  <div style="float:right; color:#06F;">'.$account_name.'</div><br clear="all" />
ACCOUNT NUMBER:  <div style="float:right; color:#06F;">'.$account_number.'</div><br clear="all" />
BANK NAME:  <div style="float:right; color:#06F;">'.$bank_name.'</div><br clear="all" />
</div>
</div>



<p><strong>MyExamConnect Management.</strong><br> Mail Sent '.$currentDate.'.</p>
</div>

<div style="min-height:30px; background:#333; text-align:left; color:#FFF; line-height:20px; padding:20px 10px 20px 50px;">
&copy; All Right Reserve. <br>MyExamConnect.</div>
</div>
';


$send_to=$user_email;
$subject="$exam_id EXAM REGISTRATION DETAILS FOR $student_fullname";

$mail->AddAddress($send_to, $reciever_name);
$mail->addAddress($support_email, $sender_name);// Name is optional
$mail->addAddress('afootechglobal@gmail.com', 'AfooTECH Global');// Name is optional
$mail->addReplyTo($smtp_username, $sender_name); // reply to the sender email

$mail->Subject = $subject;
$mail->addEmbeddedImage('mail/img/mec_exam_registration.jpg', 'mec_exam_registration');
$mail->Body = $message;
$mail->AltBody = strip_tags($message);

if(!$mail->send()){
	echo 'Not Working';
}
}
?>




