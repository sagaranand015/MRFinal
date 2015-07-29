<?php 

// this is the file for all the AJAX Requests from the contact us page.

//these are for the PHP Helper files
include ('headers/databaseConn.php');
include('helpers.php');

if(isset($_GET["no"]) && $_GET["no"] == "1") {  // for updating the profile data
	UpdateProfile($_GET["email"], $_GET["name"], $_GET["contact"], $_GET["profile"], $_GET["table"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "2") {  // for loading the profile data
	LoadProfileData($_GET["email"], $_GET["table"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "3") {  // for getting a list of organisations in a drop down list.
	GetOrganisationsDropDown();
}
else if(isset($_GET["no"]) && $_GET["no"] == "4") {  // for adding the course into the database.
	AddCourse($_GET["name"], $_GET["duration"], $_GET["edition"], $_GET["desc"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "5") {  // for adding the organisation/campus into the database.
	AddOrganisation($_GET["name"], $_GET["contact"], $_GET["address"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "6") {  // for getting the courses as a drop down list
	GetCoursesDropDown();
}
else if(isset($_GET["no"]) && $_GET["no"] == "7") {  // for getting the calender image on the mentee page.
	GetCalender($_GET["menteeEmail"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "8") {  // for getting the latest assignment from of the course
	GetLatestAssignment($_GET["courseID"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "9") {  // for adding the assignment details to the database table
	AddAssignmentDetails($_GET["assCourse"], $_GET["assName"], $_GET["assDesc"], $_GET["assPostedOn"], $_GET["assPostedBy"], $_GET["assDeadline"], $_GET["assNo"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "10") {  // for getting the assignments as a drop down list
	GetAssignmentsDropDown($_GET["courseAssPDF"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "11") {  // for adding the video link to the database for a particular assignment.
	RegisterAssignmentVideo($_GET["assID"], $_GET["assVideo"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "12") {  // for getting the assignments based on a mentee email and id.
	GetMenteeAssignment($_GET["email"], $_GET["id"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "13") {  // for getting the assignment material based on Assignment ID chosen by mentee.
	GetAssignmentMaterial($_GET["assID"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "14") {  // for getting the mentor of a particular mentee.
	GetMentorDetailsOfMentee($_GET["email"], $_GET["id"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "15") {  // for sending the message from the mentee to the mentor.
	SendMessageFromMenteeToMentor($_GET["toEmail"], $_GET["msg"], $_GET["email"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "16") {  // for adding the user to the User and the Specified table.
	AddUser($_GET["organ"], $_GET["course"], $_GET["email"], $_GET["level"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "17") {  // for changing the password of the specified Account.
	ChangePassword($_GET["email"], $_GET["oldPassword"], $_GET["newPassword"], $_GET["newPasswordConfirm"], $_GET["table"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "18") {  // for getting the assignments based on a mentor email and id.
	GetMentorAssignment($_GET["email"], $_GET["id"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "19") {  // for getting the calender image on the mentor page.
	GetMentorCalender($_GET["mentorEmail"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "20") {  // for getting the director details of a particular mentor.
	GetDirectorDetailsOfMentor($_GET["email"], $_GET["id"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "21") {  // for sending the message from the mentor to the director.
	SendMessageFromMentorToDirector($_GET["toEmail"], $_GET["msg"], $_GET["email"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "22") {  // to get the calender based on the Course ID.
	GetCourseCalender($_GET["courseId"]);
}

// to get the calender based on the Course ID.
// gives the link to the calender on success. -1 on error.
function GetCourseCalender($courseId) {
	$resp = "-1";
	$calender = "";
	try {
		$query = "select * from Calender where CourseID='$courseId'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$calender = $res["Calender"];
			}
			$resp = "http://mentored-research.com/" . $calender;
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for getting the mentor of a particular mentee.
function GetDirectorDetailsOfMentor($email, $id) {
	$resp = "-1";
	$director = array();
	$directorId = "0";
	try {
		$directorId = GetDirectorIdOfMentor($email, $id);
		if($directorId == "0") {
			$resp = "-2";
		}
		else if($directorId == "-1") {
			$resp = "-1";
		}
		else {
			$director = GetDirectorDetails($directorId);
			header('Content-Type: application/json');
			$resp = json_encode($director);
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for getting the calender image on the mentor page.
// returns -2 if course is not assigned. -1 on error. CalenderURL on succes.
function GetMentorCalender($mentorEmail) {
	$resp = "-1";
	$courseID = GetMentorCourse($mentorEmail);
	$calender = "";
	try {
		if($courseID == "-1" || $courseID == "0") {
			$resp = "-2";
		}
		else {
			$query = "select * from Calender where CourseID='$courseID'";
			$rs = mysql_query($query);
			if(!$rs) {
				$resp = "-1";
			}
			else {
				while ($res = mysql_fetch_array($rs)) {
					$calender = $res["Calender"];
				}
				$resp = "http://mentored-research.com/" . $calender;
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for getting the assignments based on a mentor's email and id.
// returns -2 if the course is not assigned. -1 on error. html list on success.
function GetMentorAssignment($email, $id) {
	$resp = "-1";
	$assCourse = "-1";
	try {
		$assCourse = GetMentorCourse($email);
		if($assCourse == "0") {
			$resp = "-2";
		}
		else if($assCourse == "-1") {
			$resp = "-1";
		}
		else {
			$query = "select * from Assignment where AssCourse='$assCourse'";
			$rs = mysql_query($query);
			if(!$rs) {
				$resp = "-1";
			}
			else {
				$resp = "<select id='ddl-assignment' class='form-control'><option value='-1'> --Select Assignment-- </option>";
				while ($res = mysql_fetch_array($rs)) {
					$resp .= "<option value='" . $res["AssID"] . "' >" . $res["AssName"] . "</option>";
				}
				$resp .= "</select>";
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for changing the password of the specified Account.  Returns 0 if the old password is incorrect. 1 on successful change. -1 on error.
function ChangePassword($email, $oldPassword, $newPassword, $newPasswordConfirm, $table) {
	$resp = "-1";
	try {
		$query = "select * from " . $table . " where " . $table . "Email='$email'";
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
	            $hash = checkhashSSHA($salt, $oldPassword);
	            if ($encrypted_password == $hash) {    // old Password matches. Now, update the password here.
	                $resp = ChangePasswordUtility($email, $newPassword, $table);
	            }
	            else {
	            	$resp = "0";
	            }
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for adding the user to the User and the Specified table.
function AddUser($organ, $course, $email, $level) {
	$resp = "-1";
	$userAdd = "-1";
	$userTable = "-1";
	try {
		if($level == "B") {   // for adding the director.
			$userAdd = AddToUserTable($email, $level);
			$userTable = AddToDirectorTable($organ, $email, "Director");
		}
		else if($level == "C") {
			$userAdd = AddToUserTable($email, $level);
			$userTable = AddToMentorTable($organ, $course, $email, "Mentor");
		}
		else if($level == "D") {
			$userAdd = AddToUserTable($email, $level);
			$userTable = AddToMenteeTable($organ, $course, $email, "Mentee");
		}
		else {
			$resp = "-1";
		}

		if($userAdd == "1" && $userTable == "1") {   // successful insertions.
			SendNewUserMail($email);
			$resp = "1";
		}
		else {
			$resp = "-1";
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for sending the message from the mentee to the mentor.
function SendMessageFromMentorToDirector($toEmail, $msg, $email) {
	$directorArr = GetDirectorDetailsByEmail($toEmail);
	$mentorArr = GetMentorDetailsByEmail($email);

	// mentor names and email address
	$directorEmail = $directorArr["DirectorEmail"];
	$directorName = $directorArr["DirectorName"];

	// mentee name and email address
	$mentorEmail = $mentorArr["MentorEmail"];
	$mentorName = $mentorArr["MentorName"];

	$subject = $mentorName . " - Query Received";

	$message = "Dear " . $directorName . "<br /><br />";
	$message .= "You have Received a query from one of your mentors, namely " . $mentorName . " (" . $mentorEmail . "). Please repond to him either privately or through the <a href='http://mentored-research.com/login' target='_blank'>MR-Portal</a> <br /><br />";
	$message .= $msg . "<br /><br />";

	$message .= "Team Mentored-Research<br />";
	$message .= "info@mentored-research.com<br /><br />";
	$message .= "Please do not reply to this automated mail.<br />";

	$res = SendMessage($directorEmail, $directorName, $mentorEmail, $mentorName, $subject, $message);
	if($res == "-1") {
		echo $res;
	}
	else {
		header('Content-Type: application/json');
		echo json_encode($res);
	}
}

// for sending the message from the mentee to the mentor.
function SendMessageFromMenteeToMentor($toEmail, $msg, $email) {
	$mentorArr = GetMentorDetailsByEmail($toEmail);
	$menteeArr = GetMenteeDetailsByEmail($email);

	// mentor names and email address
	$mentorEmail = $mentorArr["MentorEmail"];
	$mentorName = $mentorArr["MentorName"];

	// mentee name and email address
	$menteeEmail = $menteeArr["MenteeEmail"];
	$menteeName = $menteeArr["MenteeName"];

	$subject = $menteeName . " - Query Received";

	$message = "Dear " . $mentorName . "<br /><br />";
	$message .= "You have Received a query from one of your mentees, namely " . $menteeName . " (" . $menteeEmail . "). Please repond to him either privately or through the <a href='http://mentored-research.com/login' target='_blank'>MR-Portal</a> <br /><br />";
	$message .= $msg . "<br /><br />";

	$message .= "Team Mentored-Research<br />";
	$message .= "info@mentored-research.com<br /><br />";
	$message .= "Please do not reply to this automated mail.<br />";

	$res = SendMessage($mentorEmail, $mentorName, $menteeEmail, $menteeName, $subject, $message);
	if($res == "-1") {
		echo $res;
	}
	else {
		header('Content-Type: application/json');
		echo json_encode($res);
	}
}

// for getting the mentor of a particular mentee.
function GetMentorDetailsOfMentee($email, $id) {
	$resp = "-1";
	$mentor = array();
	$mentorID = "0";
	try {
		$mentorID = GetMentorIDOfMentee($email, $id);
		if($mentorID == "0") {
			$resp = "-2";
		}
		else if($mentorID == "-1") {
			$resp = "-1";
		}
		else {
			$mentor = GetMentorDetails($mentorID);
			header('Content-Type: application/json');
			$resp = json_encode($mentor);
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for getting the assignment material based on Assignment ID chosen by mentee.
function GetAssignmentMaterial($assID) {
	$resp = "-1";
	$assignment = array();
	$assVideo = array();
	$assSampleReport = array();
	$assOffTopic = array();
	$assExtra = array();
	$i = 0;   // for the array index.
	try {
		// firstly, get the assignment details in an array.
		$detailsQuery = "select * from Assignment where AssID='$assID'";
		$detailsRs = mysql_query($detailsQuery);
		if(!$detailsRs) {
			$assignment[$i] = "-1";  $i++;
		}
		else {
			while ($detailsRes = mysql_fetch_array($detailsRs)) {
				$assignment["AssCourse"] = $detailsRes["AssCourse"];   $i++;  // i == 0 before and i == 1 afterwards.
				$assignment["AssName"] = $detailsRes["AssName"];   $i++;
				$assignment["AssDesc"] = $detailsRes["AssDesc"];   $i++;
				$assignment["AssPostedOn"] = $detailsRes["AssPostedOn"];   $i++;
				$assignment["AssPostedBy"] = $detailsRes["AssPostedBy"];   $i++;
				$assignment["AssDeadline"] = $detailsRes["AssDeadline"];   $i++;
				$assignment["AssPdf"] = $detailsRes["AssPdf"];   $i++;
				$assignment["AssNo"] = $detailsRes["AssNo"];   $i++;
			}
		}

		//now, get the Assignment Video lectures.
		$videoQuery = "select * from AssignmentVideo where AssID='$assID'";
		$videoRs = mysql_query($videoQuery);
		if(!$videoRs) {
			$assVideo[0] = "-1";
		}
		else {
			$j = 0;
			while ($videoRes = mysql_fetch_array($videoRs)) {
				$assVideo[$j] = $videoRes["AssVideo"];  
				$j++;
			}
			$assignment["AssVideo"] = $assVideo;
			$i++;
		}

		//now, get the Assignment Sample Reports.
		$reportQuery = "select * from AssignmentSampleReport where AssID='$assID'";
		$reportRs = mysql_query($reportQuery);
		if(!$reportRs) {
			$assSampleReport[0] = "-1";
		}
		else {
			$j = 0;
			while ($reportRes = mysql_fetch_array($reportRs)) {
				$assSampleReport[$j] = $reportRes["AssSampleReport"];  
				$j++;
			}
			$assignment["AssSampleReport"] = $assSampleReport;
			$i++;
		}

		// for the Assignment Off topic reads.
		$offQuery = "select * from AssignmentOffTopic where AssID='$assID'";
		$offRs = mysql_query($offQuery);
		if(!$offRs) {
			$assOffTopic[0] = "-1";
		}
		else {
			$j = 0;
			while ($offRes = mysql_fetch_array($offRs)) {
				$assOffTopic[$j] = $offRes["AssOffTopic"];  
				$j++;
			}
			$assignment["AssOffTopic"] = $assOffTopic;
			$i++;
		}

		// for the Assignment Off topic reads.
		$extraQuery = "select * from AssignmentExtra where AssID='$assID'";
		$extraRs = mysql_query($extraQuery);
		if(!$extraRs) {
			$assExtra[0] = "-1";
		}
		else {
			$j = 0;
			while ($extraRes = mysql_fetch_array($extraRs)) {
				$assExtra[$j] = $extraRes["AssExtra"];  
				$j++;
			}
			$assignment["AssExtra"] = $assExtra;
			$i++;
		}

		header('Content-Type: application/json');
		$resp = json_encode($assignment);
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for getting the assignments based on a mentee email and id.
// returns -2 if the course is not assigned. -1 on error. html list on success.
function GetMenteeAssignment($email, $id) {
	$resp = "-1";
	$assCourse = "-1";
	try {
		$assCourse = GetMenteeCourse($email);
		if($assCourse == "0") {
			$resp = "-2";
		}
		else if($assCourse == "-1") {
			$resp = "-1";
		}
		else {
			$query = "select * from Assignment where AssCourse='$assCourse'";
			$rs = mysql_query($query);
			if(!$rs) {
				$resp = "-1";
			}
			else {
				$resp = "<select id='ddl-assignment' class='form-control'><option value='-1'> --Select Assignment-- </option>";
				while ($res = mysql_fetch_array($rs)) {
					$resp .= "<option value='" . $res["AssID"] . "' >" . $res["AssName"] . "</option>";
				}
				$resp .= "</select>";
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for adding the video link to the database for a particular assignment.
function RegisterAssignmentVideo($assID, $assVideo) {
	$resp = "-1";
	try {
		$query = "insert into AssignmentVideo(AssID, AssVideo) values('$assID', '$assVideo')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for getting the assignments as a drop down list
function GetAssignmentsDropDown($assCourse) {
	$resp = "-1";
	try {
		$query = "select * from Assignment where AssCourse='$assCourse'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "<select id='ddl-assignment' class='form-control'><option value='-1'> --Select Assignment-- </option>";
			while ($res = mysql_fetch_array($rs)) {
				$resp .= "<option value='" . $res["AssID"] . "' >" . $res["AssName"] . "</option>";
			}
			$resp .= "</select>";
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for adding the assignment details to the database table
function AddAssignmentDetails($assCourse, $assName, $assDesc, $assPostedOn, $assPostedBy, $assDeadline, $assNo) {
	$resp = "-1";
	$assPostedOn = strtotime($assPostedOn);
	$assDeadline = strtotime($assDeadline);
	try {
		$query = "insert into Assignment(AssCourse, AssName, AssDesc, AssPostedOn, AssPostedBy, AssDeadline, AssNo) values('$assCourse', '$assName', '$assDesc', '$assPostedOn', '$assPostedBy', '$assDeadline', '$assNo')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for getting the latest assignment from of the course
function GetLatestAssignment($courseID) {
	$resp = "-1";
	try {
		$query = "select count(*) as AssNo from Assignment where AssCourse='$courseID'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$resp = $res["AssNo"];
			}
		}
		$resp = intval($resp) + 1;
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for getting the calender image on the mentee page.
// returns -2 if course is not assigned. -1 on error. CalenderURL on succes.
function GetCalender($menteeEmail) {
	$resp = "-1";
	$courseID = GetMenteeCourse($menteeEmail);
	$calender = "";
	try {
		if($courseID == "-1" || $courseID == "0") {
			$resp = "-2";
		}
		else {
			$query = "select * from Calender where CourseID='$courseID'";
			$rs = mysql_query($query);
			if(!$rs) {
				$resp = "-1";
			}
			else {
				while ($res = mysql_fetch_array($rs)) {
					$calender = $res["Calender"];
				}
				$resp = "http://mentored-research.com/" . $calender;
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for getting the courses as a drop down list
function GetCoursesDropDown() {
	$resp = "-1";
	try {
		$query = "select * from Course";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "<select id='ddl-course' class='form-control'><option value='-1'> --Select Course-- </option>";
			while ($res = mysql_fetch_array($rs)) {
				$resp .= "<option value='" . $res["CourseID"] . "' >" . $res["CourseName"] . "</option>";
			}
			$resp .= "</select>";
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for adding the organisation/campus into the database.
function AddOrganisation($name, $contact, $address) {
	$resp = "-1";
	try {
		$query = "insert into Organisation(OrganName, OrganContact, OrganAddress) values('$name', '$contact', '$address')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for adding the course into the database.
function AddCourse($name, $duration, $edition, $desc) {
	$resp = "-1";
	try {
		$query = "insert into Course(CourseName, CourseDuration, CourseEdition, CourseDesc) values('$name', '$duration', '$edition', '$desc')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp ="-1";
		}
		else {
			$resp = "1";
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for updating the profile data
function UpdateProfile($email, $name, $contact, $profile, $table) {
	$resp = "-1";
	try {
		$query = "update " . $table . " set " . $table . "Name='$name', " . $table . "Contact='$contact', " . $table . "Profile='$profile' where " . $table . "Email='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for getting a list of organizations in a drop down list.
function GetOrganisationsDropDown() {
	$resp = "-1";
	$i = 0;
	try {
		$query = "select * from Organisation";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "<select id='ddl-organisation' class='form-control'><option value='-1'> --Select Organization-- </option>";
			while ($res = mysql_fetch_array($rs)) {
				$resp .= "<option value='" . $res["OrganID"] . "' >" . $res["OrganName"] . "</option>";
			}
			$resp .= "</select>";
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// this is the function to load the profile data from the database.
function LoadProfileData($email, $table) {
	$resp = "-1";
	$id = "";
	$name = "";
	$contact = "";
	$profile = "";
	$organ = "";
	try {
		$query = "select * from " . $table . " where " . $table . "Email='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$id = $res[$table . "ID"];
				$name = $res[$table . "Name"];
				$contact = $res[$table . "Contact"];
				$profile = $res[$table . "Profile"];
				$organ = $res[$table . "Organ"];
			}
		}
		if($id == "") {   // to check if the user is in the table or not.
			$resp = "-2";
		}
		else {
			$resp = $email . " ~~ " . $name . " ~~ " . $contact . " ~~ " . $organ . " ~~ " . $profile . " ~~ " . $id;
		}
		echo $resp; 
	}	
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

?>