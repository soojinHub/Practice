<!DOCTYPE html>
<html lang="en">
<head>
  <title>Soojin Lab</title>
  <meta charset="utf-8" />
  <meta name="description" content="Assign 3 - manage page" />
  <meta name="keywords" content="Mysql, php" />
  <meta name="author" content="Soojin Lee"  />
  <!-- other meta stuff-->
  <link href="styles/style.css" rel="stylesheet"/>
  <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width:1024px)"/>
</head>
<!-- This is a comment. Indenting child elements makes the markup much more readable -->
<body>

  <?php
  $page="managepage";
  include 'header.inc';
  include 'menu.inc';
  session_start();

  if (!isset($_SESSION["userid"])){
        header ("location:login.php");
      }

?>

  <div id="hellodiv">
  <span id="hello"><?php echo "Hello, ".$_SESSION["userid"]; ?></span>
    <a  class="logout" href ="mailto:102266749@student.swin.edu.au">Mail</a>
    <a class="logout" href = "http://tnwlsweb.dothome.co.kr/myadmin/">DB_Admin</a>
    <a class="logout" href = "logout.php">Log-out</a>
  </div>


<?php

  if (!isset($_POST["firstname"])&&!isset($_POST["lastname"])&&!isset($_POST["job"]))
    $query = "SELECT * FROM eoi;";
  else {
    $job=trim($_POST["job"]);
    $firstname=trim($_POST["firstname"]);
    $lastname=trim($_POST["lastname"]);
    $query="SELECT * FROM eoi WHERE
    Job_reference_number LIKE '%$job%'
    and First_name LIKE '%$firstname%'
    and Last_name LIKE '%$lastname%'";
  }

  if (isset ($_GET["order"]))
     $query = "SELECT * FROM eoi ORDER BY Status;";

  require_once "settings.php";	// Load MySQL log in credentials
  $conn = mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
  if ($conn) { // check is database is available for use

    $result = mysqli_query ($conn, $query);

    if ($result) {								// check if query was successfully executed

      $record = mysqli_fetch_assoc ($result);
      if ($record) {							// check if any record exists

        echo "<section id='applist'>";
        echo "<h2>Application List</h2>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Job Ref</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>DOB</th><th>Skills</th><th><a class='manage' href='manage.php?order=active'>Status</a></th><th>Change Status</th><th></th></tr>";
        while ($record) {
          echo "<tr><td>{$record['App_id']}</td>";
          echo "<td>{$record['Job_reference_number']}</td>";
          echo "<td>{$record['First_name']}</td>";
          echo "<td>{$record['Last_name']}</td>";
          echo "<td>{$record['Gender']}</td>";
          echo "<td>{$record['Date_of_birth']}</td>";
          echo "<td>{$record['Skills']}</td>";
          echo "<td>{$record['Status']}</td>";
          echo "<td><a class='manage' href='statusNew.php?id=" . $record['App_id']. "'>N</a>
              <a class='manage' href='statusCurrent.php?id=" . $record['App_id']. "'>C</a>
              <a class='manage' href='statusFinal.php?id=" . $record['App_id']. "'>F</a></td>";
          echo "<td><a class='manage' href='delete.php?id=" . $record['App_id']
                      . "'>Delete</a></td></tr>";
          $record = mysqli_fetch_assoc($result);
        }
        echo "</table>";
        echo "</section>";
        mysqli_free_result ($result);	// Free up resources
      } else {
        echo "<p>No records retrieved.</p>";
      }
    } else {
      echo "<p>Job application table doesn't exist or select operation unsuccessful.</p>";
    }
    mysqli_close ($conn);					// Close the database connect
  } else {
    echo "<p>Unable to connect to the database.</p>";
  }
?>

<div id="container">
<section id="manage_search">
<h2>Search Application</h2>
  <form action="manage.php" method="post">
    <p><label>Job reference number: <input type="text" name="job"/></label></p>
    <p><label>First Name: <input type="text" name="firstname" /></label></p>
    <p><label>Last Name: <input type="text" name="lastname" /></label></p>
    <input type="submit" value="Search" />
  </form>
<br/>
</section>
<section id="manage_delete">
<h2>Delete Application</h2>
  <form action="deleteJob.php" method="post">
    <p><label>Job reference number: <input type="text" name="job" /></label></p>
    <input type="submit" value="Delete" />
  </form>
</section>
</div>


<?php
include'footer.inc';
?>
</body>
</html>
