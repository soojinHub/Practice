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
<body>
<?php
  $page="managepage";
	include "header.inc";
  include 'menu.inc';
?>
<?php
	if (isset ($_GET["id"]))
		$id=$_GET["id"];
	else {
		header ("location:manage.php");
		exit();
	}

	require_once "settings.php";	// Load MySQL log in credentials
	$conn = @mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
	if ($conn) { // check is database is available for use
		$query = "UPDATE eoi SET Status = 'new' WHERE App_id = $id";
		$result = mysqli_query ($conn, $query);
		if ($result) {
      if (isset ($_GET["order"]))
            header ("location:manage.php?order=active");								// check if query was successfully executed
       else header ("location:manage.php");								// check if query was successfully executed

		} else {
			echo "<p>Update operation unsuccessful.</p>";
		}
		mysqli_close ($conn);					// Close the database connect
	} else {
		echo "<p>Unable to connect to the database.</p>";
	}
?>
</body>

<?php
include'footer.inc';
?>

</html>
