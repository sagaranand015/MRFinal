<?php 

// this is the file for all the helper functions in the contact us page.

//these are for the PHP Helper files
include 'headers/databaseConn.php';

// this is the function to add the user record to the OtherUser Table. Returns 1 on success and -1 on error.
function AddToOtherUser($email, $pwd, $name, $contact, $profile) {
	global $connection;
	$resp = "-1";
	try {
		$query = "insert into OtherUser(OUserName, OUserEmail, OUserContact, OUserPwd, OUserProfile) values('$name', '$email', '$contact', '$pwd', '$profile')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function to send the mail to the user that is not registered.
// returns 1 on success and -1 on Failure.
function NotRegisteredUserMail($toEmail, $name) {
	$res = "-1";
	$mailBody = "";
	try{

		$subject = "Mentored-Research";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: guide@mentored-research.com" . "\r\n";

		// write the mail body here.
		$mailBody .= "<h1>Mentored-Research</h1><br />";
		$mailBody .= "Dear " . $name . ", <br />";
		$mailBody .= "Thank you for registering for the Mentored Research Portal. We will get back to you with more details of Mentored Research's Equity Research Initiative. <br /><br />";

		$mailBody .= "Warm Regards<br />";
		$mailBody .= "Team Mentored-Research<br />";
		$mailBody .= "info@mentored-research.com";

		$mailBody .= "<br /><br />Connect with us: <br/>";
        $mailBody .= "<a href='https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf' target='_blank' >Facebook</a><br/>";
        $mailBody .= "<a href='https://www.linkedin.com/company/2217419?trk=tyah&amp;trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3' target='_blank' >LinkedIn</a>";

        $mailBody .= "<br /><br />-------------------------------------------------------------------------------------------------------<br />This is an automated mail. Please do not reply to this message.";

		if(mail($toEmail, $subject, $mailBody, $headers) == true) {
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

// this is the function to send the mail to the user that signup is successful.
// returns 1 on success and -1 on Failure.
function SignupUserMail($toEmail, $name) {
	$res = "-1";
	$mailBody = "";
	try{

		$subject = "Mentored-Research Signup Successful";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: guide@mentored-research.com" . "\r\n";

		// write the mail body here.
		$mailBody .= "<h1>Mentored-Research</h1><br />";
		$mailBody .= "Dear " . $name . ", <br />";
		$mailBody .= "Welcome to the Mentored Research Family. Your Mentored-Research account has been created for you.<br /><br />";
		$mailBody .= "In case of any problems, please drop a mail to guide@mentored-research.com. <br /><br />";
		$mailBody .= "Please add guide@mentored-research, to your address book, to prevent future emails from Mentored-Research from going to the SPAM folder.<br /><br />";
		$mailBody .= "Welcome to the Mentored-Research family!<br /><br />";

		$mailBody .= "Warm Regards<br />";
		$mailBody .= "Team Mentored-Research<br />";
		$mailBody .= "info@mentored-research.com";

		$mailBody .= "<br /><br />Connect with us: <br/>";
        $mailBody .= "<a href='https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf' target='_blank' >Facebook</a><br/>";
        $mailBody .= "<a href='https://www.linkedin.com/company/2217419?trk=tyah&amp;trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3' target='_blank' >LinkedIn</a>";

        $mailBody .= "<br /><br />-------------------------------------------------------------------------------------------------------<br />This is an automated mail. Please do not reply to this message.";

		if(mail($toEmail, $subject, $mailBody, $headers) == true) {
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

// this is the function to check if a user exitss in the table specified.
// returns the no. of users in table. 0 if nothing exists. -1 on error.
function IsUserExistInTable($email, $table) {
	global $connection;
	$resp = -1;
	try {
		$query = "select * from " . $table . " where " . $table . "Email='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = -1;
		}
		else {
			$resp = mysql_num_rows($rs);
		}
		return $resp;
	}
	catch(Exception $e)  {
		$resp = -1;
		return $resp;
	}
}

// this is the function for signup utility. updates the row with the email address already in there.
// returns 1 if success. 0 if user is not there in the table specified. -1 on error. 2 if more than 1 users are there.
function SignupUtility($email, $pwd, $name, $contact, $profile, $table) {
	global $connection;
	$resp = "-1";
	$userNo = 0;
	try {
		$userNo = IsUserExistInTable($email, $table);
		if($userNo == 1) {
			$query = "update " . $table . " set " . $table . "Name='$name', " . $table . "Pwd='$pwd', " . $table . "Contact='$contact', " . $table . "Profile='$profile' where " . $table . "Email='$email'";
			$rs = mysql_query($query);
			if(!$rs) {
				$resp = "-1";
			}
			else {
				$resp = "1";
			}
		}
		else if($userNo == 0) {
			$resp = "0";
		}
		else if($userNo > 1) {
			$resp = "2";
		}
		else {
			$resp = "-1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function to get the course of the user from the user table.
function GetCourseFromUserTable($email) {
	global $connection;
	$resp = "-1";
	try {
		$query = "select * from User where UserEmail='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$resp = $res["UserCourse"];
			}
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}	
}

// this is the function to send the mail to the user with the new password.
// returns 1 on success and -1 on Failure.
function ForgotPasswordUserMail($toEmail, $name, $newPwd) {
	$res = "-1";
	$mailBody = "";
	try{

		$subject = "Mentored-Research Password Changed";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: guide@mentored-research.com" . "\r\n";

		// write the mail body here.
		$mailBody .= "<h1>Mentored-Research Password Changed</h1><br />";
		$mailBody .= "Dear " . $name . ", <br />";
		$mailBody .= "Following are your new credentials for logging into Mentored-Research's Course:<br /><br />";

		$mailBody .= "User EmailAddress: <b>" . $toEmail . "</b><br />";
		$mailBody .= "Password: <b>" . $newPwd . "</b><br />";

		$mailBody .= "<br /><br />Thank You.";
		$mailBody .= "<br />Tech Team";
		$mailBody .= "<br /><a href='http://mentored-research.com'>Mentored-Research</a>";

		if(mail($toEmail, $subject, $mailBody, $headers) == true) {
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

// this is the utility function for updating the password.
function UpdatePasswordUtility($email, $newPwd, $table, $emailCol, $pwdCol) {
	$resp = "-1";
	try {
		$query = "update " . $table . " set " . $pwdCol . "='$newPwd' where " . $emailCol . "='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function to update the password of the user email
function UpdatePassword($email, $newPwd) {
	$res = "-1";
	if(GetUserLevel($email) == "A") {  // go to admin table.
		if(UpdatePasswordUtility($email, $newPwd, "Admin", "AdminEmail", "AdminPwd") == "1") {
			$res = "A";
		}
		else if(UpdatePasswordUtility($email, $newPwd, "Admin", "AdminEmail", "AdminPwd") == "-1") {
			$res = "-A";
		}
		else {
			$res = "-1";
		}
	}
	else if(GetUserLevel($email) == "B") {   // go to director table.
		if(UpdatePasswordUtility($email, $newPwd, "Director", "DirectorEmail", "DirectorPwd") == "1") {
			$res = "B";
		}
		else if(UpdatePasswordUtility($email, $newPwd, "Director", "DirectorEmail", "DirectorPwd") == "-1") {
			$res = "-B";
		}
		else {
			$res = "-1";
		}	
	}
	else if(GetUserLevel($email) == "C") {   // go to mentor table.
		if(UpdatePasswordUtility($email, $newPwd, "Mentor", "MentorEmail", "MentorPwd") == "1") {
			$res = "C";
		}
		else if(UpdatePasswordUtility($email, $newPwd, "Mentor", "MentorEmail", "MentorPwd") == "-1") {
			$res = "-C";
		}
		else {
			$res = "-1";
		}		
	}
	else if(GetUserLevel($email) == "D") {   // go to mentee table.
		if(UpdatePasswordUtility($email, $newPwd, "Mentee", "MenteeEmail", "MenteePwd") == "1") {
			$res = "D";
		}
		else if(UpdatePasswordUtility($email, $newPwd, "Mentee", "MenteeEmail", "MenteePwd") == "-1") {
			$res = "-D";
		}
		else {
			$res = "-1";
		}			
	}
	else if(GetUserLevel($email) == "") {   // user email not in the user table.
		$res = "0";
	}
	else if(GetUserLevel($email) == "-1") {   // error condition.
		$res = "-1";
	}
	return $res;
}

//this is the function to generate random password for forgot password utility
function GenerateRandomPassword() {
	$password = '';
	$desired_length = rand(8, 12);
	for($length = 0; $length < $desired_length; $length++) {
		$password .= chr(rand(32, 126));
	}
	return $password;
}

// this is the utility function for login. Returns 1 if exists. 0 if not exists. and -1 on error.
function LoginUtility($email, $pwd, $table, $emailCol, $pwdCol) {
	$resp = "-1";
	$i = 0;
	try {
		$query = "select * from " . $table . " where " . $emailCol . "='$email' and " . $pwdCol . "='$pwd'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$i++;	
			}
		}

		if($i == 0) {
			$resp = "0";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function to get user level from the User table.
function GetUserLevel($email) {
	global $connection;
	$resp = "";
	try {
		$query = "select * from User where UserEmail='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$resp = $res["UserLevel"];
			}
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function to check if an email address exists in the user table.
// returns 1 if it exists. 0 if it does not. -1 on error.
function IsUserExistInUserTable($email) {
	global $connection;
	$resp = "-1";
	$i = 0;
	try {
		$query = "select * from User where UserEmail='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$i++;	
			}		
		}

		if($i == 0) {
			$resp = "0";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function to get the number of users in the user Table. Returns -1 on Error.
function GetUserNumberInUserTable($email) {
	global $connection;
	$i = -1;
	try {
		$query = "select * from User where UserEmail='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = -1;
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$i++;
			}
		}
		return $i;
	}
	catch(Exception $e) {
		$resp = -1;
		return $resp;
	}
}

// this is the helper function to save the details to the log file.
function WriteToLog($txt) {
	$logFile = fopen("log/log.txt", "a");
	if(!$logFile) {
		die("Cannot write to log.");
	}
	else {
		$date = date("Y-m-d H:i:s");
		fwrite($logFile, $date . " --> " . $txt . "\n");
	}
	fclose($logFile);
}