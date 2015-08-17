<?php 

// for the PHP helper functions.
include('helpers.php');

if(isset($_FILES["fileUpdateSolution"]) && $_FILES["fileUpdateSolution"]["error"]== UPLOAD_ERR_OK)
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
	if ($_FILES["fileUpdateSolution"]["size"] > 5242880) {
		die("File size is too big!");
	}
	
	//allowed file type Server side check
	switch(strtolower($_FILES['fileUpdateSolution']['type']))
		{
			//allowed file types
			case 'image/png': 
			case 'image/gif': 
			case 'image/jpeg': 
			case 'image/pjpeg':
			case 'text/plain':
			case 'text/html': //html file
			case 'application/x-zip-compressed':
			case 'application/pdf':
			case 'application/msword':
			case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
			case 'application/vnd.ms-excel':
			case 'video/mp4':
				break;
			default:
				die('Unsupported File!'); //output error
	}
	
	$File_Name          = strtolower($_FILES['fileUpdateSolution']['name']);
	$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
	$date = date_create();
	$timestamp = date_timestamp_get($date);

	$NewFileName = $timestamp . "_" . $File_Name;  //.$File_Ext; //new file name

	// get the cookies here.
	$email = "-1";
	$id = "-1";
	$assId = "-1";
	$assCourse = "-1";
	if(isset($_COOKIE["assIdUpdate"])) {
		$assId = $_COOKIE["assIdUpdate"];
	}
	if(isset($_COOKIE["email"])) {
		$email = $_COOKIE["email"];
	}
	if(isset($_COOKIE["id"])) {
		$id = $_COOKIE["id"];
	}
	$assCourse = GetMenteeCourse($email);
	
	if($assId == "-1" || $assCourse == "-1" || $email == "-1" || $id == "-1") {
		die("Oops! We encountered an error while submitting your solution. Please go back and try again.");
	}
	else {
		if(move_uploaded_file($_FILES['fileUpdateSolution']['tmp_name'], $UploadDirectory.$NewFileName )) {
			// save the link to the database.
			$mentorId = GetMentorIDOfMentee($email, $id);
			$resp = updateSubmission($id, $mentorId, $assId, $assCourse, $UploadDirectory.$NewFileName);
			if($resp == "1") {
				echo "Submission Updated Successfully.";
			}
			else {
				echo "Oops! We encountered an error in updating your submission. Please try again.";	
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