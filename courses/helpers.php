<?php 

// this is the file for all the helper functions in the contact us page.

//these are for the PHP Helper files
include 'headers/databaseConn.php';

// for mandrill mail sending API.
require_once 'mandrill/Mandrill.php'; 

// this is for sending the mail to the newly added user by the admin.
function SendNewUserMail($email) {
	$subject = "User Added - " . $email;

	$message = "Dear " . $email . "<br /><br />";
	$message .= "Congratulations! You are now a part of the Mentored-Research Family. You have been added to the M-R database. To get started with your account, please <a href='http://mentored-research.com/login/signup.php' target='_blank'>Sign Up Here.</a>" . "<br /><br />";
	$message .= "In case you face any issues, please put in a word to us at: guide@mentored-research.com <br /><br />";

	$message .= "Team Mentored-Research<br />";
	$message .= "info@mentored-research.com<br /><br />";
	$message .= "Please do not reply to this automated mail.<br /><br />";
	$res = SendMessage($email, $email, "info@mentored-research.com", "Mentored-Research", $subject, $message);
}

// this is for adding the data to the specified mentor table.
function AddToMenteeTable($organ, $course, $email, $table) {
	$resp = "-1";
	try {
		$query = "insert into " . $table . "(" . $table . "Email, " . $table . "Organ, " . $table . "Course) values('$email', '$organ', '$course')";
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

// this is for adding the data to the specified mentor table.
function AddToMentorTable($organ, $course, $email, $table) {
	$resp = "-1";
	try {
		$query = "insert into " . $table . "(" . $table . "Email, " . $table . "Organ, " . $table . "Course) values('$email', '$organ', '$course')";
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

// this is for adding the data to the specified Director table.
function AddToDirectorTable($organ, $email, $table) {
	$resp = "-1";
	try {
		$query = "insert into " . $table . "(" . $table . "Email, " . $table . "Organ) values('$email', '$organ')";
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

// for adding the email to the user table. 1 on success. -1 on error.
function AddToUserTable($email, $level) {
	$resp = "-1";
	try {
		$query = "insert into User(UserEmail, UserLevel) values('$email', '$level')";
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

// for sending the message through mandrill API.
function SendMessage($to, $toName, $from, $fromName, $subject, $message) {
	try {
		$mandrill = new Mandrill('E1R2dN5PlF1ZnY2pWeX86Q');
		$message = array(
	        'html' => $message,
	        'subject' => $subject,
	        'from_email' => 'sagar.anand015@gmail.com',
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
	}
}

// for getting the mentee details in a json response based on mentee email
// returns -1 on error. array of mentee details on success.
function GetMenteeDetailsByEmail($menteeEmail) {
	$resp = "-1";
	$mentee = array();
	try {
		$query = "select * from Mentee where MenteeEmail='$menteeEmail'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$mentee["MenteeName"] = $res["MenteeName"];
				$mentee["MenteeEmail"] = $res["MenteeEmail"];
				$mentee["MenteeContact"] = $res["MenteeContact"];
				$mentee["MenteeProfile"] = $res["MenteeProfile"];
				$mentee["MenteeCourse"] = $res["MenteeCourse"];
				$mentee["MenteeOrgan"] = $res["MenteeOrgan"];
				$mentee["MenteeMentor"] = $res["MenteeMentor"];
			}
		}
		$resp = $mentee;
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// for getting the mentor details in a json response based on mentor ID
// returns -1 on error. array of mentor details on success.
function GetMentorDetailsByEmail($mentorEmail) {
	$resp = "-1";
	$mentor = array();
	try {
		$query = "select * from Mentor where MentorEmail='$mentorEmail'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$mentor["MentorName"] = $res["MentorName"];
				$mentor["MentorEmail"] = $res["MentorEmail"];
				$mentor["MentorContact"] = $res["MentorContact"];
				$mentor["MentorProfile"] = $res["MentorProfile"];
				$mentor["MentorCourse"] = $res["MentorCourse"];
				$mentor["MentorOrgan"] = $res["MentorOrgan"];
				$mentor["MentorDirector"] = $res["MentorDirector"];
			}
		}
		$resp = $mentor;
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// for getting the mentor details in a json response based on mentor ID
// returns -1 on error. array of mentor details on success.
function GetMentorDetails($mentorID) {
	$resp = "-1";
	$mentor = array();
	try {
		$query = "select * from Mentor where MentorID='$mentorID'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$mentor["MentorName"] = $res["MentorName"];
				$mentor["MentorEmail"] = $res["MentorEmail"];
				$mentor["MentorContact"] = $res["MentorContact"];
				$mentor["MentorProfile"] = $res["MentorProfile"];
				$mentor["MentorCourse"] = $res["MentorCourse"];
				$mentor["MentorOrgan"] = $res["MentorOrgan"];
				$mentor["MentorDirector"] = $res["MentorDirector"];
			}
		}
		$resp = $mentor;
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// for getting the mentorID of the mentee passed.
// returns 0 if mentor not assigned. -1 on error. mentorID on success.
function GetMentorIDOfMentee($email, $id) {
	$resp = "-1";
	try {
		$query = "select * from Mentee where MenteeEmail='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$resp = $res["MenteeMentor"];
			}
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function for registering the guide url to the database table.
function RegisterGuideUrl($courseID, $guideName, $url) {
	$resp = "-1";
	try {
		$query = "insert into Guide(GuideName, Guide, GuideCourse) values('$guideName', '$url', '$courseID')";
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

// this is the function to register the Assignment Off Topic upload to the database in the Assignment table.
// returns -1 on error. 1 on success.
function RegisterAssignmentExtra($assID, $courseID, $extraLink) {
	$resp = "-1";
	try {
		$query = "insert into AssignmentExtra(AssID, AssExtra) values('$assID', '$extraLink')";
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

// this is the function to register the Assignment Off Topic upload to the database in the Assignment table.
// returns -1 on error. 1 on success.
function RegisterAssignmentOffTopic($assID, $courseID, $offTopicLink) {
	$resp = "-1";
	try {
		$query = "insert into AssignmentOffTopic(AssID, AssOffTopic) values('$assID', '$offTopicLink')";
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

// this is the function to register the Assignment Sample Report upload to the database in the Assignment table.
// returns -1 on error. 1 on success.
function RegisterAssignmentSampleReport($assID, $courseID, $sampleReportLink) {
	$resp = "-1";
	try {
		$query = "insert into AssignmentSampleReport(AssID, AssSampleReport) values('$assID', '$sampleReportLink')";
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

// this is the function to register the Assignment PDF upload to the database in the Assignment table.
// returns -1 on error. 1 on success.
function RegisterAssignmentPDF($assID, $courseID, $assLink) {
	$resp = "-1";
	try {
		$query = "update Assignment set AssPdf='$assLink' where AssID='$assID' and AssCourse='$courseID'";
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

// this is the function to get the mentee course from the mentee Table.
// returns -1 on error. returning 0 means course is not assigned to mentee.
function GetMenteeCourse($menteeEmail) {
	$resp = "-1";
	$courseID = "-1";
	try {
		$query = "select * from Mentee where MenteeEmail='$menteeEmail'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$courseID = $res["MenteeCourse"];
			}
		}
		return $courseID;
	}	
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function for registering the calender url to the database table.
function RegisterCalenderUrl($courseID, $url) {
	$resp = "-1";
	try {
		$query = "insert into Calender(CourseID, Calender) values('$courseID', '$url')";
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

?>