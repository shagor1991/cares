<?php
		
		    $f_name     = $_POST['f_name'];
			$l_name     = $_POST['l_name'];
			$email      = $_POST['email'];	
			$message    = $_POST['message'];	
		
			// Set up parameters
			$to  = 'manjoor@gmail.com' . ', '; // note the comma
			$to .= 'skroy1950@gmail.com';
			$subject = "FAQ";
			$message = "$message"."\n".$f_name.' '.$l_name;
			$from = $email;
			$headers = "From: $from";
			
			// Send email
			mail($to,$subject,$message,$headers);
			

			
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Thank you! Your message has been received and will be replied to shortly.')
			window.location.href='index.php';
			</SCRIPT>");
			

?>
