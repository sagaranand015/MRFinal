<?php 

// for the PHP helper functions.
include('helpers.php');

if(isset($_FILES["fileAssignmentPDF"]) && $_FILES["fileAssignmentPDF"]["error"]== UPLOAD_ERR_OK)
{
	############ Edit settings ##############
	$UploadDirectory	= 'uploads/assignmentPDF/'; //specify upload directory ends with / (slash)
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
	if ($_FILES["fileAssignmentPDF"]["size"] > 5242880) {
		die("File size is too big!");
	}
	
	//allowed file type Server side check
	switch(strtolower($_FILES['fileAssignmentPDF']['type']))
		{
			//allowed file types
			case 'application/pdf':
				break;
			default:
				die('Unsupported File!'); //output error
	}
	
	$File_Name          = strtolower($_FILES['fileAssignmentPDF']['name']);
	$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
	$date = date_create();
	$timestamp = date_timestamp_get($date);

	$NewFileName = $timestamp . "_" . $File_Name;  //.$File_Ext; //new file name

	// get the cookies here.
	$courseAssPDF = "-1";
	$assignmentAssPDF = "-1";
	$register = "-1";
	if(isset($_COOKIE["courseAssPDF"])) {
		$courseAssPDF = $_COOKIE["courseAssPDF"];
	}
	if(isset($_COOKIE["assignmentAssPDF"])) {
		$assignmentAssPDF = $_COOKIE["assignmentAssPDF"];
	}
	
	if($courseAssPDF == "-1" || $assignmentAssPDF == "-1") {
		die("Please select the correct course and/or assignment before uploading the Assignment PDF.");
	}
	else {
		if(move_uploaded_file($_FILES['fileAssignmentPDF']['tmp_name'], $UploadDirectory.$NewFileName )) {
			// save the link to the database.
			$register = RegisterAssignmentPDF($assignmentAssPDF, $courseAssPDF, $UploadDirectory.$NewFileName);
			if($register == "-1") {
				die("Oops! We encountered an error while uploading your Assignment PDF. Please try again.");
			}
			else {
				die("Assignment PDF Successfully uploaded.");	
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