<?php 

// for the PHP helper functions.
include('helpers.php');

if(isset($_FILES["fileUploadFeedback"]) && $_FILES["fileUploadFeedback"]["error"]== UPLOAD_ERR_OK)
{
	############ Edit settings ##############
	$UploadDirectory	= 'uploads/assignmentFeedback/'; //specify upload directory ends with / (slash)
	##########################################
	
	/*
	Note : You will run into errors or blank page if "memory_limit" or "upload_max_filesize" is set to low in "php.ini". 
	Open "php.ini" file, and search for "memory_limit" or "upload_max_filesize" limit 
	and set them adequately, also check "post_max_size".
	*/
	
	//check if this is an ajax request
	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
		die("Apparently, you did not select the Mentee or Assignment before uploading the file. Please hit the back button and try again.");
	}
	
	
	//Is file size is less than allowed size.
	if ($_FILES["fileUploadFeedback"]["size"] > 5242880) {
		die("File size is too big!");
	}
	
	//allowed file type Server side check
	switch(strtolower($_FILES['fileUploadFeedback']['type']))
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
	
	$File_Name          = strtolower($_FILES['fileUploadFeedback']['name']);
	$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
	$date = date_create();
	$timestamp = date_timestamp_get($date);

	$NewFileName = $timestamp . "_" . $File_Name;  //.$File_Ext; //new file name

	// get the cookies here.
	$assId = "-1";
	$menteeId = "-1";
	$id = "-1";
	if(isset($_COOKIE["assId"])) {
		$assId = $_COOKIE["assId"];
	}
	if(isset($_COOKIE["menteeId"])) {
		$menteeId = $_COOKIE["menteeId"];
	}
	if(isset($_COOKIE["id"])) {
		$id = $_COOKIE["id"];
	}
	if($assId == "-1" || $menteeId == "-1" || $id == "-1") {
		die("Oops! We encountered an error while submitting your feedback. Please go back and try again.");
	}
	else {
		if(move_uploaded_file($_FILES['fileUploadFeedback']['tmp_name'], $UploadDirectory.$NewFileName )) {
			$courseId = GetMenteeCourseById($menteeId);
			if($courseId == "0") {
				die("No record of the mentee found.");
			}
			else if($courseId == "-1") {
				die("Error uploading file. Please try again.");
			}
			else {
				$resp = RegisterFeedback($id, $menteeId, $assId, $courseId, $UploadDirectory.$NewFileName);
			}

			if($resp == "-1") {
				die("oops! We encountered an error while submitting your feedback. Please try again."); 
			}
			else {
				die("Feedback uploaded successfully. Thank You.");
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