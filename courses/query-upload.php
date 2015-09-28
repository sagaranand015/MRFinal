<?php 

// for the PHP helper functions.
include('helpers.php');

if(isset($_FILES["fileQuery"]) && $_FILES["fileQuery"]["error"]== UPLOAD_ERR_OK)
{
	############ Edit settings ##############
	$UploadDirectory	= 'uploads/queryFiles/'; //specify upload directory ends with / (slash)
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
	if ($_FILES["fileQuery"]["size"] > 5242880) {
		die("File size is too big!");
	}
	
	//allowed file type Server side check
	switch(strtolower($_FILES['fileQuery']['type']))
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
	
	$File_Name          = strtolower($_FILES['fileQuery']['name']);
	$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
	$date = date_create();
	$timestamp = date_timestamp_get($date);

	$NewFileName = $timestamp . "_" . $File_Name;  //.$File_Ext; //new file name

	// get the cookies here.
	$email = "";
	$id = "";
	$no = "";
	$name = "";
	$contact = "";
	$msg = "";
	if(isset($_COOKIE["email"]) && $_COOKIE["email"] != "") {
		$email = $_COOKIE["email"];	
	}
	
	if(isset($_COOKIE["id"]) && $_COOKIE["id"] != "") {
		$id = $_COOKIE["id"];	
	}

	if(isset($_COOKIE["queryNo"]) && $_COOKIE["queryNo"] != "") {
		$no = $_COOKIE["queryNo"];	
	}

	if(isset($_COOKIE["queryName"]) && $_COOKIE["queryName"] != "") {
		$name = $_COOKIE["queryName"];	
	}

	if(isset($_COOKIE["queryContact"]) && $_COOKIE["queryContact"] != "") {
		$contact = $_COOKIE["queryContact"];	
	}

	if(isset($_COOKIE["queryMsg"]) && $_COOKIE["queryMsg"] != "") {
		$msg = $_COOKIE["queryMsg"];	
	}
	
	if($email == "" || $id == "" || $no == "" || $name == "" || $contact == "" || $msg == "") {
		die("Please fill in the details before submitting your query. Thank You.");
	}
	else {
		if(move_uploaded_file($_FILES['fileQuery']['tmp_name'], $UploadDirectory.$NewFileName )) {
			die("1 ~~ " . $UploadDirectory.$NewFileName);
			// save the link to the database.
			// $resp = "-1";
			// $fileUrl = $UploadDirectory.$NewFileName;
			// if($no == "41") {
			// 	$resp = SendAssignmentQuery($no, $email, $id, $name, $contact, $msg, $fileUrl);
			// 	if($resp == "-1") {
			// 		//$resp = "Your file has been uploaded, but we could not notify Mentored-Research. Your link to the uploaded file is: http://mentored-research/courses/" . $UploadDirectory.$NewFileName . ". Please mail to us at: <code>tech@mentored-research.com</code> and we'll get back to you soon. Thank You.";
			// 		$resp = "Your file has been uploaded, but we could not notify Mentored-Research. Your link to the uploaded file is: http://mentored-research/courses/" . ". Please mail to us at: <code>tech@mentored-research.com</code> and we'll get back to you soon. Thank You.";
			// 		// die("Your file has been uploaded, but we could not notify Mentored-Research. Your link to the uploaded file is: http://mentored-research/courses/" . $UploadDirectory.$NewFileName . ". Please mail to us at: <code>tech@mentored-research.com</code> and we'll get back to you soon. Thank You.");
			// 	}
			// 	else {
			// 		$resp = "Your Message has been sent. Mentored-Research's team will get back to you really soon. Thank You.";
			// 		// die("Your Message has been sent. Mentored-Research's team will get back to you really soon. Thank You.");
			// 	}
			// }
			// else if($no == "42") {
			// 	$resp = SendTechnicalQuery($no, $email, $id, $name, $contact, $msg, $fileUrl);	
			// 	if($resp == "-1") {
			// 		$resp = "Your file has been uploaded, but we could not notify Mentored-Research. Your link to the uploaded file is: http://mentored-research/courses/" . $UploadDirectory.$NewFileName . ". Please mail to us at: <code>tech@mentored-research.com</code> and we'll get back to you soon. Thank You.";
			// 		// die("Your file has been uploaded, but we could not notify Mentored-Research. Your link to the uploaded file is: http://mentored-research/courses/" . $UploadDirectory.$NewFileName . ". Please mail to us at: <code>tech@mentored-research.com</code> and we'll get back to you soon. Thank You.");
			// 	}
			// 	else {
			// 		$resp = "Your Message has been sent. Mentored-Research's team will get back to you really soon. Thank You.";
			// 		// die("Your Message has been sent. Mentored-Research's team will get back to you really soon. Thank You.");
			// 	}
			// }
			// else if($no == "43") {
			// 	$resp = SendDeadlineQuery($no, $email, $id, $name, $contact, $msg, $fileUrl);
			// 	if($resp == "-1") {
			// 		$resp = "Your file has been uploaded, but we could not notify Mentored-Research. Your link to the uploaded file is: http://mentored-research/courses/" . $UploadDirectory.$NewFileName . ". Please mail to us at: <code>tech@mentored-research.com</code> and we'll get back to you soon. Thank You.";
			// 		// die("Your file has been uploaded, but we could not notify Mentored-Research. Your link to the uploaded file is: http://mentored-research/courses/" . $UploadDirectory.$NewFileName . ". Please mail to us at: <code>tech@mentored-research.com</code> and we'll get back to you soon. Thank You.");
			// 	}
			// 	else {
			// 		$resp = "Your Message has been sent. Mentored-Research's team will get back to you really soon. Thank You.";
			// 		// die("Your Message has been sent. Mentored-Research's team will get back to you really soon. Thank You.");
			// 	}
			// }
			// die($resp);
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