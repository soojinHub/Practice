<!DOCTYPE html>
<html lang="en">
<head>
  <title>Soojin Lab</title>
  <meta charset="utf-8" />
  <meta name="description" content="Demonstrates some basic HTML content elements and CSS" />
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="A Lecturer"  />
<!-- Viewport set to scale 1.0-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- other meta stuff-->
  <link href="styles/style.css" rel="stylesheet"/>
  <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width:1024px)"/>
</head>
<!-- This is a comment. Indenting child elements makes the markup much more readable -->
<body>
<?php
$page="companypage";
include 'header.inc';
include 'menu.inc';
?>


<div id="index_div">
<img id="indeximg" src="images/analysi.jpg" alt="Photo of lab"/>

  <h2>The Company</h2>
  <p>Founded in November 2015,
    Soojin Lab is an artificial intelligence technology company
    developing innovative machine intelligence technology that is
    designed to enhance the quality of the users’ daily lives.
    Skelter Labs particularly funnels its technological capabilities
    in developing Intelligent Virtual Assistant technology that can be
    widely applied to various areas including smart speakers, smartphones,
    home appliances, automobiles and wearable devices.
  </p>
</div>

<?php
include'footer.inc';
?>
<body>
</html>
