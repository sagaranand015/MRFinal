<?php 

session_start();

// this is the file for all the helper functions in the contact us page.

//these are for the PHP Helper files
include 'headers/databaseConn.php';

// for mandrill mail sending API.
require_once 'mandrill/Mandrill.php'; 

// to check if the user email is in the Team table or not.
function CheckTeamMember($email) {
	$resp = "-1";
	try {
		$query = "select * from Team where SecondaryUser='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {   // record exists
				$resp = mysql_fetch_array($rs);
			}
			else {
				$resp = "0";
			}
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// for sending the message through mandrill API.
function SendMail($to, $toName, $from, $fromName, $subject, $message) {
	try {
		$mandrill = new Mandrill('E1R2dN5PlF1ZnY2pWeX86Q');
		$message = array(
	        'html' => $message,
	        'subject' => $subject,
	        'from_email' => 'info@mentored-research.com',
	        'from_name' => 'Mentored-Research',
	        'to' => array(
	            array(
	                'email' => $to,
	                'name' => $toName,
	                'type' => 'to'
	            )
	        )
	    );
	    $async = false;
	    $ip_pool = 'Main Pool';
	    $send_at = null;
	    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
		return $result;
	} 
	catch(Mandrill_Error $e) {
		$res = "-1";
		return $res;
	    // echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
	    // throw $e;
	}
}

// this is the function to check if the user has signed up in a table.
// returns "" if signup is not done. else, signed up.
function IsAlreadySignedup($email, $table) {
	$resp = "-1";
	$pwd = "";
	global $connection;
	try {
		$query = "select * from " . $table . " where " . $table . "Email='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$pwd = $res[$table . "Pwd"];
			}
		}
		return $pwd;
	}	
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

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
	try {
		$subject = "Mentored-Research";

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

		$res = SendMail($toEmail, $name, "info@mentored-research.com", "Mentored-Research",  $subject, $mailBody);
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

		// write the mail body here.
		$mailBody .= "<h1>Mentored-Research</h1><br />";
		$mailBody .= "Dear " . $name . ", <br />";
		$mailBody .= "Welcome to the Mentored Research Family. Your Mentored-Research account has been created for you. You can now log into your account <a href='http://mentored-research.com/login' target='_blank'>HERE</a><br /><br />";
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

		$res = SendMail($toEmail, $name, "info@mentored-research.com", "Mentored-Research", $subject, $mailBody);
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
	$isSignedup = "";
	try {
		$userNo = IsUserExistInTable($email, $table);
		$isSignedup = IsAlreadySignedup($email, $table);

		// for encrypting the password thing
		$hash = hashSSHA($pwd);
        $encryptedPwd = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt

		if($userNo == 1 && $isSignedup == "") {
			$query = "update " . $table . " set " . $table . "Name='$name', " . $table . "Pwd='$encryptedPwd', Salt='$salt', " . $table . "Contact='$contact', " . $table . "Profile='$profile' where " . $table . "Email='$email'";
			$rs = mysql_query($query);
			if(!$rs) {
				$resp = "-1";
			}
			else {
				$resp = "1";
			}
		}
		else if($isSignedup != "") {    // user has already signed up.
			$resp = "3";
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

		// write the mail body here.
		$mailBody .= "<h1>Mentored-Research Password Changed</h1><br />";
		$mailBody .= "Dear " . $name . ", <br />";
		$mailBody .= "Following are your new credentials for logging into Mentored-Research's Course:<br /><br />";

		$mailBody .= "User EmailAddress: <b>" . $toEmail . "</b><br />";
		$mailBody .= "Password: <b>" . $newPwd . "</b><br />";

		$mailBody .= "<br /><br />Thank You.";
		$mailBody .= "<br />Tech Team";
		$mailBody .= "<br /><a href='http://mentored-research.com'>Mentored-Research</a>";

		$res = SendMail($toEmail, $name, "info@mentored-research.com", "Mentored-Research", $subject, $mailBody);
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
		if(IsAlreadySignedup($email, $table) != "") {

			// get the encrpyted password here and insert into the database. for encrypting the password thing
			$hash = hashSSHA($newPwd);
	        $encryptedPwd = $hash["encrypted"]; // encrypted password
	        $salt = $hash["salt"]; // salt

			$query = "update " . $table . " set " . $pwdCol . "='$encryptedPwd', Salt='$salt' where " . $emailCol . "='$email'";
			$rs = mysql_query($query);
			if(!$rs) {
				$resp = "-1";
			}
			else {
				$resp = "1";
			}
		}
		else {    // user has not signed up yet!
			$resp = "2";
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
	$pwd = "";
	$level = GetUserLevel($email);
	if($level == "A") {  // go to admin table.
		$pwd = UpdatePasswordUtility($email, $newPwd, "Admin", "AdminEmail", "AdminPwd");
		if($pwd == "1") {
			$res = "A";
		}
		else if($pwd == "-1") {
			$res = "-A";
		}
		else if($pwd == "2") {   // user has not signed up
			$res = "2";
		}
		else {
			$res = "-1";
		}
	}
	else if($level == "B") {   // go to director table.
		$pwd = UpdatePasswordUtility($email, $newPwd, "Director", "DirectorEmail", "DirectorPwd");
		if($pwd == "1") {
			$res = "B";
		}
		else if($pwd == "-1") {
			$res = "-B";
		}
		else if($pwd == "2") {  // not signed up yet!
			$res = "2";
		}
		else {
			$res = "-1";
		}	
	}
	else if($level == "C") {   // go to mentor table.
		$pwd = UpdatePasswordUtility($email, $newPwd, "Mentor", "MentorEmail", "MentorPwd");
		if($pwd == "1") {
			$res = "C";
		}
		else if($pwd == "-1") {
			$res = "-C";
		}
		else if($pwd == "2") {
			$res = "2";
		}
		else {
			$res = "-1";
		}		
	}
	else if($level == "D") {   // go to mentee table.
		$pwd = UpdatePasswordUtility($email, $newPwd, "Mentee", "MenteeEmail", "MenteePwd");
		if($pwd == "1") {
			$res = "D";
		}
		else if($pwd == "-1") {
			$res = "-D";
		}
		else if($pwd == "2") {
			$res = "2";
		}
		else {
			$res = "-1";
		}			
	}
	else if($level == "") {   // user email not in the user table.
		$res = "0";
	}
	else if($level == "-1") {   // error condition.
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
	try {
		$query = "select * from " . $table . " where " . $emailCol . "='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$no = mysql_num_rows($rs);
			if($no > 0) {
				$res = mysql_fetch_array($rs);
	            $salt = $res["Salt"];
	            $encrypted_password = $res[$table . "Pwd"];
	            $hash = checkhashSSHA($salt, $pwd);
	            // check for password equality
	            if ($encrypted_password == $hash) {
	                $resp = "1";
	                // set the global cookie here in PHP.
	                // setcookie("globalEmail", $res[$table . "Email"], time() + (86400 * 30), "/");
	                // setcookie("globalID", $res[$table . "ID"], time() + (86400 * 30), "/");
	                $_SESSION["globalEmail"] = $res[$table . "Email"];
	                $_SESSION["globalId"] = $res[$table . "ID"];
	            }
	            else {
	            	$resp = "0";
	            }
			}
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

/**
 * Encrypting password
 * @param password
 * returns salt and encrypted password
 */
function hashSSHA($password) {
    $salt = sha1(rand());
    $salt = substr($salt, 0, 10);
    $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
    $hash = array("salt" => $salt, "encrypted" => $encrypted);
    return $hash;
}

/**
 * Decrypting password
 * @param salt, password
 * returns hash string
 */
function checkhashSSHA($salt, $password) {
    $hash = base64_encode(sha1($password . $salt, true) . $salt);
    return $hash;
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