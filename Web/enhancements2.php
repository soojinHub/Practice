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
  $page="enhancements2page";
  include'header.inc';
  include'menu.inc';
  ?>

<article class="enhancements">
  <h2>Enhancements List</h2>
    <ol>
      <li>Timer<br/>On apply.html, implement a timer so that the user only has a limited time to complete the
        application after which a warning is displayed and the browser redirects to the home page. <br/><a href="apply.php">press the button in apply.html</a>
      </li>
      </ol>
</article>

<?php
include'footer.inc';
?>
</body>
</html>
