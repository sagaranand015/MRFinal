<?php 

// this is the file for all the AJAX Requests from the contact us page.

//these are for the PHP Helper files
include ('headers/databaseConn.php');
include('helpers.php');

if(isset($_GET["no"]) && $_GET["no"] == "1") {   // for login
	Login($_GET["email"], $_GET["pwd"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "2") {   // for forgot password
	ForgotPassword($_GET["pwdName"], $_GET["pwdEmail"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "3") {   // for signup
	Signup($_GET["email"], $_GET["pwd"], $_GET["name"], $_GET["contact"], $_GET["profile"]);
}

// this is the function for the user signup
function Signup($email, $pwd, $name, $contact, $profile) {
	$res = "-1";
	if(GetUserLevel($email) == "A") {  // go to admin table.
		$signup = SignupUtility($email, $pwd, $name, $contact, $profile, "Admin");
		if($signup == "1") {
			$res = "A";
		}
		else if($signup == "0") {
			$res = "-A";
		}
		else if($signup == "2") {
			$res = "2";
		}
		else {
			$res = "-1";
		}
	}
	else if(GetUserLevel($email) == "B") {   // go to director table.
		$signup = SignupUtility($email, $pwd, $name, $contact, $profile, "Director");
		if($signup == "1") {
			$res = "B";
		}
		else if($signup == "0") {
			$res = "-B";
		}
		else if($signup == "2") {
			$res = "2";
		}
		else {
			$res = "-1";
		}	
	}
	else if(GetUserLevel($email) == "C") {   // go to mentor table.
		$signup = SignupUtility($email, $pwd, $name, $contact, $profile, "Mentor");
		if($signup == "1") {
			$res = "C";
		}
		else if($signup == "0") {
			$res = "-C";
		}
		else if($signup == "2") {
			$res = "2";
		}
		else {
			$res = "-1";
		}		
	}
	else if(GetUserLevel($email) == "D") {   // go to mentee table.
		$signup = SignupUtility($email, $pwd, $name, $contact, $profile, "Mentee");
		if($signup == "1") {
			$res = "D";
		}
		else if($signup == "0") {
			$res = "-D";
		}
		else if($signup == "2") {
			$res = "2";
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

	// send mail to the user that sign up is successful.
	if($res == "A" || $res == "B" || $res == "C" || $res == "D") {
		SignupUserMail($email, $name);
	}
	else if($res = "0") {   // user not in register table.
		// add the record to the OtherUser Table here.
		AddToOtherUser($email, $pwd, $name, $contact, $profile);
		NotRegisteredUserMail($email, $name);
	}
	echo $res;
}

// this is the function for generating a random password and notifying the user
// returns 2 if the mail is unsuccessful.
function ForgotPassword($name, $email) {
	$newPwd = GenerateRandomPassword();
	$res = "-1";
	if(UpdatePassword($email, $newPwd) == "A" || UpdatePassword($email, $newPwd) == "B" || UpdatePassword($email, $newPwd) == "C" || UpdatePassword($email, $newPwd) == "D") {
		// write the mail here.
		if(ForgotPasswordUserMail($email, $name, $newPwd) == "1") {
			$res = "1";
		}
		else {
			$res = "2";
		}
	}
	else if(UpdatePassword($email, $newPwd) == "-A" || UpdatePassword($email, $newPwd) == "-B" || UpdatePassword($email, $newPwd) == "-C" || UpdatePassword($email, $newPwd) == "-D" || UpdatePassword($email, $newPwd) == "0") {
		// could not find the email address in the database.
		$res = "0";
	}
	else {  // error condition.
		$res = "-1";
	}
	echo $res;
}

// this is the function for the main Login functionality. 
// returns A for Admin, B for Director, C for Mentor and D for Mentee. (-) if the password is incorrect or something.
// returns 0 if the email is not there in the User table.
// returns -1 on error.
function Login($email, $pwd) {
	$res = "-1";
	if(GetUserLevel($email) == "A") {  // go to admin table.
		if(LoginUtility($email, $pwd, "Admin", "AdminEmail", "AdminPwd") == "1") {
			$res = "A";
		}
		else if(LoginUtility($email, $pwd, "Admin", "AdminEmail", "AdminPwd") == "0") {
			$res = "-A";
		}
		else {
			$res = "-1";
		}
	}
	else if(GetUserLevel($email) == "B") {   // go to director table.
		if(LoginUtility($email, $pwd, "Director", "DirectorEmail", "DirectorPwd") == "1") {
			$res = "B";
		}
		else if(LoginUtility($email, $pwd, "Director", "DirectorEmail", "DirectorPwd") == "0") {
			$res = "-B";
		}
		else {
			$res = "-1";
		}	
	}
	else if(GetUserLevel($email) == "C") {   // go to mentor table.
		if(LoginUtility($email, $pwd, "Mentor", "MentorEmail", "MentorPwd") == "1") {
			$res = "C";
		}
		else if(LoginUtility($email, $pwd, "Mentor", "MentorEmail", "MentorPwd") == "0") {
			$res = "-C";
		}
		else {
			$res = "-1";
		}		
	}
	else if(GetUserLevel($email) == "D") {   // go to mentee table.
		if(LoginUtility($email, $pwd, "Mentee", "MenteeEmail", "MenteePwd") == "1") {
			$res = "D";
		}
		else if(LoginUtility($email, $pwd, "Mentee", "MenteeEmail", "MenteePwd") == "0") {
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
	echo $res;
}

