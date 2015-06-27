<?php 

// this is the file for all the helper functions in the contact us page.

//these are for the PHP Helper files
include 'headers/databaseConn.php';

// this is the function to send the mail to the user from the contactUs page for Campus Ambassador mail.
// returns 1 on success and -1 on Failure.
function CampusAbsUserMail($to, $name) {
	$res = "-1";
	$mailBody = "";
	try{

		$subject = "Welcome to Mentored-Research";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: guide@mentored-research.com" . "\r\n";

		// write the mail body here.
		$mailBody .= "&nbsp; &nbsp; <h1>MENTORED-RESEARCH</h1> <br />";
		$mailBody .= "Dear " . $name . "<br />";
		$mailBody .= "<br /><br />Thank you for your interest in Mentored-Research's Equity Research Initiative. <br /><br />";

		$mailBody .= "With an alumni base of 350+ students, an approach that is equally theoretical as it is practical, a carefully designed program structure in sync with popular industry practices, ERI has already made an impact in quite a few lives. It is great to see your interest to join the Mentored-Research family. <br/><br />";
		$mailBody .= "A Mentored-Research Campus Ambassador is one who takes initiative, is ambitious, is sincere and above all is passionate and relentless in his pursuit of knowledge. We look forward to this association and are confident that together we can successfully develop a Center of Excellence in Finance in your college. <br /><br />";
		$mailBody .= "A member of our Team will be in touch with you shortly to take this conversation forward.<br /><br />";

		$mailBody .= "Warm Regards";
		$mailBody .= "<br />Team Mentored-Research";
		$mailBody .= "<br />info@mentored-research.com";
		$mailBody .= "<br /><a href='http://mentored-research.com'>Mentored-Research</a>";

		$mailBody .= "<br /><br />Connect with us: <br/>";
		$mailBody .= "<a href='https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf' target='_blank' >Facebook</a><br/>";
		$mailBody .= "<a href='https://www.linkedin.com/company/2217419?trk=tyah&amp;trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3' target='_blank' >LinkedIn</a>";
		$mailBody .= "<br /><br />-------------------------------------------------------------------------------------------------------<br />This is an automated mail. Please do not reply to this message.";

		if(mail($to, $subject, $mailBody, $headers) == true) {
			$res = "1";
		}
		else {
			$res = "-1";	
		}
		return $res;
	}	
	catch(Exception $e) {
		$res = "-1";
		return $res;
	}
}

// this is the function to send the mail to the Admin for CONTACT US.
// returns 1 on success and -1 on Failure.
function CampusAbsAdminMail($to, $name, $email, $tel, $college, $date) {
	$res = "-1";
	$mailBody = "";
	try{

		$subject = "Campus Ambassador Request Recieved";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: guide@mentored-research.com" . "\r\n";

		// write the mail body here.
		$mailBody .= "<h1>Campus Ambassador Request Recieved</h1><br />";
		$mailBody .= "Dear Admin, " . "<br />";
		$mailBody .= "Following are the details of the Campus Ambassador Request that was sent through the Contact Us Page: <br /><br />";

		$mailBody .= "Name: <b>" . $name . "</b><br />";
		$mailBody .= "Email Address: <b>" . $email . "</b><br />";
		$mailBody .= "Phone Number: <b>" . $tel . "</b><br />";
		$mailBody .= "College Name: <b>" . $college . "</b><br />";
		$mailBody .= "Request on: <b>: " . $date . "</b><br />";

		$mailBody .= "<br /><br />Thank You.";
		$mailBody .= "<br />MR - Connect";
		$mailBody .= "<br /><a href='http://mentored-research.com'>Mentored-Research</a>";

		if(mail($to, $subject, $mailBody, $headers) == true) {
			$res = "1";
		}
		else {
			$res = "-1";	
		}
		return $res;
	}	
	catch(Exception $e) {
		$res = "-1";
		return $res;
	}
}

// this is the function for inserting the data into the Campus Ambassador Table.
// returns 1 on everyting success. -1 on error.
function CampusAbsQuery($name, $email, $tel, $college, $date) {
	global $connection;
	$res = "-1";
	try {
		$query = "insert into CampusAbs(AbsName, AbsEmail, AbsTel, AbsCollege, UpdatedOn) values('$name', '$email', '$tel', '$college', '$date')";
		$rs = mysql_query($query);
		if(!$rs) {
			$res = "-1";
		}
		else {
			$res = "1";
		}
		return $res;
	}
	catch(Exception $e)  {
		$res = "-1";
		return $res;
	}
}

// this is the function to send the mail to the user from the contactUs page.
// returns 1 on success and -1 on Failure.
function ContactUsUserMail($to, $name) {
	$res = "-1";
	$mailBody = "";
	try{

		$subject = "Welcome to Mentored-Research";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: guide@mentored-research.com" . "\r\n";

		// write the mail body here.
		$mailBody .= "&nbsp; &nbsp; <h1>MENTORED-RESEARCH</h1> <br />";
		$mailBody .= "Dear " . $name . "<br />";
		$mailBody .= "<br /><br />Thank you for your interest in Mentored-Research's Equity Research Initiative. <br /><br />";

		$mailBody .= "With an alumni base of 350+ students, an approach that is equally theoretical as it is practical, a carefully designed program structure in sync with popular industry practices, ERI has already made an impact in quite a few lives. It is great to see your interest to join the Mentored-Research family. <br/><br />";
		$mailBody .= "A member of our team will be in touch with you shortly to address your queries. Here is hoping that the conversation is the first step to your joining the Mentored-Research family.<br /><br />";

		$mailBody .= "Warm Regards";
		$mailBody .= "<br />Team Mentored-Research";
		$mailBody .= "<br />info@mentored-research.com";
		$mailBody .= "<br /><a href='http://mentored-research.com'>Mentored-Research</a>";

		$mailBody .= "<br /><br />Connect with us: <br/>";
		$mailBody .= "<a href='https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf' target='_blank' >Facebook</a><br/>";
		$mailBody .= "<a href='https://www.linkedin.com/company/2217419?trk=tyah&amp;trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3' target='_blank' >LinkedIn</a>";
		$mailBody .= "<br /><br />-------------------------------------------------------------------------------------------------------<br />This is an automated mail. Please do not reply to this message.";

		if(mail($to, $subject, $mailBody, $headers) == true) {
			$res = "1";
		}
		else {
			$res = "-1";	
		}
		return $res;
	}	
	catch(Exception $e) {
		$res = "-1";
		return $res;
	}
}

// this is the function to send the mail to the Admin for CONTACT US.
// returns 1 on success and -1 on Failure.
function ContactUsAdminMail($to, $name, $email, $tel, $message, $date) {
	$res = "-1";
	$mailBody = "";
	try{

		$subject = "Contact Us Message Recieved";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: guide@mentored-research.com" . "\r\n";

		// write the mail body here.
		$mailBody .= "<h1>Contact Us Message Recieved</h1><br />";
		$mailBody .= "Dear Admin, " . "<br />";
		$mailBody .= "Following are the details of the message that was sent through the Contact Us Page: <br /><br />";

		$mailBody .= "Name: <b>" . $name . "</b><br />";
		$mailBody .= "Email Address: <b>" . $email . "</b><br />";
		$mailBody .= "Phone Number: <b>" . $tel . "</b><br />";
		$mailBody .= "Message Sent: <b>" . $message . "</b><br />";
		$mailBody .= "Request on: <b>: " . $date . "</b><br />";

		$mailBody .= "<br /><br />Thank You.";
		$mailBody .= "<br />MR - Connect";
		$mailBody .= "<br /><a href='http://mentored-research.com'>Mentored-Research</a>";

		if(mail($to, $subject, $mailBody, $headers) == true) {
			$res = "1";
		}
		else {
			$res = "-1";	
		}
		return $res;
	}	
	catch(Exception $e) {
		$res = "-1";
		return $res;
	}
}

// this is the function for inserting the data into the Contact Us Table and sending the mails.
// returns 1 on everyting success. -1 on error.
function ContactUsQuery($name, $email, $tel, $message, $date) {
	global $connection;
	$res = "-1";
	try {
		$query = "insert into ContactUs(UserName, UserEmail, UserTel, UserMsg, UpdatedOn) values('$name', '$email', '$tel', '$message', '$date')";
		$rs = mysql_query($query);
		if(!$rs) {
			$res = "-1";
		}
		else {
			$res = "1";
		}
		return $res;
	}
	catch(Exception $e)  {
		$res = "-1";
		return $res;
	}
}

?>