<?php
include('bisys_server_connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="server_stylelogin.css">
	<link rel="shortcut icon" type="image/png" href="bisys_assets/bisys_icon.png"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Bi-Sys | Login Response </title>
</head>
<body>
	<div align="center">
<table border="0" class="main" cellpadding="5">
	<tr>
		<td align="center">
			<img src="bisys_assets/bisys_logo.png">
			<hr>
		</td>
	</tr>
	<tr>
		<td align="center">
			
			<?php

			$email = $_POST['acc_email'];
			$pword = $_POST['acc_pass'];


			if (isset($_POST['log_submit'])) {

			$sql= "SELECT * FROM user WHERE password= '$pword' AND email='$email'";
			$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
					header("Location: bisys_dashboard.php");
				}
				?>
				<tr>
					<td align="center">
						<a href="bisys_dashboard.php"><input class="tryagainbttn" type="submit" name="log_proceed" value="PROCEED"></a>
					</td>
				</tr>

			<?php } else {
				echo "<p style='color:black;'> The credentials you’ve entered is incorrect.";
			?>

				<tr>
					<td align="center">
						<a href="index.php"><input class="tryagainbttn" type="submit" name="log_tryagain" value="TRY AGAIN"></a>
					</td>
				</tr>
			</td>
		</tr>
	</table>
</div>
</body>
</html>
			<?php }
		}

		$conn->close();
		?>