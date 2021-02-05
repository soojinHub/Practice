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
?>
<section id="login">
<h2>Manager Login</h2>
  <form action="login.php" method="post">
    <p><label>Manager ID: <input type="text" name="userid"/></label></p>
    <p><label>Password: <input type="text" name="userpwd" /></label></p>
    <input type="submit" value="Login" />
  </form>
<br/>

<?php
include "settings.php";	// Load MySQL log in credentials
session_start();

if (isset($_POST["userid"])){
  if($_POST["userid"]==$user&&$_POST["userpwd"]==$pwd){
      echo "<p>Login Successful.</p>";
      $_SESSION['userid'] =$user;
      $_SESSION['userpwd'] =$pwd;
      header ("location:manage.php");
    }
  else{
      echo "<p>Login Failure.</p>";
  }
}
  if (isset($_SESSION["userid"])){
        header ("location:manage.php");
      }

?>
</section>

<?php
include'footer.inc';
?>
</body>
</html>
