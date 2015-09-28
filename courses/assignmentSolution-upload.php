<?php 

// for the PHP helper functions.
include('helpers.php');

if(isset($_FILES["fileAssignmentSolution"]) && $_FILES["fileAssignmentSolution"]["error"]== UPLOAD_ERR_OK)
{
	############ Edit settings ##############
	$UploadDirectory	= 'uploads/assignmentSolution/'; //specify upload directory ends with / (slash)
	##########################################
	
	/*
	Note : You will run into errors or blank page if "memory_limit" or "upload_max_filesize" is set to low in "php.ini". 
	Open "php.ini" file, and search for "memory_limit" or "upload_max_filesize" limit 
	and set them adequately, also check "post_max_size".
	*/
	
	//check if this is an ajax request
	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
		die("Apparently, you did not select the course or Assignment before uploading the file. Please hit the back button and try again.");
	}
	
	
	//Is file size is less than allowed size.
	if ($_FILES["fileAssignmentSolution"]["size"] > 5242880) {
		die("File size is too big!");
	}
	
	//allowed file type Server side check
	switch(strtolower($_FILES['fileAssignmentSolution']['type']))
		{
			//allowed file types
			case 'image/gif': 
	        case 'image/jpeg': 
	        case 'image/pjpeg':
	        case 'text/plain':
	        case 'text/html': //html file
	        case 'application/x-zip-compressed':
	        case 'application/pdf':
	        case 'application/msword':
	        case 'application/vnd.ms-excel':
	        case 'video/mp4':
	        case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
	        case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
	        case 'application/vnd.ms-excel':
	        case 'application/msexcel':
	        case 'application/x-msexcel':
	        case 'application/x-ms-excel':
	        case 'application/x-excel':
	        case 'application/x-dos_ms_excel':
	        case 'application/xls':
	        case 'application/x-xls':
	        case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
	        case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
				break;
			default:
				die('Unsupported File!'); //output error
	}
	
	$File_Name          = strtolower($_FILES['fileAssignmentSolution']['name']);
	$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
	$date = date_create();
	$timestamp = date_timestamp_get($date);

	$NewFileName = $timestamp . "_" . $File_Name;  //.$File_Ext; //new file name

	// get the cookies here.
	$email = "-1";
	$id = "-1";
	$assId = "-1";
	$assCourse = "-1";
	$assPdf = "-1";
	$assNo = "-1";
	if(isset($_COOKIE["assIdSolution"])) {
		$assId = $_COOKIE["assIdSolution"];
	}
	if(isset($_COOKIE["assCourseSolution"])) {
		$assCourse = $_COOKIE["assCourseSolution"];
	}
	if(isset($_COOKIE["assPdfSolution"])) {
		$assPdf = $_COOKIE["assPdfSolution"];
	}
	if(isset($_COOKIE["assNoSolution"])) {
		$assNo = $_COOKIE["assNoSolution"];
	}
	if(isset($_COOKIE["email"])) {
		$email = $_COOKIE["email"];
	}
	if(isset($_COOKIE["id"])) {
		$id = $_COOKIE["id"];
	}
	
	if($assId == "-1" || $assCourse == "-1" || $assPdf == "-1" || $assNo == "-1") {
		die("Oops! We encountered an error while submitting your solution. Please go back and try again.");
	}
	else {
		if(move_uploaded_file($_FILES['fileAssignmentSolution']['tmp_name'], $UploadDirectory.$NewFileName )) {
			// save the link to the database.
			$mentorId = GetMentorIDOfMentee($email, $id);
			// there are 2 cases here. if the $assNo is 1, then insert into the LastSubmittedAssignment table. Otherwise, upate the LastSubmittedAssignment table entry.
			$resp = RegisterSubmission($email, $id, $mentorId, $assId, $UploadDirectory.$NewFileName, $assCourse, $assNo);
			if($resp == "-1") {
				echo "Oops! We encountered an error while submitting your assignment solution. Please try again.";
			}
			else {
				echo "Assignment Solution submitted successfully. Thank You.";	
			}
		}
		else {
			die('error uploading File!');
		}
	}
}
else {
	die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}

?>