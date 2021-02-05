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
  $page="enhancementspage";
  include'header.inc';
  include'menu.inc';
  ?>

<article class="enhancements">
  <h2>Enhancements List</h2>
    <ol>
      <li>Pseudo-class<br/>When a user mouses over the menu navigation, a user will see the color changes.
        <br/>
        <a href="index.html">Menu navigation</a>
      </li>
      <li>CSS Resizing<br/>Text-area in a application form is resizable by the user.<br/>
       <a href="apply.html">Text area</a></li>
       <li>Responsive CSS<br/> The website automatically resize, hide, shrink, or enlarge, a website, to make it look good on all devices (desktops, tablets, and phones)
       </li>
      </ol>

</article>

<?php
include'footer.inc';
?>
</body>
</html>
