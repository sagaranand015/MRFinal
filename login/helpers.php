<?php 

// this is the file for all the helper functions in the contact us page.

//these are for the PHP Helper files
include 'headers/databaseConn.php';

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