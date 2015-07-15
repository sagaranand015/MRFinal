<?php 

// for the PHP helper functions.
include('helpers.php');

if(isset($_FILES["fileCalender"]) && $_FILES["fileCalender"]["error"]== UPLOAD_ERR_OK)
{
	############ Edit settings ##############
	$UploadDirectory	= 'uploads/calender/'; //specify upload directory ends with / (slash)
	##########################################
	
	/*
	Note : You will run into errors or blank page if "memory_limit" or "upload_max_filesize" is set to low in "php.ini". 
	Open "php.ini" file, and search for "memory_limit" or "upload_max_filesize" limit 
	and set them adequately, also check "post_max_size".
	*/
	
	//check if this is an ajax request
	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
		die("Apparently, you did not select the course before uploading the file. Please hit the back button and try again.");
	}
	
	
	//Is file size is less than allowed size.
	if ($_FILES["fileCalender"]["size"] > 5242880) {
		die("File size is too big!");
	}
	
	//allowed file type Server side check
	switch(strtolower($_FILES['fileCalender']['type']))
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
			case 'application/vnd.ms-excel':
			case 'video/mp4':
				break;
			default:
				die('Unsupported File!'); //output error
	}
	
	$File_Name          = strtolower($_FILES['fileCalender']['name']);
	$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
	$date = date_create();
	$timestamp = date_timestamp_get($date);

	$NewFileName = $timestamp . "_" . $File_Name;  //.$File_Ext; //new file name

	if(isset($_COOKIE["courseID"])) {
		$courseID = $_COOKIE["courseID"];
	}
	else {
		$courseID = "-1";
	}
	
	if($courseID == "-1") {
		die("Please select the correct course before uploading the calender.");
	}
	else {
		if(move_uploaded_file($_FILES['fileCalender']['tmp_name'], $UploadDirectory.$NewFileName )) {
			// put url of the calender file here.
			$register = RegisterCalenderUrl($courseID, "courses/".$UploadDirectory.$NewFileName);
			if($register == "1") {
				die('Your File has been successfully uploaded.');
			}
			else if($resp == "-1") {
				die('Oops! We encountered an error while uploading your calender. Please try again.');	
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