<?php include('bisys_server_connection.php');

if (isset($_POST['add_resident'])) {
        $firstname = $_POST['fname'];
        $middlename =$_POST['mname'];
        $lastname = $_POST['lname'];
        $suffix = $_POST['suf'];
        $email = $_POST['email'];
        $contact = $_POST['contact_num'];
        $housenumber = $_POST['house_num'];
        $streetname = $_POST['street'];
        $sitio = $_POST['sitio'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $civilstatus = $_POST['civil_stat'];
        $dateofbirth = $_POST['date_of_birth'];
        $citizenship = $_POST['cship'];
        $lifestatus = $_POST['life_stat'];
        $indigency = $_POST['indi'];
        $affiliation = $_POST['affil'];

        $sql = "INSERT INTO resident (firstname, middlename, lastname, suffix, contactnum, email,  housenum, streetname, sitio, sex, age, lifestat, civilstat, birthdate, citizenship, indigency, affiliation) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$contact', '$email', '$housenumber', '$streetname', '$sitio', '$sex', '$age', '$lifestatus', '$civilstatus', '$dateofbirth', '$citizenship',  '$indigency', '$affiliation')";

        if ($conn->query($sql) === TRUE) {
        echo '<script>
        window.alert("Product Added Successfully!");
        window.location.href="bisys_addresident.php";
        </script>';
    }

    else {
        echo '<script>window.alert("Please Fill-up Empty Fields.")</script>';
    }
}

$conn->close();
?>