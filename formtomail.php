<?php 
if(isset($_POST['emailform'])){
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$phone = strip_tags($_POST['phone']);
	$message = $name . " has sent you a message inquiring your services. \r\nThe message says: "
	. strip_tags($_POST['message']) . "\r\nContact them at " . $phone;
	$to = 'gritdevteam@gmail.com';
	$subject = "Inquiry";
	// To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to,$subject,$message,$headers);
    echo "Thank you for inquiry. Please wait 12-24 hours for a reply.";
    
    }
?>