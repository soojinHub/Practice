<!DOCTYPE html>
<html lang="en">
<head>
  <title>Soojin Lab</title>
  <meta charset="utf-8" />
  <meta name="description" content="Demonstrates some basic HTML content elements and CSS" />
  <meta name="keywords" content="HTML5, tags"/>
  <meta name="author" content="A Lecturer"/>
  <!--javascript-->
  <script src="scripts/apply.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- other meta stuff-->
  <link href="styles/style.css" rel="stylesheet"/>
  <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width:1024px)"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>
<!-- This is a comment. Indenting child elements makes the markup much more readable -->
<body id="jobs">
<?php
$page="jobspage";
include 'header.inc';
include 'menu.inc';
?>


<div id="container">
  <figure id='labfig'>
    <img id='labimg' src="images/lab.jpg" alt="picture of lab">
  </figure>

  <aside>
    <h2>Working at Soojin Lab</h2>
    <p>Innovation is impossible without great talent.
      We admire smart, transparent, and passionate people,
      who thrive to see a better world become real.
      We spot top tier engineers, designers and product managers,
      and create opportunities to unlock ‘AI first’ ideas.
    </p>
  </aside>
</div>

<h2>Join our Team</h2>


<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
        Software Engineer
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">

<span id="jobhref1">
    <a class='applybutton' href="apply.php">Apply</a>
  </span>
  <ol>
<li>
  Position description reference number: SE101
</li>
<li>
  Job description:<br> Coding & code review <br> Design with the team together the overall architecture and create design docs
</li>
<li>
  Salary: $100,000
</li>
</ol>
  <h4>1.Responsibilities</h4>
      <ul>
        <li>Continuously bring new and innovative ideas</li>
        <li>Create any necessary tool for maintenance and automation if needed<br>
            All codes are reviewed by each other and should pass the review to be submitted.
            This A-Z code review is our unique development process to grow our team
            faster and make them stronger.</li>
      </ul>
  <h4>2.General Qualifications</h4>
<ul>
  <li>BS or above in Computer Science, Electronic Engineering or related majors</li>
  <li>Programming Language: C++, JAVA, Javascript, Python</li>
</ul>

  <h4>3.Preferred Qualifications</h4>
  <ul>
  <li>MS or PhD degree</li>
  <li>Proficiency in machine learning frameworks such as TensorFlow and PyTorch</li>
  <li>Proficiency in distributed computing frameworks such as MapReduce and Spark</li>
  <li>Mobile programming experience such as Android and iOS</li>
  <li>RDB(MySQL) or NoSQL DB(MongoDB, Redis etc.) experience</li>
  <li>Team leading experience</li>
  </ul>
      </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        UX Developer
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
  <div id="jobhref2">
    <a class='applybutton' href="apply.php">Apply</a>
  </div>
  <ol>
    <li>Position description reference number: UX101</li>
    <li>Job description:<Br>Front-end engineers with strong understanding in HCI and design, who focus on building product UIs and websites.</li>
    <li>Salary: $150,000</li>
  </ol>
    <h4>1.Responsibilities</h4>
      <ul>
        <li>Collaborates with other engineers who might focus mainly on back-ends and serving infra.</li>
        <li>Build common company-wide UX libraries.</li>
      </ul>
    <h4>2.Requirement</h4>
      <ul>
        <li>BS or above in Computer Science, or equivalent professional experience.</li>
        <li>General understanding of UI frameworks and template languages.</li>
        <li>General understanding of mobile/desktop/web app programming.</li>
        <li>General understanding of design tools.</li>
      </ul>
    <h4>3.Preferred</h4>
      <ul>
        <li>MS or above specializing in HCI and/or UX.</li>
        <li>Proficient in UI programming and markup languages such as:
            <br/>- JS, Dart, Kotlin, Swift
            <br/>- HTML, CSS, Less, Sass
          </li>

        <li>Proficient in popular modern UI frameworks such as React, Flutter, Vue.js, and Angular.</li>
        <li>Proficient in web, Android, and/or iOS programming.</li>
        <li>Proficient in popular modern CMS such as Jekyll, Hugo, and Wordpress.</li>
        <li>Proficient in popular design tools such as Photoshop and Sketch.</li>
          </ul>

      </div>
    </div>
  </div>




<?php
include'footer.inc';
?>
</body>
</html>
