<?php

	// site owner infos
	$email_to = 'i@velusgautam.com';
	$success_message = "Your message has been successfully sent.";
	$site_name = 'Velu S Gautam';

	// contact form fields
	$name = trim( $_POST['name'] );
	$email = trim( $_POST['email'] );
	$message = trim( $_POST['message'] );
	$submitted = $_POST['submitted'];

	// contact form submitted
	if ( isset( $submitted ) )
	{
		// check for error
		if ( $name === '' )
		{
			$name_empty = true;
			$error = true;
		}
		elseif ( $email === '' )
		{
			$email_empty = true;
			$error = true;
		}
		elseif ($message === '')
		{
			$message_empty = true;
			$error = true;
		}
		// end check for error
		
		// error
		if ( isset( $error ) )
		{
			echo '<div class="alert alert-error contact-alert"><strong>UNSUCCESS! </strong><ul>';
			
			if ($name_empty)
			{
				echo '<li>Required</li>';
			}
			elseif ($email_empty)
			{
				echo '<li>Required</li>';
			}
			elseif ($email_unvalid)
			{
				echo '<li>Please enter a valid email address</li>';
			}
			elseif ($message_empty)
			{
				echo '<li>Required</li>';
			}
			else
			{
				echo '<li>An error has occurred while sending your message. Please try again later.</li>';
			}
			
			echo "</ul></div>";
		}
		// end error
		
		// no error send mail
		if ( ! isset($error) )
		{
			$subject = 'Contact form message from your ' . $site_name . ' site';
			
			$body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
			
			$headers = 'From: ' . $name . ' <' . $email . '> ' . "\r\n" . 'Reply-To: ' . $email;
			
			mail( $email_to, $subject, $body, $headers );
			
			echo '<div class="alert alert-success contact-alert"><strong>SUCCESS! </strong>' . $success_message . '</div>';
		}
		// end no error send mail
		
	}
	// end contact form submitted
	
?>