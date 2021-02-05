<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="description" content="Assign 3"/>
<!-- other meta stuff-->
<link href="styles/style.css" rel="stylesheet"/>
<link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width:1024px)"/>

<title>process EOI</title>
</head>
<body>
<?php
$page="applypage";
include'header.inc';
include'menu.inc';

function sanitise_input($data){
$data = trim($data);
$data = htmlspecialchars($data);
$data = stripslashes($data);
return $data;}

//checks if process was triggered by a form submit, if not display an error Message
if (isset($_POST["firstname"])){
$firstname = $_POST["firstname"];
$firstname = sanitise_input($firstname);
}
else {
// Redirect to form, if process not triggered by a form submit
echo "Enter data in the <a href=\"apply.php\">form</a>";
//header ("location: apply.php");
}

require_once ("settings.php"); //connection info
$conn=@mysqli_connect($host, $user, $pwd, $sql_db);
      // log in and use database

if ($conn){ // Checks if connection is successful
  //echo "<p>Connection successful</p>";
  //create table
  $query = "CREATE TABLE if not exists eoi(
     App_id                int(11)        not null   auto_increment  primary key,
     Job_reference_number  varchar(20)    not null,
     First_name            varchar(20)    not null,
     Last_name             varchar(20)    not null,
     Phone_number          varchar(100)   not null,
     Date_of_birth         varchar(20)    not null,
     Gender                varchar(10)    not null,
     Street_address        varchar(100)   not null,
     Suburb_town           varchar(100)   not null,
     State                 varchar(100)   not null,
     Postcode              int(11)        not null,
     Email_address         varchar(100)   not null,
     Skills                varchar(100)   not null,
     Other_skills          varchar(1000)  default null,
     Status                varchar(20)    not null
  )";
  $result = mysqli_query($conn, $query);
  if (!$result)
    echo "<p>Create table failed.</p>";


  $errMsg="";
  $job = sanitise_input($_POST["job"]);
  $lastname = sanitise_input($_POST["lastname"]);
  $phone = sanitise_input($_POST["phone"]);
  $date =  sanitise_input($_POST["date"]);
  if (isset($_POST["gender"])){$gender = sanitise_input($_POST["gender"]);}
  else {$gender="Unknown";}
  $address = sanitise_input($_POST["address"]);
  $suburb = sanitise_input($_POST["suburb"]);
  if (isset($_POST["state"])){$state = sanitise_input($_POST["state"]);}
  else {$state="Please Select";}
  $postcode = sanitise_input($_POST["postcode"]);
  $email = sanitise_input($_POST["email"]);


  $skills="";
	if (isset($_POST["C++"])) $skills = $skills. "C++" .", ";
	if (isset($_POST["JAVA"])) $skills = $skills. "JAVA" .", ";
	if (isset($_POST["Javascript"])) $skills = $skills. "Javascript" .", ";
	if (isset($_POST["Python"])) $skills = $skills. "Python" .", ";
  if (isset($_POST["MySQL"])) $skills = $skills. "MySQL" .", ";
  if (isset($_POST["otherskills"])) $skills = $skills. "Other skills" .", ";
  $skills = substr($skills, 0, -2);

  if (isset($_POST['explainother'])) {
      $explainother = $_POST['explainother'];
  }
  else {$explainother ="";}


  if ($job==""){
  	$errMsg .= "<p>You must enter job reference number.</p>";
  }
  else if (!preg_match("/^[a-zA-Z0-9]{5}$/", $job)){
    $errMsg .= "<p>Job reference number must be exactly 5 alphanumeric characters.</p>";
  }
  if ($firstname==""){
  	$errMsg .= "<p>You must enter your first name.</p>";
  }
  else if (!preg_match("/^[a-zA-Z]{0,20}$/",$firstname)){
    $errMsg .= "<p>Only aphabet characters(max 20) are allowed for your first name.</p>";
  }
  if ($lastname==""){
    $errMsg .= "<p>You must enter your last name.</p>";
  }
  else if (!preg_match("/^[a-zA-Z]{0,20}$/",$firstname)){
    $errMsg .= "<p>Only aphabet characters(max 20) are allowed for your first name.</p>";
  }
  if ($phone==""){
    $errMsg .= "<p>You must enter your phone number.</p>";}
  else if (!preg_match("/^[0-9\s]{8,12}$/",$phone)){
    $errMsg .= "<p>Your phone number must be 8 to 12 digits, or spaces.</p>";
  }

  if ($date==""){
    $errMsg .= "<p>You must enter your date of birth.</p>";
  }
else if (!preg_match("/^\d{2}\/\d{2}\/\d{4}$/",$date)){
  $errMsg .="<p>Please enter your date of birth following the dd/mm/yyyy format.</p>";
}


else{
  $date = explode("/",$date);
  $date = $date[2]."-".$date[1]."-".$date[0];
  $dateDob = date_create($date);
  $dateNow = date_create();
  $age = date_diff($dateDob, $dateNow);
  $age = date_interval_format($age, "%Y");

  if ($age<15|| $age>80){
    $errMsg .="<p>Your age must be between 15 and 80.</p>";}
}

if($gender=="Unknown"){
  $errMsg .= "<p>You must enter your gender.</p>";
}

if($address==""){
    $errMsg .= "<p>You must enter your street address.</p>";
}
else if (strlen($address) > 40)
    $errMsg .="<p>Length of street Address must be shorter than 40 characters.</p>";
if($suburb==""){
    $errMsg .= "<p>You must enter your suburb address.</p>";
}
else if (strlen($suburb) > 40)
    $errMsg .="<p>Length of suburb must be shorter than 40 characters.</p>";

switch($state){
  case "Please Select":
  $errMsg .= "<p>You must select state.</p>";
  break;
  case "VIC":
   if (substr($postcode, 0, 1) != '3' && substr($postcode, 0, 1) != '8')
       $errMsg .= "<p>State and postcode do not match.</p>";
       break;
  case "NSW":
    if (substr($postcode, 0, 1) != '1' && substr($postcode, 0, 1) != '2')
        $errMsg .= "<p>State and postcode do not match.</p>";
        break;
  case "QLD":
     if (substr($postcode, 0, 1) != '4' && substr($postcode, 0, 1) != '9')
        $errMsg .= "<p>State and postcode do not match.</p>";
        break;
  case "NT":
     if (substr($postcode, 0, 1) != "0")
        $errMsg .= "<p>State and postcode do not match.</p>";
        break;
  case "WA":
     if (substr($postcode, 0, 1) != "6")
         $errMsg .= "<p>State and postcode do not match.</p>";
        break;
  case "SA":
      if (substr($postcode, 0, 1) != "5")
          $errMsg .= "<p>State and postcode do not match.</p>";
          break;
  case "TAS":
      if (substr($postcode, 0, 1) != "7")
          $errMsg .= "<p>State and postcode do not match.</p>";
          break;
  case "ACT":
      if (substr($postcode, 0, 1) != "0")
          $errMsg .= "<p>State and postcode do not match.</p>";
          break;
}

if ($postcode==""){
      $errMsg .= "<p>You must enter postcode.</p>";
}
else if (!preg_match("/^\d{4}$/",$postcode)){
      $errMsg .="<p>Postcode must be exactly 4 digits.</p>";
    }

if($email==""){
        $errMsg .= "<p>You must enter your email address.</p>";
}
else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errMsg .= "";
} else {
  $errMsg .= "<p>You must enter your email address in a valid form.</p>";
}

  if (isset($_POST["otherskills"]) && $explainother ==""){
      	$errMsg .= "<p>Please explain your other skills. </p>";
  }

if ($errMsg !=""){
  	echo "$errMsg
  				<p>Enter data in the <a href=\"apply.php\">form</a>
  				</P>";
  	// header("location: register.html");
  }
else{
    //set up the SQL command to query or add data into the table
    $sql_table ="eoi";
    $query = "insert into $sql_table(
     Job_reference_number,
     First_name,
     Last_name,
     Phone_number,
     Date_of_birth,
     Gender,
     Street_address,
     Suburb_town,
     State,
     Postcode,
     Email_address,
     Skills,
     Other_skills,
     Status
     )

     values (
    '$job',
    '$firstname',
	  '$lastname',
	  '$phone',
	  '$date',
	  '$gender',
	  '$address',
	  '$suburb',
	  '$state',
	  '$postcode',
	  '$email',
	  '$skills',
	  '$explainother',
    'new'
)";
    //execute the query - we should really check to see if the database exists first
    $result = mysqli_query($conn, $query);
    //checks if the execution was successful
    if(!$result){
      echo "<p class=\"wrong\">Insert unsuccessful. Something is wrong with ",$query, "</p>";
      // would not show in a production script
    }
    else{
      //display an operation successful Message
      echo "<p class=\"ok\">Successfully added application record. <br/>
      Your application number is ".mysqli_insert_id($conn). "</p>";
    }//if successful query operation
}
  mysqli_close($conn); // close the database connect
}
else {
  echo "<p>Unable to connect to the database</p>";
}

?>
</body>
<?php
include'footer.inc';
?>

</html>
