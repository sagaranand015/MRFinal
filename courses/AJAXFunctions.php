<?php 

// this is the file for all the AJAX Requests from the contact us page.

//these are for the PHP Helper files
include ('headers/databaseConn.php');
include('helpers.php');

// for mandrill mail sending API.
require_once 'mandrill/Mandrill.php'; 

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
	RegisterAssignmentVideo($_GET["assID"], $_GET["assVideo"], $_GET["assVideoName"]);
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
else if(isset($_GET["no"]) && $_GET["no"] == "23") {  // to send the invites to the list of people.
	SendInvite($_GET["list"], $_GET["msg"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "24") {  // to get the latest assignment for the mentee.
	GetLatestAssignmentMentee($_GET["email"], $_GET["id"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "25") {  // to get the list of all the assignments submitted by the mentee
	GetMenteeLastSubmittedAssignmentList($_GET["email"], $_GET["id"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "26") {  // to get the list of all the mentees of a particular mentor.
	GetMenteesOfMentor($_GET["email"], $_GET["id"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "27") {  // to get the list of all the assignments submitted by the mentee selected.
	GetMenteeSubmittedAssignmentsForMentor($_GET["email"], $_GET["id"], $_GET["menteeId"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "28") {  // to get the list of all the assignments submitted by the mentee on the mentee page.
	GetMenteeAssignments($_GET["email"], $_GET["id"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "29") {  // to get the list of all the mentors based on organisation and courses.
	GetMentorsFromOrganCourse($_GET["organ"], $_GET["course"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "30") {  // to get the list of all the mentees based on organisation and courses.
	GetMenteesFromOrganCourse($_GET["organ"], $_GET["course"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "31") {  // to assign the mentor to the mentees selected.
	AssignMentorToMentees($_GET["mentorId"], $_GET["mentees"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "32") {  // to get directors, mentors and mentees from the organisation.
	GetAllUsersByOrgan($_GET["organ"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "33") {  // to send a message from the admin to any of the users.
	SendAdminMessage($_GET["email"], $_GET["msg"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "34") {  // to set all the questions, answers and options to the database.
	AddQuiz($_GET["courseId"], $_GET["assId"], $_GET["quizName"], $_GET["deadline"], $_GET["questions"], $_GET["answers"], $_GET["options"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "35") {  // to get the quiz details to be shown on the Attempt quiz page.
	GetQuizDetailsByAssignment($_GET["assId"], $_GET["menteeId"], $_GET["menteeEmail"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "36") {  // to get the quiz questions and options to be shown to the mentee.
	GetQuizQuestionsAndOptions($_GET["quizId"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "37") {  // to evaluate the basic quiz
	SubmitAndEvaluateBasicQuiz($_GET["ans"], $_GET["quizId"], $_GET["assId"], $_GET["menteeId"], $_GET["menteeEmail"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "38") {  // to get the mentee submission and feedback status, along with message sending to the mentee.
	GetMenteeStatusForMentor($_GET["mentorId"], $_GET["mentorEmail"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "39") {  // for sending a multipurpose message from the mentor to any of the mentees.(or any other message)
	SendMultipurposeMessage($_GET["toEmail"], $_GET["msg"], $_GET["fromEmail"]);	
}
else if(isset($_GET["no"]) && $_GET["no"] == "40") {  // to get the mentee submission and feedback status for the admin and director pages.
	GetMenteeStatusForAdminAndDirector($_GET["assId"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "41") {  // for sending the query regarding the assignments
	SendAssignmentQuery($_GET["no"], $_GET["email"], $_GET["id"], $_GET["name"], $_GET["contact"], $_GET["msg"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "42") {  // for sending the query regarding the assignments
	SendTechnicalQuery($_GET["no"], $_GET["email"], $_GET["id"], $_GET["name"], $_GET["contact"], $_GET["msg"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "43") {  // for sending the query regarding the assignments
	SendDeadlineQuery($_GET["no"], $_GET["email"], $_GET["id"], $_GET["name"], $_GET["contact"], $_GET["msg"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "44") {  // for getting all the documents for mentor or mentee(based on courseID)
	GetDocumentsForMentee($_GET["email"], $_GET["id"]);     // includes guides, annual reports and financial documents.
}
else if(isset($_GET["no"]) && $_GET["no"] == "45") {  // to add the advanced quiz's quiestions and answers to the db
	AddAdvancedQuiz($_GET["courseId"], $_GET["assId"], $_GET["quizName"], $_GET["deadline"], $_GET["questions"], $_GET["answers"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "46") {  //to get the questions and answers from the db and show in the modal
	GetAdvancedQuizQuestionsAndOptions($_GET["quizId"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "47") {  // to submit the advanced quiz to the server(to be evaluated by the admin)
	SubmitAdvancedQuiz($_GET["ans"], $_GET["quizId"], $_GET["assId"], $_GET["menteeId"], $_GET["menteeEmail"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "48") {  // to get the quiz list, filtered by assId and courseId
	GetQuizDropDown($_GET["assId"], $_GET["courseId"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "49") {  // to get the mentee status and answers from the QuizResponse table.
	GetMenteeQuizStatus($_GET["assId"], $_GET["courseId"], $_GET["quizId"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "50") {  // to evaluate/update the score of the mentee in the Advanced Quiz response
	EvaluateAdvancedQuiz($_GET["assId"], $_GET["courseId"], $_GET["menteeId"], $_GET["quizId"], $_GET["score"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "51") {  // to add the primaryUser and secondaryUser to the Team table.
	AddToTeam($_GET["primaryUser"], $_GET["secondaryUser"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "52") {  // to add the team member email to the Users table and Mentee table
	AddTeamMember($_GET["email"], $_GET["id"], $_GET["memberEmail"]);
}

// to add the team member email to the Users table and Mentee table
function AddTeamMember($email, $id, $memberEmail) {
	$resp = "-1";
	$exists = "-1";
	$assign = "-1";
	try {
		$mentee = GetMenteeDetails($id);
		// firstly, check if the memberEmail exists in the team Table.
		$isMemberExists = CheckMemberEmailInTeamTable($email, $memberEmail);
		if($isMemberExists == "-1") {
			$exists = "-1";  // error
		}
		else if($isMemberExists == "0") {
			$exists = "0";  // member email does not exists
		}
		else {
			// add the user to the Users and Mentee Table and then assign the mentor to the newly added mentee.
			$exists = "1";
			$resp = AddTeamUser($mentee["MenteeOrgan"], $mentee["MenteeCourse"], $memberEmail, "D");
			if($resp == "1") {
				$newMember = GetMenteeDetailsByEmail($memberEmail);	
				$assign = AssignMentor($mentee["MenteeMentor"], $newMember["MenteeID"]);
			}
		}
		// $resp = 0 means that the newUser email already exists in the mentee table.
		echo $exists . " ~~ " . $resp . " ~~ " . $assign;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to add the primaryUser and secondaryUser to the Team table.
function AddToTeam($primaryUser, $secondaryUser) {
	$resp = "-1";
	try {
		$mentee = GetMenteeDetails($primaryUser);
		$menteeEmail = $mentee["MenteeEmail"];
		$query = "insert into Team(PrimaryUser, SecondaryUser) values('$menteeEmail', '$secondaryUser')";
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

// to evaluate/update the score of the mentee in the Advanced Quiz response
function EvaluateAdvancedQuiz($assId, $courseId, $menteeId, $quizId, $score) {
	$resp = "-1";
	try {
		$query = "update QuizResponse set CorrectAns='$score' where QuizID='$quizId' and AssID='$assId' and CourseID='$courseId' and MenteeID='$menteeId'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
			// now, send the mail to the mentee notifying the score.
			SendAdvancedQuizEvaluationMail($assId, $courseId, $menteeId, $quizId, $score);
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the mentee status and answers from the QuizResponse table.
function GetMenteeQuizStatus($assId, $courseId, $quizId) {
	$resp = "-1";
	try {
		$query = "select * from QuizResponse where QuizID='$quizId' and AssID='$assId' and CourseID='$courseId'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {
				$resp = "<div class='mentee-quiz-status-div' >";
				while ($res = mysql_fetch_array($rs)) {
					$mentee = GetMenteeDetails($res["MenteeID"]);
					$resp .= "<h3 class='page-header'>" . $mentee["MenteeName"] . "(" . $mentee["MenteeEmail"] . ")</h3>";
					$resp .= "<table class='table'>";

					if($res["CorrectAns"] != "-1") {
						$resp .= "<tr><td> 1: <b>" . $res["A1"] . "</b></td><td rowspan='3'><input type='text' placeholder='Enter Score(-1 to unmark for evaluation)' class='form-control txtQuizScore' id='" . $res["MenteeID"] . "' value='" . $res["CorrectAns"] . "' /><label style='font-size: 0.9em;'>Already evaluated, Score given: " . $res["CorrectAns"] . "/5. Next Evaluation will update the score. (-1 to unmark for evaluation)</label></td></tr>";						
					}
					else {
						$resp .= "<tr><td> 1: <b>" . $res["A1"] . "</b></td><td rowspan='3'><input type='text' placeholder='Enter Score(-1 to unmark for evaluation)' class='form-control txtQuizScore' id='" . $res["MenteeID"] . "' value='" . $res["CorrectAns"] . "' /></td></tr>";						
					}

					$resp .= "<tr><td> 2: <b>" . $res["A2"] . "</b></td></tr>";
					$resp .= "<tr><td> 3: <b>" . $res["A3"] . "</b></td></tr>";

					$resp .= "<tr><td> 4: <b>" . $res["A4"] . "</b></td><td rowspan='2'><input type='button' class='btn btn-lg btn-primary btn-block btnEvaluate' value='Evaluate' data-mentee='" . $res["MenteeID"] . "' data-quiz='" . $res["QuizID"] . "' data-assignment='" . $res["AssID"] . "' data-course='" . $res["CourseID"] . "' /></td></tr>";
					$resp .= "<tr><td> 5: <b>" . $res["A5"] . "</b></td></tr>";

					$resp .= "</table>";
				}
				$resp .= "</div>";
			}
			else {
				$resp = "0";
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the quiz list, filtered by assId and courseId
function GetQuizDropDown($assId, $courseId) {
	$resp = "-1";
	try {
		$query = "select * from Quiz where AssID='$assId' and CourseID='$courseId' and QuizType='1'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {
				$resp = "<select id='ddl-quiz' class='form-control'><option value='-1'> --Select Quiz-- </option>";
				while ($res = mysql_fetch_array($rs)) {
					$resp .= "<option data-type='" . $res["QuizType"] . "' value='" . $res["QuizID"] . "' >" . $res["QuizName"] . "</option>";
				}
				$resp .= "</select>";
			}
			else {
				$resp = "0";
			}	
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for getting all the documents for mentor or mentee(based on courseID)
// includes guides, annual reports and financial documents.
function GetDocumentsForMentee($email, $id) {
	$resp = "-1";
	$documents = array();
	$guide = array();
	$annualReport = array();
	$financeDoc = array();
	$courseId = GetMenteeCourse($email);
	//$i = 0;
	try {
		// for getting the guides
		$query1 = "select * from Guide where GuideCourse='$courseId'";
		$rs1 = mysql_query($query1);
		if(!$rs1) {
			$guide[0] = "-1";
		}
		else {
			if(mysql_num_rows($rs1) > 0) {
				$j = 0;
				while ($res1 = mysql_fetch_array($rs1)) {
					$guide[$j] = $res1["Guide"];
					$j++;
				}
			}
			else {
				$guide[0] = "0";
			}
		}
		$documents["guide"] = $guide;
		//$i++;

		// for getting the annual reports.
		$query2 = "select * from AnnualReport where AnnualReportCourse='$courseId'";
		$rs2 = mysql_query($query2);
		if(!$rs2) {
			$annualReport[0] = "-1";
		}
		else {
			if(mysql_num_rows($rs2) > 0) {
				$k = 0;
				while ($res2 = mysql_fetch_array($rs2)) {
					$annualReport[$k] = $res2["AnnualReport"];
					$k++;
				}
			}
			else {
				$annualReport[0] = "0";
			}
		}
		$documents["annualReport"] = $annualReport;

		// for getting the financial documents
		$query3 = "select * from FinanceDocument where FinanceDocumentCourse='$courseId'";
		$rs3 = mysql_query($query3);
		if(!$rs3) {
			$financeDoc[0] = "-1";
		}
		else {
			if(mysql_num_rows($rs3) > 0) {
				$l = 0;
				while ($res3 = mysql_fetch_array($rs3)) {
					$financeDoc[$l] = $res3["FinanceDocument"];
					$l++;
				}
			}
			else {
				$financeDoc[0] = "0";
			}
		}
		$documents["financeDoc"] = $financeDoc;

		header('Content-Type: application/json');
		$resp = json_encode($documents);
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}


// for sending the query regarding the assignments
function SendDeadlineQuery($no, $email, $id, $name, $contact, $msg) {
	$resp = "-1";
	try {
		$subject = "Email Support message received";
		$mail = "Dear Admin, here is the message received from the Email Support feature of the Mentored-Research's portal. following are the contents: <br /><br />";
		$mail .= "Name: <b>" . $name . " (" . $email .  ", " . $contact . ")</b><br />";
		$mail .= "Message: <b>" . $msg . "</b><br /><br />";
		$mail .= "Please contact the administrator in case of any doubts.<br /><br />";
		$mail .= "Team Mentored-Research<br />";
		$mail .= "info@mentored-research.com<br /><br />";
		$mail .= "Please do not reply to this automated mail.<br /><br />";

		$mandrill = new Mandrill('J99JDcmNNMQLw32QJGDadQ');
		$message = array(
	        'html' => $mail,
	        'subject' => $subject,
	        'from_email' => $email,
	        'from_name' => $name,
	        'to' => array(
	            // array(
	            //     'email' => $email,
	            //     'name' => $name,
	            //     'type' => 'cc'
	            // ),
	            array(
	                'email' => 'guide@mentored-research.com',
	                'name' => 'Mentored-Research',
	                'type' => 'cc'
	            )
	        ),
	        'headers' => array('Reply-To' => 'guide@mentored-research.com')
	    );
	    $async = false;
	    $ip_pool = 'Main Pool';
	    $send_at = null;
	    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
	    header('Content-Type: application/json');
		echo json_encode($result);
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for sending the query regarding the assignments
function SendTechnicalQuery($no, $email, $id, $name, $contact, $msg) {
	$resp = "-1";
	try {
		$subject = "Email Support message received";
		$mail = "Dear Admin, here is the message received from the Email Support feature of the Mentored-Research's portal. following are the contents: <br /><br />";
		$mail .= "Name: <b>" . $name . " (" . $email .  ", " . $contact . ")</b><br />";
		$mail .= "Message: <b>" . $msg . "</b><br /><br />";
		$mail .= "Please contact the administrator in case of any doubts.<br /><br />";
		$mail .= "Team Mentored-Research<br />";
		$mail .= "info@mentored-research.com<br /><br />";
		$mail .= "Please do not reply to this automated mail.<br /><br />";

		$mandrill = new Mandrill('J99JDcmNNMQLw32QJGDadQ');
		$message = array(
	        'html' => $mail,
	        'subject' => $subject,
	        'from_email' => $email,
	        'from_name' => $name,
	        'to' => array(
	            // array(
	            //     'email' => $email,
	            //     'name' => $name,
	            //     'type' => 'cc'
	            // ),
	            array(
	                'email' => 'tech@mentored-research.com',
	                'name' => 'Mentored-Research',
	                'type' => 'cc'
	            )
	        ),
	        'headers' => array('Reply-To' => 'tech@mentored-research.com')
	    );
	    $async = false;
	    $ip_pool = 'Main Pool';
	    $send_at = null;
	    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
	    header('Content-Type: application/json');
		echo json_encode($result);
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for sending the query regarding the assignments
function SendAssignmentQuery($no, $email, $id, $name, $contact, $msg) {
	$resp = "-1";
	try {
		$subject = "Email Support message received";
		$mail = "Dear Admin, here is the message received from the Email Support feature of the Mentored-Research's portal. following are the contents: <br /><br />";
		$mail .= "Name: <b>" . $name . " (" . $email .  ", " . $contact . ")</b><br />";
		$mail .= "Message: <b>" . $msg . "</b><br /><br />";
		$mail .= "Please contact the administrator in case of any doubts.<br /><br />";
		$mail .= "Team Mentored-Research<br />";
		$mail .= "info@mentored-research.com<br /><br />";
		$mail .= "Please do not reply to this automated mail.<br /><br />";

		$mandrill = new Mandrill('J99JDcmNNMQLw32QJGDadQ');
		$message = array(
	        'html' => $mail,
	        'subject' => $subject,
	        'from_email' => $email,
	        'from_name' => $name,
	        'to' => array(
	            // array(
	            //     'email' => $email,
	            //     'name' => $name,
	            //     'type' => 'cc'
	            // ),
	            array(
	                'email' => 'guide@mentored-research.com',
	                'name' => 'Mentored-Research',
	                'type' => 'cc'
	            )
	        ),
	        'headers' => array('Reply-To' => 'guide@mentored-research.com')
	    );
	    $async = false;
	    $ip_pool = 'Main Pool';
	    $send_at = null;
	    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
	    header('Content-Type: application/json');
		echo json_encode($result);
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the mentee submission and feedback status for the admin and director pages.
function GetMenteeStatusForAdminAndDirector($assId) {
	$resp = "-1";
	$submission = "";
	$feedback = "";
	$mentee = array();
	try {
		$query = "select * from SubmissionFeedback where AssID='$assId'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "";
			if(mysql_num_rows($rs) > 0) {
				while ($res = mysql_fetch_array($rs)) {
					$mentee = GetMenteeDetails($res["MenteeID"]);
					$resp .= "<h4>" . $mentee["MenteeName"] . " (" . $mentee["MenteeEmail"] . ")</h4>";
					$resp .= GetMenteeSubmissionFeedbackInTableFormatForAdminAndDirector($res["MenteeID"], $assId);
				}
			}
			else {
				$resp = "0";  // no record exists.
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// for sending a multipurpose message from the mentor to any of the mentees.(or any other message)
function SendMultipurposeMessage($toEmail, $message, $fromEmail) {
	$resp = "-1";
	try {
		$subject = "Message Received - Mentored-Research";
		$msg = "Dear " . $toEmail . ", <br /><br />";
		$msg .= "You have received the following message from " . $fromEmail . "<br /><br />";
		$msg .= "<b>" . $message . "</b><br /><br />";

		$msg .= "Team Mentored-Research<br />";
		$msg .= "info@mentored-research.com<br /><br />";
		$msg .= "Please do not reply to this automated mail.<br /><br />";

		$res = SendMessage($toEmail, $toEmail, "info@mentored-research.com", "Mentored-Research", $subject, $msg);
		if($res == "-1") {
			echo $res;
		}
		else {
			header('Content-Type: application/json');
			echo json_encode($res);
		}
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the mentee submission and feedback status, along with message sending to the mentee.
function GetMenteeStatusForMentor($mentorId, $mentorEmail) {
	$resp = "-1";
	$submission = "";
	$feedback = "";
	$mentee = array();
	try {
		$query = "select * from Mentee where MenteeMentor='$mentorId'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "";
			if(mysql_num_rows($rs) > 0) {
				while ($res = mysql_fetch_array($rs)) {
					$mentee = GetMenteeDetails($res["MenteeID"]);
					$resp .= "<h4>" . $mentee["MenteeName"] . " (" . $mentee["MenteeEmail"] . ")</h4>";
					$resp .= GetMenteeSubmissionFeedbackInTableFormat($res["MenteeID"]);
				}
			}
			else {
				$resp = "0";  // no record exists.
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to submit the advanced quiz to the server(to be evaluated by the admin)
function SubmitAdvancedQuiz($givenAns, $quizId, $assId, $menteeId, $menteeEmail) {
	$resp = "-1";
	$answers = json_decode($givenAns, true);
	$ans = array();
	$correct = 0;
	try {
		// firstly, get the answers in the array.
		$ans = GetQuizAnswers($quizId);
		$resp = RegisterQuizResponse($quizId, $assId, $menteeId, $menteeEmail, $givenAns, "-1");
		// now, send the mail to the mentee.
		$mail = SendAdvancedQuizResponseMail($quizId, $assId, $menteeId, $menteeEmail, $givenAns, $ans, "-1");
		echo $resp;
	}	
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to evaluate the basic quiz. Returns the score on evaluation.
function SubmitAndEvaluateBasicQuiz($givenAns, $quizId, $assId, $menteeId, $menteeEmail) {
	$resp = "-1";
	$answers = json_decode($givenAns, true);
	$ans = array();
	$correct = 0;
	try {
		// firstly, get the answers in the array.
		$ans = GetQuizAnswers($quizId);
		if($ans == "-1") {
			$resp = "-1";
		}
		else if($ans == "0") {
			$resp = "0";   // no responses are found.
		}
		else {	
			for ($i=0; $i < count($ans); $i++) { 
				if($ans[$i] == $answers[$i]) {
					$correct++;
				}
			}
			$resp = RegisterQuizResponse($quizId, $assId, $menteeId, $menteeEmail, $givenAns, $correct);

			// now, send the mail to the mentee.
			$mail = SendQuizResponseMail($quizId, $assId, $menteeId, $menteeEmail, $givenAns, $ans, $correct);
		}	
		echo $resp . " ~ " . $correct;
	}	
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the advanced quiz questions and options to be shown to the mentee.
function GetAdvancedQuizQuestionsAndOptions($quizId) {
	$resp = "";
	$ques = array();
	try {
		$query = "select * from QuizQuestion where QuizID='$quizId'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {
				while ($res = mysql_fetch_array($rs)) {
					array_push($ques, $res["Q1"]);
					array_push($ques, $res["Q2"]);
					array_push($ques, $res["Q3"]);
					array_push($ques, $res["Q4"]);
					array_push($ques, $res["Q5"]);
				}
			}
			else {
				$resp = "0";
			}
		}
		if($resp == "-1" || $resp == "0") {
			echo $resp;
		}
		else {
			$resp = json_encode($ques);
			echo $resp;
		}
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the quiz questions and options to be shown to the mentee.
function GetQuizQuestionsAndOptions($quizId) {
	$resp = "";
	$ques = array();
	$op = array();
	try {
		$query = "select * from QuizQuestion where QuizID='$quizId'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {
				while ($res = mysql_fetch_array($rs)) {
					array_push($ques, $res["Q1"]);
					array_push($ques, $res["Q2"]);
					array_push($ques, $res["Q3"]);
					array_push($ques, $res["Q4"]);
					array_push($ques, $res["Q5"]);

					// for all the options.
					array_push($op, $res["Qop11"]);
					array_push($op, $res["Qop12"]);
					array_push($op, $res["Qop13"]);
					array_push($op, $res["Qop14"]);

					array_push($op, $res["Qop21"]);
					array_push($op, $res["Qop22"]);
					array_push($op, $res["Qop23"]);
					array_push($op, $res["Qop24"]);

					array_push($op, $res["Qop31"]);
					array_push($op, $res["Qop32"]);
					array_push($op, $res["Qop33"]);
					array_push($op, $res["Qop34"]);

					array_push($op, $res["Qop41"]);
					array_push($op, $res["Qop42"]);
					array_push($op, $res["Qop43"]);
					array_push($op, $res["Qop44"]);

					array_push($op, $res["Qop51"]);
					array_push($op, $res["Qop52"]);
					array_push($op, $res["Qop53"]);
					array_push($op, $res["Qop54"]);
				}
			}
			else {
				$resp = "0";
			}
		}
		if($resp == "-1" || $resp == "0") {
			echo $resp;
		}
		else {
			$resp = json_encode($ques) . " ~ " . json_encode($op);
			echo $resp;
		}
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the quiz details to be shown on the Attempt quiz page.
function GetQuizDetailsByAssignment($assId, $menteeId, $menteeEmail) {
	$resp = "-1";
	$attempt = array();
	try {
		$query = "select * from Quiz where AssID='$assId'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {
				$resp = "";
				while ($res = mysql_fetch_array($rs)) {
					$attempt = IsQuizAttempted($menteeId, $res["QuizID"]);
					if($attempt["Error"] == "1") {
						$resp .= GetQuizNameById($res["QuizID"]) . " could not be loaded. Please try again.";
					}
					else {
						if($attempt["IsAttempted"] == "1") {  // quiz has been attempted.
							if($res["QuizType"] == "0") {
								$resp .= "<tr><td colspan='2'><h3>" . $res["QuizName"] . "</h3></td></tr>  <tr><td>Quiz Posted On: </td><td>" . $res["QuizPostedOn"] . "</td></tr>  <tr><td>Quiz Deadline: </td><td>" . $res["QuizDeadline"] . "</td></tr>  <tr><td colspan='2'><p>" . $res["QuizName"] . " has already been attempted. Your Score is: " . $attempt["CorrectAns"] . "/5. </p></td></tr>";
							}
							else if($res["QuizType"] == "1") {
								if($attempt["CorrectAns"] == "-1") {   // not yet evaluated
									$resp .= "<tr><td colspan='2'><h3>" . $res["QuizName"] . "</h3></td></tr>  <tr><td>Quiz Posted On: </td><td>" . $res["QuizPostedOn"] . "</td></tr>  <tr><td>Quiz Deadline: </td><td>" . $res["QuizDeadline"] . "</td></tr>  <tr><td colspan='2'><p>" . $res["QuizName"] . " has already been attempted. You will be notified through mail for Quiz Evaluation and Scores. </p></td></tr>";	
								}
								else {
									$resp .= "<tr><td colspan='2'><h3>" . $res["QuizName"] . "</h3></td></tr>  <tr><td>Quiz Posted On: </td><td>" . $res["QuizPostedOn"] . "</td></tr>  <tr><td>Quiz Deadline: </td><td>" . $res["QuizDeadline"] . "</td></tr>  <tr><td colspan='2'><p>" . $res["QuizName"] . " has already been attempted and Evaluated. Your Score is: " . $attempt["CorrectAns"] .  "</p></td></tr>";		
								}
							}
						}
						else {   // quiz has not been attempted
							if($res["QuizType"] == "0") {
								$resp .= "<tr><td colspan='2'><h3>" . $res["QuizName"] . "</h3></td></tr>  <tr><td>Quiz Posted On: </td><td>" . $res["QuizPostedOn"] . "</td></tr>  <tr><td>Quiz Deadline: </td><td>" . $res["QuizDeadline"] . "</td></tr>  <tr><td colspan='2'><input type='button' class='btn btn-lg btn-primary btn-block btnAttemptQuiz' value='Attempt " . $res["QuizName"] . "' data-id='" . $res["QuizID"] . "' data-name='" . $res["QuizName"] . "' /></td></tr>";
							}
							else if($res["QuizType"] == "1") {
								$resp .= "<tr><td colspan='2'><h3>" . $res["QuizName"] . "</h3></td></tr>  <tr><td>Quiz Posted On: </td><td>" . $res["QuizPostedOn"] . "</td></tr>  <tr><td>Quiz Deadline: </td><td>" . $res["QuizDeadline"] . "</td></tr>  <tr><td colspan='2'><input type='button' class='btn btn-lg btn-primary btn-block btnAttemptAdvQuiz' value='Attempt " . $res["QuizName"] . "' data-id='" . $res["QuizID"] . "' data-name='" . $res["QuizName"] . "' /></td></tr>";
							}
						}
					}
				}
			}
			else {
				$resp = "0";
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to add the advanced quiz and related Question and Responses to the Database.
function AddAdvancedQuiz($courseId, $assId, $quizName, $deadline, $questions, $answers) {
	$resp = "-1";
	try {
		$date = date("Y-m-d");
		$id = "-1";
		$query = "insert into Quiz(CourseID, AssID, QuizPostedOn, QuizDeadline, QuizName, QuizType) values('$courseId', '$assId', '$date', '$deadline', '$quizName', '1')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
			$id = mysql_insert_id();  // last inserted id.
			$res = AddAdvancedQuizQuestions($id, $questions, $answers);
		}
		echo $resp . " ~ " . $res;
	}	
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}


// to set all the questions, answers and options to the database.
function AddQuiz($courseId, $assId, $quizName, $deadline, $questions, $answers, $options) {
	$resp = "-1";
	try {
		$date = date("Y-m-d");
		$id = "-1";
		$query = "insert into Quiz(CourseID, AssID, QuizPostedOn, QuizDeadline, QuizName, QuizType) values('$courseId', '$assId', '$date', '$deadline', '$quizName', '0')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
			$id = mysql_insert_id();  // last inserted id.
			$res = AddQuizQuestions($id, $questions, $answers, $options);
		}
		echo $resp . " ~ " . $res;
	}	
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to send a message from the admin to any of the users.
function SendAdminMessage($email, $msg) {
	$resp = "-1";
	try {
		$subject = "Message from Admin Mentored-Research";
		$message = "Dear " . $email . "<br /><br />";
		$message .= "The admin from Mentored-Research has the following message for you: <br /><br />";
		$message .= "<b>" . $msg . "</b><br /><br />";

		$message .= "Team Mentored-Research<br />";
		$message .= "info@mentored-research.com<br /><br />";
		$message .= "Please do not reply to this automated mail.<br />";

		$res = SendMessage($email, $email, "info@mentored-research.com", "Mentored-Research", $subject, $message);
		if($res == "-1") {
			echo $res;
		}
		else {
			header('Content-Type: application/json');
			echo json_encode($res);
		}		
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get directors, mentors and mentees from the organisation.
function GetAllUsersByOrgan($organ) {
	$resp = "-1";
	$users = array();
	try {
		$users[0] = GetDirectorDetailsByOrgan($organ);
		$users[1] = GetMentorDetailsByOrgan($organ);
		$users[2] = GetMenteeDetailsByOrgan($organ);
		echo json_encode($users);
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to assign the mentor to the mentees selected.
function AssignMentorToMentees($mentorId, $mentees) {
	$resp = "-1";
	$i = 0;
	try {
		$mentee = json_decode($mentees, true);
		foreach ($mentee as $key => $v) {
			$resp = AssignMentor($mentorId, $v);
			if($resp == "1") {
				$i++;
			} 
		}
		$resp = $i . " mentees have been assigned to the Selected Mentor.";
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the list of all the mentees based on organisation and courses.
function GetMenteesFromOrganCourse($organ, $course) {
	$resp = "-1";
	try {
		$query = "select * from Mentee where MenteeOrgan='$organ' and MenteeCourse='$course' and MenteeMentor='0'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {
				$resp = "";
				while ($res = mysql_fetch_array($rs)) {
					$resp .= "<input type='checkbox' class='assign-checkbox' value='" . $res["MenteeEmail"] . "' name='" . $res["MenteeID"] . "' id='" . $res["MenteeID"] . "' />&nbsp;&nbsp;<label for='" . $res["MenteeID"] . "'>" . $res["MenteeEmail"] . " (" . $res["MenteeName"] . ")" .  "</label><br />";
				}
			}
			else {
				$resp = "0";
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the list of all the mentees based on organisation and courses.
function GetMentorsFromOrganCourse($organ, $course) {
	$resp = "-1";
	try {
		$query = "select * from Mentor where MentorOrgan='$organ' and MentorCourse='$course'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {
				$resp = "<select id='ddl-mentor' class='form-control'><option value='-1'> --Select Mentor-- </option>";
				while ($res = mysql_fetch_array($rs)) {
					$resp .= "<option value='" . $res["MentorID"] . "' >" . $res["MentorEmail"] . " (" . $res["MentorName"] . ")</option>";
				}
				$resp .= "</select>";
			}
			else {
				$resp = "0";
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the list of all the assignments submitted by the mentee on the mentee page.
function GetMenteeAssignments($email, $id) {
	$resp = "-1";
	try {
		$courseId = GetMenteeCourse($email);
		$query = "select * from SubmissionFeedback where MenteeID='$id' and CourseID='$courseId'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {
				$resp = "<select id='ddl-assignment' class='form-control'><option value='-1'> --Select Assignment-- </option>";
				while ($res = mysql_fetch_array($rs)) {
					$name = GetAssignmentName($res["AssID"]);
					$resp .= "<option value='" . $res["AssID"] . "' data-submission='" . $res["Submission"] . "' data-feedback='" . $res["Feedback"] . "' >" . $name . "</option>";
				}
				$resp .= "</select>";
			}
			else {
				$resp = "0";
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the list of all the assignments submitted by the mentee selected.
function GetMenteeSubmittedAssignmentsForMentor($email, $id, $menteeId) {
	$resp = "-1";
	$name = "";
	try {
		$courseId = GetMenteeCourseById($menteeId);
		$query = "select * from SubmissionFeedback where MentorID='$id' and MenteeID='$menteeId' and CourseID='$courseId'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {
				$resp = "<select id='ddl-assignment' class='form-control'><option value='-1'> --Select Assignment-- </option>";
				while ($res = mysql_fetch_array($rs)) {
					$name = GetAssignmentName($res["AssID"]);
					$resp .= "<option value='" . $res["AssID"] . "' data-submission='" . $res["Submission"] . "' data-feedback='" . $res["Feedback"] . "' >" . $name . "</option>";
				}
				$resp .= "</select>";
			}
			else {
				$resp = "0";
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

//to get the list of all the mentees of a particular mentor.
function GetMenteesOfMentor($email, $id) {
	$resp = "-1";
	try {
		$courseId = GetMentorCourseById($id);
		$query = "select * from Mentee where MenteeMentor='$id' and MenteeCourse='$courseId'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {
				$resp = "<select id='ddl-mentee' class='form-control'><option value='-1'> --Select Mentee-- </option>";
				while ($res = mysql_fetch_array($rs)) {
					$resp .= "<option value='" . $res["MenteeID"] . "' >" . $res["MenteeEmail"] . " (" . $res["MenteeName"] . ")</option>";
				}
				$resp .= "</select>";
			}
			else {
				$resp = "0";
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the list of all the assignments submitted by the mentee
function GetMenteeLastSubmittedAssignmentList($email, $id) {
	$resp = "-1";
	try {
		$courseID = GetMenteeCourse($email);
		$lastSubmitted = GetMenteeLastSubmitted($id, $courseID);

		$query = "select * from Assignment where AssCourse='$courseID' and AssNo<='$lastSubmitted'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {
				$resp = "<select id='ddl-assignment' class='form-control'><option value='-1'> --Select Assignment-- </option>";
				while ($res = mysql_fetch_array($rs)) {
					$resp .= "<option value='" . $res["AssID"] . "' >" . $res["AssName"] . "</option>";
				}
				$resp .= "</select>";
			}
			else {  // no record exists.
				$resp = "0";
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

//to get the latest assignment for the mentee.
function GetLatestAssignmentMentee($email, $id) {
	$resp = "-1";
	try {
		$courseID = GetMenteeCourse($email);
		$lastSubmitted = GetMenteeLastSubmitted($id, $courseID);
		$assNo = intval($lastSubmitted) + 1;
		$assignment = GetAssignmentByNumber($assNo, $courseID);
		if($assignment == "-1") {
			$resp = "-1";
		}
		else if($assignment == "0") {
			$resp = "0";
		}
		else {
			header('Content-Type: application/json');
			$resp = json_encode($assignment);
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}


// to send the invites to the list of people.
function SendInvite($list, $msg) {
	try {
		$j = 0;
		for($i=0;$i<count($list);$i++)  {
			$p = SendInviteMessage($list[$i], "User", "info@mentored-research.com", "Mentored-Research", "Spread the word and Treat Yourself!", $msg);
			if($p == "1") {
				$j = $j+1;
			}
		}
		echo $j;
	}
	catch(Exception $e) {
		echo "-1";
	}
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
			if(mysql_num_rows($rs) > 0) {
				while ($res = mysql_fetch_array($rs)) {
					$calender = $res["Calender"];
				}
				$resp = "http://mentored-research.com/courses/" . $calender;
			}
			else {
				$resp = "0";
			}
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
				if(mysql_num_rows($rs) > 0) {
					while ($res = mysql_fetch_array($rs)) {
						$calender = $res["Calender"];
					}
					$resp = "http://mentored-research.com/courses/" . $calender;
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

	$assVideoName = array();

	$assSampleReport = array();
	$assOffTopic = array();
	$assExtra = array();
	$i = 0;   // for the main(Assignment) array index.
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
				$assVideoName[$j] = $videoRes["AssVideoName"];  
				$j++;
			}
			$assignment["AssVideo"] = $assVideo;
			$assignment["AssVideoName"] = $assVideoName;
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
			$lastSubmitted = GetMenteeLastSubmitted($id, $assCourse);
			$last = intval($lastSubmitted);
			$last = $last + 1;

			$query = "select * from Assignment where AssCourse='$assCourse' and AssNo<='$last'";
			$rs = mysql_query($query);
			if(!$rs) {
				$resp = "-1";
			}
			else {
				if(mysql_num_rows($rs) > 0) {
					$resp = "<select id='ddl-assignment' class='form-control'><option value='-1'> --Select Assignment-- </option>";
					while ($res = mysql_fetch_array($rs)) {
						$resp .= "<option value='" . $res["AssID"] . "' >" . $res["AssName"] . "</option>";
					}
					$resp .= "</select>";
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

// for adding the video link to the database for a particular assignment.
function RegisterAssignmentVideo($assID, $assVideo, $assVideoName) {
	$resp = "-1";
	try {
		$query = "insert into AssignmentVideo(AssID, AssVideoName, AssVideo) values('$assID', '$assVideoName', '$assVideo')";
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
	// $assPostedOn = strtotime($assPostedOn);
	// $assDeadline = strtotime($assDeadline);
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
				if(mysql_num_rows($rs) > 0) {
					while ($res = mysql_fetch_array($rs)) {
						$calender = $res["Calender"];
					}
					$resp = "http://mentored-research.com/courses/" . $calender;
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