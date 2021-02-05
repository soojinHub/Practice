/**
*Author: Soojin Lee 102266749
*Targetet: register.html
*Purpose: This file is for practice javascript
*Created: 25/04/2019
*Last updated: 25/04/2019
*Credits: W3school, Instruction pdf
*/

"use strict"; //prevents creation of global variables in functions
function validate(){
  //initialize local variables
  var result = true; //assumes no errors

  var job = document.getElementById("job").value;
  var firstname = document.getElementById("firstname").value;
  var lastname = document.getElementById("lastname").value;
  var phone = document.getElementById("phone").value;

    var date = document.getElementById("dob").value;
    var dob = document.getElementById("dob").value.split("/");
    var newdate = new Date(dob[2], parseInt(dob[1]) - 1, dob[0]);
    var today = new Date();
    var age = today.getFullYear() - newdate.getFullYear();

    var ismale = document.getElementById("male").checked;
    var isfemale = document.getElementById("female").checked;
    var isnonbinary = document.getElementById("nonbinary").checked;


  var postcode = document.getElementById("postcode").value;
  var state = document.getElementById("state").options[document.getElementById("state").selectedIndex].text;
  var email = document.getElementById("email").value;
  var other = document.getElementById("otherskills").checked;

/*
if (date == null || date == "" || !date.match(/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/)) {
      document.getElementById("confirm_age").innerHTML="--- Invalid date of birth (dd/mm/yyyy)";
      result = false;
    }
if (age >= 80) { // Outside age ranges.
    document.getElementById("confirm_age").innerHTML="--- You must be 80 or younger to apply for this job";
      result = false;
    }

if (age <= 15) { // Outside age ranges.
      document.getElementById("confirm_age").innerHTML="--- You must be 15 or younger to apply for this job";
      result = false;

    }

    var regex;
    //VIC = 3 OR 8, NSW = 1 OR 2 ,QLD = 4 OR 9 ,NT = 0 ,WA = 6 ,SA=5 ,TAS=7 ,ACT= 0.
    switch (state) {
       case "Please Select":
           result = false;
       case "VIC":
           regex = new RegExp(/(3|8)\d+/);
           break;
        case "NSW":
           regex = new RegExp(/(1|2)\d+/);
           break;
        case "QLD":
           regex = new RegExp(/(4|9)\d+/);
           break;
        case "NT":
           regex = new RegExp(/0\d+/);
           break;
        case "WA":
           regex = new RegExp(/6\d+/);
           break;
        case "SA":
           regex = new RegExp(/5\d+/);
           break;
        case "TAS":
           regex = new RegExp(/7\d+/);
           break;
        case "ACT":
           regex = new RegExp(/0\d+/);
           break;
    }
    if(!postcode.match(regex)){
      document.getElementById("confirm_postcode").innerHTML="--- State and postcode do not match";
      result = false;
    }


 if (other && document.getElementById("idskills").value.trim().length===0) {
   document.getElementById("confirm_skill").innerHTML= "--- You have selected other skills, you must enter one other skill in the text box";
   result = false;
 }
*/

if(result){
   storeInfo(job, firstname, lastname, phone, date, postcode, state, gender, address, suburb, email, skill);
   }

  return result;    //if false the information will not be sent to the server
}


function jobrefer(){
  document.getElementById("jobhref1").onclick = func1;
  document.getElementById("jobhref2").onclick = func2;

    function func1(){
      localStorage.setItem('jobref', 'SE101');
    }
    function func2(){
      localStorage.setItem('jobref', 'UX101');
    }



  // var softEngineer = localStorage.getItem('Software Engineer');
  // var uxDeveloper = localStorage.getItem('uxDeveloper');
}



function form(){

  var applyForm = document.getElementById("applyForm");//get ref to the HTML element
  applyForm.onsubmit=validate;//register the event listener
  prefill_form();

  var jobref = localStorage.getItem('jobref')
  if (jobref != null){
  document.getElementById("job").value = localStorage.getItem('jobref');
  document.getElementById("job").readOnly = true;}
}


function getgender(){
  //initialise variable in case does not get reinitialised properly
  var genderName = "Unknown";
  //get an array of all input elements inside the fieldset dlement with id="species"
  var genderArray = document.getElementById("gender").getElementsByTagName("input");
    for(var i = 0; i < genderArray.length; i++){
    if(genderArray[i].checked) //test if radio button is selected
      genderName = genderArray[i].value; //assign the value attribute
  }
  return genderName;
}




function storeInfo (job, firstname, lastname, phone, date, postcode, state, gender, address, suburb, email, skill){
  //get values and assign them to a sessionStorage attribute.
  //we use the same name for the attribute and the element id to avoid confusion

  var gender = getgender()
  var address = document.getElementById("address").value;
  var suburb = document.getElementById("suburb").value;


  sessionStorage.job = job;
  sessionStorage.firstname = firstname;
  sessionStorage.lastname = lastname;
  sessionStorage.phone = phone;
  sessionStorage.date = date;
  sessionStorage.postcode = postcode;
  sessionStorage.state = state;
  sessionStorage.gender = gender;
  sessionStorage.address = address;
  sessionStorage.suburb = suburb;
  sessionStorage.email = email;

if (document.getElementById("C++").checked) {sessionStorage.setItem('skill_1', 'C++');}
if (document.getElementById("JAVA").checked) {sessionStorage.setItem('skill_2', 'JAVA');}
if (document.getElementById("Javascript").checked) {sessionStorage.setItem('skill_3', 'Javascript');}
if (document.getElementById("Python").checked) {sessionStorage.setItem('skill_4', 'Python');}
if (document.getElementById("MySQL").checked) {sessionStorage.setItem('skill_5', 'MySQL');}
if (document.getElementById("otherskills").checked) {sessionStorage.setItem('skill_6', 'otherskills');}

//add other elements here

}


/*var inputElements = document.getElementsByTagName("input");

    for (var i=0; i<inputElements.length; i++) {
        if (inputElements[i].getAttribute('type') == 'radio') {
            inputElements[i].checked = true;
        }
    } */

/*check if session data on user exists and if so prefill the form */
function prefill_form(){
  if(sessionStorage.job !=undefined){//if storage for username is not empty
    var jobref = localStorage.getItem('jobref')
    if (jobref != null){
    document.getElementById("job").value = localStorage.getItem('jobref');}
    else{
      document.getElementById("job").value = sessionStorage.job;
    }
    document.getElementById("firstname").value = sessionStorage.firstname;
    document.getElementById("lastname").value = sessionStorage.lastname;
    document.getElementById("phone").value = sessionStorage.phone;
    document.getElementById("dob").value = sessionStorage.date;
    document.getElementById("postcode").value = sessionStorage.postcode;
    document.getElementById("state").value = sessionStorage.state;
    document.getElementById("gender").value = sessionStorage.gender;
    document.getElementById("address").value = sessionStorage.address;
    document.getElementById("suburb").value = sessionStorage.suburb;
    document.getElementById("email").value = sessionStorage.email;

    if (sessionStorage.gender == "male"){document.getElementById("male").checked = true;}
    if (sessionStorage.gender == "female"){document.getElementById("female").checked = true;}
    if (sessionStorage.gender == "nonbinary"){document.getElementById("nonbinary").checked = true;}

    if (sessionStorage.skill_1 == "C++"){document.getElementById("C++").checked = true;}
    if (sessionStorage.skill_2 == "JAVA"){document.getElementById("JAVA").checked = true;}
    if (sessionStorage.skill_3 == "Javascript"){document.getElementById("Javascript").checked = true;}
    if (sessionStorage.skill_4 == "Python"){document.getElementById("Python").checked = true;}
    if (sessionStorage.skill_5 == "MySQL"){document.getElementById("MySQL").checked = true;}
    if (sessionStorage.skill_6 == "otherskills"){document.getElementById("otherskills").checked = true;}


    }
  }

    function init(){
      if (document.getElementById("jobs")!= null){
        jobrefer();

      }
      else if (document.getElementById("apply")!=null){
        form();

      }
    }

    window.onload = init;
