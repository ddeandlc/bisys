<?php
include('bisys_server_connection.php');
include('server_bisys_modifyresident.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bisys_modifyresident.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="bisys_assets/bisys_icon.png"/>
	<title> Bi-Sys | Modify Resident </title>
</head>
<body>
	<div class="navbar">
    <div>
      <ul>
        <img src="bisys_assets/bisys_logo.png">
        <li><a href="server_bisyslogout_response.php">LOGOUT</a></li>
        <li><a href="bisys_automatedoc.php">AUTOMATE DOCUMENT</a></li>
        <li><a class="active" href="bisys_modifyresident.php">MODIFY RESIDENT</a></li>
        <li><a href="bisys_addresident.php">ADD RESIDENT</a></li>
        <li><a href="bisys_dashboard.php">DASHBOARD</a></li>
      </ul>
    </div>
  </div>

  <div class="split left">
  	<form method="post" id="modifyform">
  		<table class="formtable">

  			<?php

  			if (isset($_POST['res_edit'])) {

  				$update = true;

  				$result = $conn->query($sql);

  				if ($result->num_rows > 0) {

  					while($row = $result->fetch_assoc()) {

  					}
  				}
  			}
  			?>

  			<tr>
  				<td>
  					<label> First Name </label>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					<input value="<?php echo $valuefirstname?>" type="text" name="fname" placeholder="First Name" required>
  				</td>
  				<td>
  					<input value="<?php echo $valuemiddlename?>" type="text" name="mname" placeholder="Middle Name">
  				</td>
  				<td>
  					<input value="<?php echo $valuelastname?>" type="text" name="lname" placeholder="Lastname" required>
  				</td>
  				<td>
  					<input value="<?php echo $valuesuffix?>" type="text" name="suf" placeholder="Suffix">
  				</td>
  			</tr>
  			<tr>
  				<td>
  					&nbsp;
  				</td>
  			</tr>
  			<tr>
  				<td colspan="2">
  					<label>E-mail</label>
  				</td>
  				<td colspan="2">
  					<label>Contact Number</label>
  				</td>
  			</tr>
  			<tr>
  				<td colspan="2">
  					<input value="<?php echo $valueemail?>" class="contact" type="email" name="email" placeholder="sample.email@domain.com" required>
  				</td>
  				<td colspan="2">
  					<input value="<?php echo $valuecontact?>" class="contact" type="text" name="contact_num" placeholder="Contact Number" required>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					&nbsp;
  				</td>
  			</tr>
  			<tr>
  				<td>
  					<label> Address Line </label>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					<input value="<?php echo $valuehousenum?>" type="text" name="house_num" placeholder="House Number" required>
  				</td>
  				<td colspan="2">
  					<input value="<?php echo $valuestname?>" class="street" type="text" name="street" placeholder="Street Name" required>
  				</td>
  				<td>
  					<input value="<?php echo $valuesitio ?>" type="text" name="sitio" placeholder="Sitio" required>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					&nbsp;
  				</td>
  			</tr>
  			<tr>
  				<td>
  					<label> Sex </label>
  				</td>
  				<td>
  					<label> Age </label>
  				</td>
  				<td>
  					<label> Civil Status </label>
  				</td>
  				<td>
  					<label> Date of Birth </label>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					<select name="sex" required>
  						<option><?php echo $valuesex?></option>
  						<option> -- Select Sex -- </option>
  						<option> Male </option>
  						<option> Female </option>
  					</select>
  				</td>
  				<td>
  					<input value="<?php echo $valueage?>" type="number" name="age" placeholder="Age" required>
  				</td>
  				<td>
  					<select name="civil_stat" required>
  						<option><?php echo $valuecivilstat?></option>
  						<option> -- Select Civil Status -- </option>
  						<option> Sigle </option>
  						<option> Married </option>
  						<option> Widowed </option>
  						<option> Divorced </option>
  					</select>
  				</td>
  				<td>
  					<input value="<?php echo $valuedob?>" class="dateofbirth" type="date" name="date_of_birth" required>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					&nbsp;
  				</td>
  			</tr>
  			<tr>
  				<td>
  					<label> Citizenship </label>
  				</td>
  				<td>
  					<label> Life Status </label>
  				</td>
  				<td>
  					<label> Indigency </label>
  				</td>
  				<td>
  					<label> Affiliation </label>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					<input value="<?php echo $valuecitizenship?>" type="text" name="cship" required>
  				</td>
  				<td>
  					<select name="life_stat" required>
  						<option> <?php echo $valuelifestat?></option>
  						<option> -- Select Life Status -- </option>
  						<option> Living </option>
  						<option> Deceased </option>
  					</select>
  				</td>
  				<td>
  					<select name="indi" required>]
  						<option><?php echo $valueindigency?></option>
	  				 	<option> -- Is resident indigent? -- </option>
	  				 	<option> Yes </option>
	  				 	<option> No </option>
	  				</select>			
  				</td>
  				<td>
  					<select name="affil" required>
  						<option><?php echo $valueaffil?></option>
	  					<option>-- Select Affiliation --</option>
	  					<option> Person with Disability (PWD)</option>
	  					<option> Senior Citizen </option>
	  				</select>
  				</td>
  			</tr>
  			<tr>
  				<td colspan="2" align="right">
  					<?php if($update == true):?>
						<button value="<?php echo $valueresidentid?>" class="addres" name="res_update">UPDATE</button>
  				</td>
  				<td colspan="2" align="left">
  					<button class="cancel" name="res_cancel"><a href="bisys_modifyresident.php">CANCEL</a></button>
  				</td>
  				<?php else: ?>
  					<input type="hidden" name="invi">

  					<?php endif?>
  			</tr>
  		</table>
  		<script>
  			function myFunction() {
  				document.getElementById("modifyform").reset();
  			}
</script>
  	</form>
	</div>

  <div class="split right">
  	<div align="center">
  		<input class="search" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
  	</div>
  	
  	<form method="post">
  		<table class="residenttable" id="myTable">
  			<?php

				$sql="SELECT * FROM resident";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) { ?>
					<thead>
						<tr>
							<th> FIRST NAME </th>
							<th> MIDDLE NAME </th>
							<th> LAST NAME </th>
							<th> SUIFFIX </th>
							<th colspan="2"> ACTION </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php while($row = $result->fetch_assoc()) { ?>
								<td>
									<?php echo $row['firstname']?>
								</td>
								<td>
									<?php echo $row['middlename']?>
								</td>
								<td>
									<?php echo $row['lastname']?>
								</td>
								<td>
									<?php echo $row['suffix']?>
								</td>
								<td>
									<button class="edit_btn" value="<?php echo $row['resident_id']?>" name="res_edit">EDIT</button>
									<input type="hidden" value="<?php echo $row['resident_id']?>" name="residentid"> 
								</td>
								<td>
									<button class="del_btn" value="<?php echo $row['resident_id']?>" name="res_delete">DELETE</button>
								</td>
						</tr>
					</tbody>
					<?php
			}
		} else {
			echo "<h2 style='color:red;'>NO RESIDENT ARE AVAILABLE AS OF THE MOMENT</h2>";
		}

		$conn->close();

		?>
  		</table>
  	</form>
  	<script>
  		function myFunction() {
  			var input, filter, table, tr, td, i, txtValue;
  			input = document.getElementById("myInput");
  			filter = input.value.toUpperCase();
  			table = document.getElementById("myTable");
  			tr = table.getElementsByTagName("tr");
  			for (i = 0; i < tr.length; i++) {
  				td = tr[i].getElementsByTagName("td")[0];
  				if (td) {
  					txtValue = td.textContent || td.innerText;
  					if (txtValue.toUpperCase().indexOf(filter) > -1) {
  						tr[i].style.display = "";
  					} else {
  						tr[i].style.display = "none";
  					}
  				}
  			}
  		}
</script>
  </div>
</body>
</html>

