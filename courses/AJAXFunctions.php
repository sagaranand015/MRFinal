<?php 

// this is the file for all the AJAX Requests from the contact us page.

//these are for the PHP Helper files
include ('headers/databaseConn.php');
include('helpers.php');

if(isset($_GET["no"]) && $_GET["no"] == "1") {
	ContactUs($_GET["contactName"], $_GET["contactEmail"], $_GET["contactTel"], $_GET["contactMsg"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "2") {
	CampusAmbassador($_GET["campusAbsName"], $_GET["campusAbsEmail"], $_GET["campusAbsTel"], $_GET["campusAbsCollege"]);
}

// this is the function for the campus ambassador application insertion into the database and sending mails.
function CampusAmbassador($name, $email, $tel, $college) {
	$resp = "-1";
	$date = date("Y-m-d H:i:s");
	$adminMail = "-1";
	$userMail = "-1";
	try {
		$resp = CampusAbsQuery($name, $email, $tel, $college, $date);
		$adminMail = CampusAbsAdminMail("info@mentored-research.com", $name, $email, $tel, $college, $date);
		$userMail = CampusAbsUserMail($email, $name);
		echo $resp . " ~ " . $adminMail . " ~ " . $userMail;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp . " ~ " . $adminMail . " ~ " . $userMail;
	}
}

// this is the function for contact us insertion into the database and sending mails.
function ContactUs($name, $email, $tel, $message) {
	$resp = "-1";
	$date = date("Y-m-d H:i:s");
	$adminMail = "-1";
	$userMail = "-1";
	try {
		$resp = ContactUsQuery($name, $email, $tel, $message, $date);
		$adminMail = ContactUsAdminMail("info@mentored-research.com", $name, $email, $tel, $message, $date);
		$userMail = ContactUsUserMail($email, $name);
		echo $resp . " ~ " . $adminMail . " ~ " . $userMail;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp . " ~ " . $adminMail . " ~ " . $userMail;
	}
}

?>