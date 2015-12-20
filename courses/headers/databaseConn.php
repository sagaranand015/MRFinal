<?php 

	//to make the database connection here! (GoDaddy server one)
	$connection=mysql_connect("localhost","mrdb","MentoredResearch");
	if(!$connection) {
	    die("Error Establishing connection");
	}
	$db = mysql_select_db("mrcourses",$connection);
	if(!$db) {
	    die("Cannot select the database");
	}

	// (localhost connection settings)
	// $connection=mysql_connect("localhost","root","root");
	// if(!$connection) {
	//     die("Error Establishing connection");
	// }
	// $db = mysql_select_db("courses_",$connection);
	// if(!$db) {
	//     die("Cannot select the database");
	// }

?>