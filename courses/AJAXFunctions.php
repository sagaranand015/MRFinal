<?php 

// this is the file for all the AJAX Requests from the contact us page.

//these are for the PHP Helper files
include ('headers/databaseConn.php');
include('helpers.php');

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