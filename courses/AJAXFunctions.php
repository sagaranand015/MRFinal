<?php 

// this is the file for all the AJAX Requests from the contact us page.

//these are for the PHP Helper files
include ('headers/databaseConn.php');
include('helpers.php');

if(isset($_GET["no"]) && $_GET["no"] == "1") {  // for updating the profile data
	
}
else if(isset($_GET["no"]) && $_GET["no"] == "2") {  // for loading the profile data
	LoadProfileData($_GET["email"], $_GET["table"]);
}

// this is the function to load the profile data from the database.
function LoadProfileData($email, $table) {
	$resp = "-1";
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
				$name = $res[$table . "Name"];
				$contact = $res[$table . "Contact"];
				$profile = $res[$table . "Profile"];
				$organ = $res[$table . "Organ"];
			}
		}
		$resp = $email . " ~~ " . $name . " ~~ " . $contact . " ~~ " . $organ . " ~~ " . $profile;
		echo $resp; 
	}	
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

?>