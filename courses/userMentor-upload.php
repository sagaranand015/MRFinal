<?php 

// for the PHP helper functions.
include('helpers.php');
include('PHPExcel/Classes/PHPExcel/IOFactory.php');

if(isset($_FILES["fileAddMentor"]) && $_FILES["fileAddMentor"]["error"]== UPLOAD_ERR_OK)
{
	############ Edit settings ##############
	$UploadDirectory	= 'uploads/addUser/'; //specify upload directory ends with / (slash)
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
	if ($_FILES["fileAddMentor"]["size"] > 5242880) {
		die("File size is too big!");
	}
	
	//allowed file type Server side check
	switch(strtolower($_FILES['fileAddMentor']['type']))
	{
		//allowed file types
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
			break;
		default:
			die('Unsupported File!'); //output error
	}
	
	$File_Name          = strtolower($_FILES['fileAddMentor']['name']);
	$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
	$date = date_create();
	$timestamp = date_timestamp_get($date);

	$NewFileName = $timestamp . "_" . $File_Name;  //.$File_Ext; //new file name

	$organ = "-1";
	$course = "-1";
	$id = "-1";
	$email = "-1";
	if(isset($_COOKIE["addMentorOrgan"])) {
		$organ = $_COOKIE["addMentorOrgan"];
	}
	if(isset($_COOKIE["addMentorCourse"])) {
		$course = $_COOKIE["addMentorCourse"];
	}
	if(isset($_COOKIE["email"])) {
		$email = $_COOKIE["email"];
	}
	if(isset($_COOKIE["id"])) {
		$id = $_COOKIE["id"];
	}

	if($organ == "-1" || $course == "-1") {
		die("You have not selected the organisation and course correctly. Please do so first.");
	}
	else if($email == "-1" || $id == "-1") {
		die("You have not logged in properly. Please try again.");
	}
	else {
		if(move_uploaded_file($_FILES['fileAddMentor']['tmp_name'], $UploadDirectory.$NewFileName)) {
			$res = "";
			$resp = "";
			$i = 0; $j = 0; $k = 0; $l = 0;
			$userDefault = "None";
			$menteeDefault = "None";
			$inputFileName = $UploadDirectory.$NewFileName;
			try {
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);
				$objPHPExcel = $objReader->load($inputFileName);

				//  Get worksheet dimensions
				$sheet = $objPHPExcel->getSheet(0);
				$highestRow = $sheet->getHighestRow();
				$highestColumn = $sheet->getHighestColumn();

				//  Loop through each row of the worksheet in turn
				for ($row = 1; $row <= $highestRow; $row++) {
				    //  Read a row of data into an array
				    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, 
				    NULL, TRUE, FALSE);
				    foreach($rowData[0] as $k=>$v) {
				    	//$resp .= "Row: ".$row."- Col: ".($k+1)." = ".$v."<br />";
				    	$res = AddToUsers($v, "C");
				    	if($res == "1") {
				    		$i = $i + 1;
				    	}
				    	else {
				    		$j = $j + 1;
				    		$userDefault .= $v . ", ";
				    	}
				    	$resp = AddToTable($v, $organ, $course, "Mentor");
				    	if($resp == "1") {
				    		$k = $k + 1;
				    	}
				    	else {
				    		$l = $l + 1;
				    		$menteeDefault .= $v . ", ";
				    	}
				    }   // end of foreach
				}
				$response = $i . " user(s) have been Added. <br />Not Added: " . $userDefault . "<br /><br />" . " Mentor(s) have also been added. <br />Not Added: " . $menteeDefault . "<br /><br />";
				die($response);
				//die($i . " Email Addresses have been added to the Users Table. " . $j . " have not been added.");
			} 
			catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) 
				. '": ' . $e->getMessage());
			}
		}
		else {
			die("File not uploaded yet!");
		}
	}	

	// get the cookies here.
	// $organ = "-1";
	// $course = "-1";
	// $id = "-1"
	// $email = "-1";
	// if(isset($_COOKIE["addMenteeOrgan"])) {
	// 	$organ = $_COOKIE["addMenteeOrgan"];
	// }
	// if(isset($_COOKIE["addMenteeCourse"])) {
	// 	$course = $_COOKIE["addMenteeCourse"];
	// }
	// if(isset($_COOKIE["id"])) {
	// 	$id = $_COOKIE["id"];
	// }
	// if(isset($_COOKIE["email"])) {
	// 	$email = $_COOKIE["email"];
	// }
	
	// else if($email == "-1" || $id == "-1") {
	// 	die("You have not logged in properly. Please go back and try again.");
	// }

	// if($organ == "-1" || $course == "-1") {
	// 	die("You didn't select the correct Organisation and Course. Please try again.");
	// }
	// else {
	// 	if(move_uploaded_file($_FILES['fileAddMentee']['tmp_name'], $UploadDirectory.$NewFileName)) {

	// 		die($UploadDirectory.$NewFileName);

	// 		// $res = "";
	// 		// $i = 0;
	// 		// $inputFileName = $UploadDirectory.$NewFileName;
	// 		// try {
	// 		// 	$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
	// 		// 	$objReader = PHPExcel_IOFactory::createReader($inputFileType);
	// 		// 	$objPHPExcel = $objReader->load($inputFileName);

	// 		// 	//  Get worksheet dimensions
	// 		// 	$sheet = $objPHPExcel->getSheet(0);
	// 		// 	$highestRow = $sheet->getHighestRow();
	// 		// 	$highestColumn = $sheet->getHighestColumn();

	// 		// 	//  Loop through each row of the worksheet in turn
	// 		// 	for ($row = 1; $row <= $highestRow; $row++) {
	// 		// 	    //  Read a row of data into an array
	// 		// 	    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, 
	// 		// 	    NULL, TRUE, FALSE);
	// 		// 	    foreach($rowData[0] as $k=>$v) {
	// 		// 	    	//$resp .= "Row: ".$row."- Col: ".($k+1)." = ".$v."<br />";
	// 		// 	    	$res = AddToUsers($v, "D");
	// 		// 	    	if($res == "1") {
	// 		// 	    		$i++;
	// 		// 	    	}
	// 		// 	    }
	// 		// 	}
	// 		// 	die($i . " Email Addresses have been added to the Users Table.");
	// 		// } 
	// 		// catch (Exception $e) {
	// 		// 	die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) 
	// 		// 	. '": ' . $e->getMessage());
	// 		// }
	// 	}
	// 	else {
	// 		die('error uploading File!');
	// 	}
	// }
}
else {
	die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}

?>