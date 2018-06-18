<?php

// Contact subject
$subject = $_POST['objet']; 

// Details
$message = $_POST['message'];

// Mail of sender
$mail_from = $_POST['email']; 

// From 
$header ='De : '.$_POST['prenom'].' '.$_POST['nom'].' <'.$_POST['email'].'>';

// Enter your email address
$to = '';
$send_contact = mail($to,$subject,$message,$header);

$msg = '';

if($send_contact) {
	$msg .= '<div class="alert alert-success" role="alert">Message envoyé !</div>';
	header('location: contact.php');
}

?>