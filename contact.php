<?php require_once("vars.php"); ?>

<?php site_start("Contact us!"); back(); ?>
<b><h1>I will love to hear from me! </h1>
<form action = 'contact.php' method = "post">

<b>Your name:</b> <input type = "text" name = "name">
<br>
<b>Message: </b> <input type = "text" name = "message">
<br>
<b>Email: </b> <input type = "email" name = "email">
<br>
<input type = "submit">

</form>

<?php copyright() ?>

<?php site_close(); ?>



<?php
require_once("autm.php");
// Main

if (empty($_POST['name']) or empty($_POST['message']) or empty($_POST['email'])) {

	//header("Location: contact.php");
}

else {

	$name = $_POST['name'];
	$message = $_POST['message'];
	$email = $_POST['email'];

	$message_to_send = get_reply($message,$replies);

	# Code to send mail.....
	// mail();
}



