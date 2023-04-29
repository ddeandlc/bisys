<?php include('bisys_server_connection.php');?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="bisys_dashboard.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="bisys_assets/bisys_icon.png"/>
  <title> Bi-Sys | Dashboard </title>
</head>
<body>
    <div>
    <div>
      <ul>
        <img class="up" src="bisys_assets/bisys_logo.png">
        <li><a href="server_bisyslogout_response.php">LOGOUT</a></li>
        <li><a href="bisys_automatedoc.php">AUTOMATE DOCUMENT</a></li>
        <li><a href="bisys_modifyresident.php">MODIFY RESIDENT</a></li>
        <li><a href="bisys_addresident.php">ADD RESIDENT</a></li>
        <li><a class="active" href="bisys_dashboard.php">DASHBOARD</a></li>
      </ul>
    </div>
  </div>
  <div align="center">
    <div align="center">
      <img class="logo" src="bisys_assets/bisys_logo.png">
    </div>
    <div align="center">
      <?php

      $sql = "SELECT COUNT(resident_id) as TotalPopulation FROM resident";
      $results = mysqli_query($conn,$sql);
      $rows = mysqli_fetch_assoc($results);
      $totalpop = $rows['TotalPopulation'];

      $sql = "SELECT COUNT(lifestat) as TotalDeaths FROM resident WHERE lifestat='Deceased'";
      $results = mysqli_query($conn,$sql);
      $rows = mysqli_fetch_assoc($results);
      $totaldeaths = $rows['TotalDeaths'];

      $sql = "SELECT COUNT(indigency) as TotalIndigent FROM resident WHERE indigency='Yes'";
      $results = mysqli_query($conn,$sql);
      $rows = mysqli_fetch_assoc($results);
      $totalindi = $rows['TotalIndigent'];

      $sql = "SELECT COUNT(sex) as TotalFemale FROM resident WHERE sex='Female'";
      $results = mysqli_query($conn,$sql);
      $rows = mysqli_fetch_assoc($results);
      $totalfemale = $rows['TotalFemale'];

      $sql = "SELECT COUNT(sex) as TotalMale FROM resident WHERE sex='Male'";
      $results = mysqli_query($conn,$sql);
      $rows = mysqli_fetch_assoc($results);
      $totalmale = $rows['TotalMale'];

      $sql = "SELECT COUNT(affiliation) as TotalPWD FROM resident WHERE affiliation='Person with Disability (PWD)'";
      $results = mysqli_query($conn,$sql);
      $rows = mysqli_fetch_assoc($results);
      $totalpwd = $rows['TotalPWD'];

      $sql = "SELECT COUNT(affiliation) as TotalSC FROM resident WHERE affiliation='Senior Citizen'";
      $results = mysqli_query($conn,$sql);
      $rows = mysqli_fetch_assoc($results);
      $totalsc = $rows['TotalSC'];

      ?>

      <table border="0" cellspacing="10" cellpadding="10">
        <div>
          <tr>
            <td class="reports" colspan="2">
              <h2>TOTAL POPULATION </h2>
              <h1><?php echo $totalpop?></h1>
              <h5> As of <span id='date-time'></h5>
            </td>
            <td class="reports" align="center">
              <h2> DEATCH RECORDS </h2> 
              <p><?php echo $totaldeaths?></p>
            </td>
            <td class="reports" align="center">
              <h2> TOTAL INDIGENT INDIVIDUAL </h2> 
              <p><?php echo $totalindi?></p>
            </td>
          </tr>
          <tr>
            <td class="reports" align="center">
              <h2> TOTAL FEMALE </h2>
              <p ><?php echo $totalfemale?></p>
            </td>
            <td class="reports" align="center">
              <h2>TOTAL MALE </h2>
              <p ><?php echo $totalmale?></p>
            </td>
            <td class="reports" align="center">
              <h2>PWD </h2>
              <p ><?php echo $totalpwd?></p>
            </td>
            <td class="reports" align="center">
              <h2>SENIOR CITIZENS </h2>
              <p ><?php echo $totalsc?></p>
            </td>
          </tr>
        </div>
      </table>
      <script>
        var dt = new Date();
      document.getElementById('date-time').innerHTML=dt;
      </script>
    </div>
  </div>
</body>
</html>

