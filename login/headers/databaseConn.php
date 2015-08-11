<?php 

	//to make the database connection here! (GoDaddy server one)
	// $connection=mysql_connect("50.62.209.154","theMRFinal","Mresearch123");
	// if(!$connection) {
	//     die("Error Establishing connection");
	// }
	// $db = mysql_select_db("courses_",$connection);
	// if(!$db) {
	//     die("Cannot select the database");
	// }

	//to make the database connection here!
	$connection=mysql_connect('localhost','root','root');
	if(!$connection) {
	    die("Error Establishing connection");
	}
	$db = mysql_select_db("courses_",$connection);
	if(!$db) {
	    die("Cannot select the database");
	}

?>