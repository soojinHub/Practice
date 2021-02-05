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
  <link href="styles/applystyle.css" rel="stylesheet"/>
  <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width:1024px)"/>
  <!--javascript-->
  <script src="scripts/apply.js"></script>
  <script src="scripts/enhancements.js"></script>
</head>
<!-- This is a comment. Indenting child elements makes the markup much more readable -->
<body id="apply">
<?php
$page="applypage";
include 'header.inc';
include 'menu.inc';
?>



<form id="applyForm" action="processEOI.php" method="post" novalidate="novalidate">

<!--<button id="sec" onclick="myFunction()">Alert in 3 seconds</button>-->
<div class="form">
  <fieldset>
    <legend>Personal details</legend>
     <div>
       <label for="job">Job reference number:</label>
       <input required="required" type="text" id="job" name="job" value=""/>
      </div>
      <div>
        <label for="firstname">First name:</label>
        <input required="required" type="text" id="firstname" maxlength="20" name="firstname" value=""/>
      </div>
      <div>
        <label for="lastname">Last name:</label>
        <input required="required" type="text" id="lastname" maxlength="20"  name="lastname" value=""/>
      </div>
      <div>
        <label for="phone">Phone number</label>
        <input required="required" type="tel" name="phone" id="phone"  placeholder="123 123 1234"/>
      </div>
      <div>
        <label for="dob">Date of birth: <span id="confirm_age"></span> </label>
        <input type="text" id="dob" placeholder="dd/mm/yyyy" name="date" value=""/>
      </div>
      <div>
      <fieldset id="gender">
        <legend>Gender</legend>
      				<input type="radio" id="male" name="gender" value="male"/>
                <label for="male">male</label>
              <input type="radio" id="female" name="gender" value="female"/>
                <label for="female">female</label>
              <input type="radio" id="nonbinary" name="gender" value="nonbinary"/>
                  <label for="nonbinary">non-binary</label>
      </fieldset>
    </div>
    </fieldset>

    <fieldset>
      <legend>Address</legend>
      <div>
        <label for="address">Street Address</label>
        <input required="required" type="text" id="address" name="address"/>
      </div>
      <div>
        <label for="suburb">Suburb/town</label>
        <input required="required" type="text" id="suburb" name="suburb"/>
      </div>
      <div>
        <fieldset>
          <legend>State</legend>
          <select name="state" id="state" required="required">
                <option value="" selected="selected">Please Select</option>
                <option id="VIC" value="VIC">VIC</option>
                <option  id="NSW" value="NSW">NSW</option>
                <option  id="QLD" value="QLD">QLD</option>
                <option id="NT" value="NT">NT</option>
                <option id="WA" value="WA">WA</option>
                <option id="SA" value="SA">SA</option>
                <option id="TAS" value="TAS">TAS</option>
                <option id="ACT" value="ACT">ACT</option>
            </select>
          </fieldset>
      </div>
      <div>
        <label for="postcode">Postcode:  <span id="confirm_postcode"></span></label>
        <input required="required" type="text" id="postcode" name="postcode"/>
      </div>
    </fieldset>


    <fieldset>
      <legend>Email</legend>
      <div>
        <label for="email"></label>
        <input required="required" type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
      </div>
    </fieldset>


      <fieldset id="skill">
        <legend>Skill list</legend>
          <div>
          <label for="C++">C++</label>
          <input type="checkbox" id="C++" name="C++" value="C++"/>

          <label for="JAVA">JAVA</label>
          <input type="checkbox" id="JAVA" name="JAVA" value="JAVA"/>

          <label for="Javascript">Javascript</label>
          <input type="checkbox" id="Javascript" name="Javascript" value="Javascript"/>

          <label for="Python">Python</label>
          <input type="checkbox" id="Python" name="Python" value="Python"/>

          <label for="MySQL">MySQL</label>
          <input type="checkbox" id="MySQL" name="MySQL" value="MySQL"/>

          <label for="otherskills">Other skills</label>
          <input type="checkbox" id="otherskills" name="otherskills" value="otherskills"/>
          <br/>
          <span id="confirm_skill"></span>
          <textarea name="explainotherskills" id="idskills" rows="6" cols="50" placeholder="Other skills...">
          </textarea>
          </div>
          </fieldset>



<input type="submit" value="Apply">
</div>
   </form>

<?php
include'footer.inc';
?>
</body>
</html>
