<!DOCTYPE html>
<html lang="en">
<head>
  <title>Soojin Lab</title>
  <meta charset="utf-8" />
  <meta name="description" content="Demonstrates some basic HTML content elements and CSS" />
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="A Lecturer"  />
<!-- other meta stuff-->
  <link href="styles/style.css" rel="stylesheet"/>
  <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width:1024px)"/>
</head>
<!-- This is a comment. Indenting child elements makes the markup much more readable -->
<body>
  <?php
  $page="phpenhancementspage";
  include'header.inc';
  include'menu.inc';
  ?>

<article class="enhancements">
  <h2>Enhancements List</h2>
    <ol>
      <li><a href="login.php">Log-in Page</a><br/>Only a manager can access to the manage page when he/she enters correct ID and password. </li>
      <li><a href="manage.php">Log-out Button</a><br/>A manager can log out with pressing button. This will clean the session storage.</li>
       <li><a href="manage.php">Sorting EOI</a><br/> You can sort the order of the EOI records by status in ascending.</li>
      </ol>

</article>

<?php
include'footer.inc';
?>
</body>
</html>
