/**
*Author: Soojin Lee 102266749
*Targetet: register.html
*Purpose: This file is for practice javascript
*Created: 25/04/2019
*Last updated: 23/05/2019
*Credits: W3school, Instruction pdf
*/



var myAlert;

function myFunction() {
  myAlert = setTimeout(alertFunc, 3000);
  setTimeout(function(){window.location.replace("index.html");}, 15000);
}

function alertFunc() {
  alert("Finish the form in 15 seconds");
}
