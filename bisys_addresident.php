<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bisys_addresident.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="bisys_assets/bisys_icon.png"/>
    <title> Bi-Sys | Add Resident </title>
</head>
<body>
    <div class="navbar">
    <div>
      <ul>
        <img src="bisys_assets/bisys_logo.png">
        <li><a href="server_bisyslogout_response.php">LOGOUT</a></li>
        <li><a href="bisys_automatedoc.php">AUTOMATE DOCUMENT</a></li>
        <li><a href="bisys_modifyresident.php">MODIFY RESIDENT</a></li>
        <li><a href="bisys_addresident.php" class="active" >ADD RESIDENT</a></li>
        <li><a href="bisys_dashboard.php">DASHBOARD</a></li>
      </ul>
    </div>
  </div>
    <div>
        <div>
            <form action="server_addresident.php" method="post">
                <div>
                    <table align="center">
                        <tr>
                          <td>
                            <label>Full Name</label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="text" name="fname" placeholder="First Name" required>
                          </td>
                          <td>
                            <input type="text" name="mname" placeholder="Middle Name">
                          </td>
                          <td>
                            <input type="text" name="lname" placeholder="Lastname" required>
                          </td>
                          <td>
                            <input type="text" name="suf" placeholder="Suffix">
                          </td>
                        </tr>
                        <tr>
                          <td colspan="4">
                            &nbsp;
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <label>E-mail</label>
                          </td>
                          <td colspan="2">
                            <label> Contact Number </label>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <input class="contact" type="email" name="email" placeholder="sample.email@domain.com" required>
                          </td>
                          <td colspan="2">
                            <input class="contact" type="text" name="contact_num" placeholder="Contact Number" required>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="4">
                            &nbsp;
                          </td>
                        </tr>
                        <tr>
                          <td class="dddress">
                            <label>Address Line</label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="text" name="house_num" placeholder="House Number" required>
                          </td>
                          <td colspan="2">
                            <input class="street" type="text" name="street" placeholder="Street Name" required>
                          </td>
                          <td>
                            <input type="text" name="sitio" placeholder="sitio" required>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="4">
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
                              <option> -- Select Gender -- </option>
                              <option> Male </option>
                              <option> Female </option>
                            </select>
                          </td>
                          <td>
                            <input type="number" name="age" placeholder="Age" required>
                          </td>
                          <td>
                            <select name="civil_stat" required>
                              <option> -- Select Civil Status -- </option>
                              <option> Sigle </option>
                              <option> Married </option>
                              <option> Widowed </option>
                              <option> Divorced </option>
                            </select>
                          </td>
                          <td>
                            <input class="dateofbirth" type="date" name="date_of_birth" required>
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
                            <input type="text" name="cship" required>
                          </td>
                          <td>
                            <select name="life_stat" required>
                              <option> -- Select Life Status -- </option>
                              <option> Living </option>
                              <option> Deceased </option>
                            </select>
                          </td>
                          <td>
                            <select name="indi" required>
                              <option> -- Is resident indigent? -- </option>
                              <option> Yes </option>
                              <option> No </option>
                            </select>
                          </td>
                          <td>
                            <select name="affil" required>
                              <option> -- Select Affiliation -- </option>
                              <option> Person with Disability (PWD) </option>
                              <option> Senior Citizen </option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <p class="condition" align="center">Before adding a resident please make sure that all the information are true and correct,</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" colspan="4">
                                <input class="addresident" type="submit" name="add_resident" value="ADD RESIDENT">
                            </td>
                        </tr>
                      </table>
                </div>
            </form>
        </div>
        
    </div>
</body>
</html>