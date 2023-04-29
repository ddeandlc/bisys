<?php

if (isset($_POST['res_delete'])) {
	$id = $_POST['res_delete'];

	$sql = "DELETE FROM resident WHERE resident_id='$id'";

	if ($conn->query($sql) === TRUE) {
		echo '<script>alert("Resident Information Deleted Successfully!")</script>';
	}
}

if (isset($_POST['res_edit'])) {
	$id=$_POST['res_edit'];

$update  = true;

$sql = "SELECT * FROM resident WHERE resident_id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {
		$valueresidentid = $row['resident_id'];
		$valuefirstname = $row['firstname'];
		$valuemiddlename = $row['middlename'];
		$valuelastname = $row['lastname'];
		$valuesuffix = $row['suffix'];
		$valuecontact = $row['contactnum'];
		$valueemail = $row['email'];
		$valuehousenum = $row['housenum'];
		$valuestname = $row['streetname'];
		$valuesitio = $row['sitio'];
		$valuesex = $row['sex'];
		$valueage = $row['age'];
		$valuelifestat = $row['lifestat'];
		$valuecivilstat = $row['civilstat'];
		$valuedob = $row['birthdate'];
		$valuecitizenship = $row['citizenship'];
		$valueindigency = $row['indigency'];
		$valueaffil = $row['affiliation'];
	}
}
}

if (isset($_POST['res_update'])) {
	$id = $_POST['res_update'];
	$updatefirstname = $_POST['fname'];
	$updatemiddlename = $_POST['mname'];
	$updatelastname = $_POST['lname'];
	$updatesuffix = $_POST['suf'];
	$updatecontact = $_POST['contact_num'];
	$updateemail = $_POST['email'];
	$updatehousenum = $_POST['house_num'];
	$updatestname = $_POST['street'];
	$updatesitio = $_POST['sitio'];
	$updatesex = $_POST['sex'];
	$updateage = $_POST['age'];
	$updatelifestat = $_POST['life_stat'];
	$updatecivilstat = $_POST['civil_stat'];
	$updatedob = $_POST['date_of_birth'];
	$updatecitizenship = $_POST['cship'];
	$updateindigency = $_POST['indi'];
	$updateaffil = $_POST['affil'];


$sql = "UPDATE resident SET firstname='$updatefirstname', middlename='$updatemiddlename', lastname='$updatelastname', suffix='$updatesuffix', contactnum='$updatecontact', email='$updateemail', housenum='$updatehousenum', streetname='$updatestname', sitio='$updatesitio', sex='$updatesex', age='$updateage', lifestat='$updatelifestat', civilstat='$updatecivilstat', birthdate='$updatedob', citizenship='$updatecitizenship', indigency='$updateindigency', affiliation='$updateaffil' WHERE resident_id='$id'";

if ($conn->query($sql) === TRUE) {
	echo '<script>alert("Resident Information Updated Successfully!")</script>';
}
}


?>