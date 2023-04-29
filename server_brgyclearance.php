<?php
if (isset($_POST['res_select'])) {
	$id=$_POST['res_select'];

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
?>