<?php 

	//to make the database connection here!
	$connection=mysql_connect("localhost","root","");
	if(!$connection) {
	    die("Error Establishing connection");
	}
	$db = mysql_select_db("courses",$connection);
	if(!$db) {
	    die("Cannot select the database");
	}

?>