<?php 

// this is the file for all the helper functions in the contact us page.

//these are for the PHP Helper files
include 'headers/databaseConn.php';

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