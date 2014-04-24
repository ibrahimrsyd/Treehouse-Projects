<?php

	require_once("../inc/config.php");

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//Capture data from $_POST variable
		$name = trim($_POST["name"]);
		$email = trim($_POST["email"]);
		$message = trim($_POST["message"]);

		//Validates the name, email and message
		if ($name  == "" OR $email == "" OR $message == "") {
			$error_message = "You must specify a value for name, email and message.";
		}

		//Protection against email header injection attack
		if (!isset($error_message)) {
			foreach($_POST as $value) {
				if(stripos($value, 'Content-Type:') !== FALSE) {
					$error_message = "There was a problem with the information you entered.";
				}
			}
		}

		//Protection against comment spam bot (Spam Honey Pot)
		if(!isset($error_message) AND $_POST["address"] != "") {
			$error_message = "Your form submission has an error.";
		}

		//Include PHPMailer Library and validate email field format
		require_once(ROOT_PATH . "inc/lib/phpmailer/class.phpmailer.php");
		$mail = new PHPMailer();

		if (!isset($error_message) AND !$mail -> ValidateAddress($email)) {
			$error_message = "You must enter a valid email address.";
		}


		if (!isset($error_message)) {
			//Echo form data to the browser
			$email_body = "";
			$email_body = $email_body . "Name: " . $name . "<br>";
			$email_body = $email_body . "Email: " . $email . "<br>";
			$email_body = $email_body . "Message: " . $message . "<br>";
			//echo $email_body;

			//***************CODE FOR SENDING EMAIL BEGINS***************//

			$mail->From = $email;
			$mail->FromName = $name;
			$address = "egfraz@gmail.com";
			$mail->addAddress($address, 'Shirts 4 Mike');
			$mail->Subject = 'Shirts 4 Mike Contact Form Submission | ' . $name;
			$mail->MsgHTML($email_body);

			//****************CODE FOR SENDING EMAIL ENDS****************//

			if($mail->send()) {
				header("Location: " . BASE_URL . "contact/?status=thanks");
			exit;
			} else {
			   $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
			}

			
		}
	}



?>



<?php
	$pageTitle = "Contact Mike";
	$section = "contact";
	//Include header
	include(ROOT_PATH . 'inc/view/header.php'); 
?>



	<div class="section page">
		
		<div class="wrapper">
		
			<h1>Contact</h1>

			<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>

				<p>Thanks for the email! I&rsquo;ll be in touch shortly.</p>

			<?php } else { ?>

				<?php
					if (!isset($error_message)) { ?>
						<p>I&rsquo;d love to hear from you!  Complete the form to send me an email.</p>
					<?php } else {
						echo '<p class="message">' . $error_message . '</p>';
					}
				?>
				<form method="post" action="<?php echo BASE_URL; ?>contact/">
					<table>
						<tr>
							<th>
								<label for="name">Name </label>
							</th>
							<td>
								<input type="text" name="name" id="name" value="<?php if (isset($name)) {echo htmlspecialchars($name);} ?>">
							</td>
						</tr>
						<tr>
							<th>
								<label for="email">Email </label>
							</th>
							<td>
								<input type="text" name="email" id="email" value="<?php if (isset($email)) {echo htmlspecialchars($email);} ?>">
							</td>
						</tr>
						<tr>
							<th>
								<label for="message">Message </label>
							</th>
							<td>
								<textarea name="message" id="message" rows="7"><?php if (isset($message)) {echo htmlspecialchars($message);} ?></textarea>
							</td>
						</tr>
						<tr style="display: none;">
							<th>
								<label for="email">Address </label>
							</th>
							<td>
								<input type="text" name="address" id="address">
								<p>Humans: please leave this field blank.</p>
							</td>
						</tr>
					</table>
					<input type="submit" value="Send">
				</form>

			<?php } ?>


		</div>

	</div>


<?php 
	//Adding the footer
	include(ROOT_PATH . "inc/view/footer.php"); 
?>