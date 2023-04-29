<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bisysdb";

$update = false;

global $valuefirstname;
global $valuemiddlename;
global $valuelastname;
global $valuesuffix;
global $valuecontact;
global $valueemail;
global $valuehousenum;
global $valuestname;
global $valuesitio;
global $valuesex;
global $valueage;
global $valuelifestat;
global $valuecivilstat;
global $valuedob;
global $valuecitizenship;
global $valueindigency;
global $valueaffil;


global $updatefirstname;
global $updatemiddlename;
global $updatelastname;
global $updatesuffix;
global $updatecontact;
global $updateemail;
global $updatehousenum;
global $updatestname;
global $updatesitio;
global $updatesex;
global $updateage;
global $updatelifestat;
global $updatecivilstat;
global $updatedob;
global $updatecitizenship;
global $updateindigency;
global $updateaffil;

//Create Connection
$conn = new mysqli ($servername, $username, $password, $dbname);

//Check Connection
if ($conn->connect_error) {
	die ("Connection Failed: " . $conn->connect_error);
}
?>