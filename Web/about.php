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
$page="aboutpage";
include 'header.inc';
include 'menu.inc';
?>
<article class="about">
<h2>Profile</h2>
  <figure>
<img id="profile" src="images/photo.jpg" alt="photo of Soojin">
</figure>
<dl class="dic">
  <div>
  <dt>Name</dt>
  <dd>Soojin Lee</dd>
  </div>

  <div>
  <dt>Student Number</dt>
  <dd>102266749</dd>
  </div>

  <div>
  <dt>Tutor's name</dt>
  <dd>Sharon</dd>
  </div>

  <div>
  <dt>Course you are doing</dt>
  <dd>Bachelor of Business and Law</dd>
  </div>
  <div>
    <dt>Email Address</dt>
    <dd><a href="mailto:102266749@student.swin.edu.au">102266749@student.swin.edu.au</a></dd>
  </div>
  <div>
    <dt>Home town</dt>
    <dd>Seoul</dd>
  </div>
</dl>



<!--timetable-->
<section id="table">
<h2 id="tabletitle">2019 Semester 1</h2>
  <table>
    <thead>
      <tr>
      <th></th>
      <th>MON</th>
      <th>WED</th>
      <th>THU</th>
      <th>FRI</th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <td>Subject</td>
        <td>Creating Web Application (LEC)</td>
        <td>Businiss Law (LEC)</td>
        <td>Business Law (TU)</td>
        <td>Creating Web Application (TU)</td>
      </tr>
      <tr>
        <td>Class</td>
        <td>BA302</td>
        <td>BA201</td>
        <td>EN205</td>
        <td>BA411</td>
      </tr>
      <tr>
        <td>Time</td>
        <td>2:30 - 4:30</td>
        <td>2:30 - 4:30</td>
        <td>11:30 - 12:30</td>
        <td>8:30 - 10:30</td>
      </tr>
      <tr>
          <td>Subject</td>
          <td></td>
          <td></td>
          <td></td>
          <td>Data Analysis and design (LEC+TU)</td>
      </tr>
      <tr>
        <td>Class</td>
        <td></td>
        <td></td>
        <td></td>
        <td>BA604, AMDC301</td>
      </tr>
      <tr>
        <td>Time</td>
        <td></td>
        <td></td>
        <td></td>
        <td>12:30 - 4:30</td>
      </tr>
    </table>

</section>
</article>

<?php
include'footer.inc';
?>
</body>
</html>
