<?php
if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['message']) ){
	$name = $_POST['name'];
    $email = $_POST['email'];
	$tel = $_POST['tel'];    
	$message = nl2br($_POST['message']);
	$to = "kulcsarrudolf@gmail.com";	
	$from = $email;
	$subject = 'Új üzenet - '.$name;
	$message = '<b>Name:</b> '.$name.' <br><b>Email:</b> '.$email.'<br><b>Tel:</b> '.$tel.'<br><br> <p>'.$message.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "Message sent!
	} else {
		echo "Error!";
	}
}
?>