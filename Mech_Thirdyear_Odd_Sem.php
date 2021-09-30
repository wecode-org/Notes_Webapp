<!DOCTYPE html>
<html>
<title>Download Materials</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.row {
  height: 500px;
  float: left;
  width: 15%;
  padding: 0 10px;
}
.dropbtn {
  background-color:#FFDAB9;
  color: black;
  padding: 30px 30px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #faebd7;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}


</style>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body style="background-color:#E9967A;">
<h2>Download Materials for Odd Semester</h2>

<div class="row">
<div class="w3-container">
  <div class="w3-panel w3-card"style="width: 18rem;">


<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn" style="width: 300px !important; min-width: 100px; max-width: 500px;">Thermal Engineering-II</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="Sample.pdf">Syllabus</a>
	<a href="Sample.pdf">Unit 1</a>
    <a href="Sample.pdf">Unit 2</a>
    <a href="Sample.pdf">Unit 3</a>
    <a href="Sample.pdf">Unit 4</a>
	<a href="Sample.pdf">Unit 5</a>
	<a href="Sample.pdf">Question Bank</a>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</div>
</div>
</div>
  

<div class="w3-panel w3-card"style="width: 18rem;">

<div class="dropdown">
  <button onclick="myFunctiontwo()" class="dropbtn" style="width: 300px !important; min-width: 100px; max-width: 500px;">Design of Machine Elements</button>
  <div id="myDropdowntwo" class="dropdown-content">
    <a href="Sample.pdf">Syllabus</a>
	<a href="Sample.pdf">Unit 1</a>
    <a href="Sample.pdf">Unit 2</a>
    <a href="Sample.pdf">Unit 3</a>
    <a href="Sample.pdf">Unit 4</a>
	<a href="Sample.pdf">Unit 5</a>
	<a href="Sample.pdf">Question Bank</a>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunctiontwo() {
  document.getElementById("myDropdowntwo").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</div>
</div>
</div>


<div class="w3-panel w3-card"style="width: 18rem;">


<div class="dropdown">
  <button onclick="myFunctionthree()" class="dropbtn" style="width: 300px !important; min-width: 100px; max-width: 500px;">Metrology and Measurements</button>
  <div id="myDropdownthree" class="dropdown-content">
    <a href="Sample.pdf">Syllabus</a>
	<a href="Sample.pdf">Unit 1</a>
    <a href="Sample.pdf">Unit 2</a>
    <a href="Sample.pdf">Unit 3</a>
    <a href="Sample.pdf">Unit 4</a>
	<a href="Sample.pdf">Unit 5</a>
	<a href="Sample.pdf">Question Bank</a>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunctionthree() {
  document.getElementById("myDropdownthree").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</div>
</div>
</div>
<div class="w3-panel w3-card"style="width: 18rem;">


<div class="dropdown">
  <button onclick="myFunctionfour()" class="dropbtn" style="width: 300px !important; min-width: 100px; max-width: 500px;">Dynamics of Machines</button>
  <div id="myDropdownfour" class="dropdown-content">
    <a href="Sample.pdf">Syllabus</a>
	<a href="Sample.pdf">Unit 1</a>
    <a href="Sample.pdf">Unit 2</a>
    <a href="Sample.pdf">Unit 3</a>
    <a href="Sample.pdf">Unit 4</a>
	<a href="Sample.pdf">Unit 5</a>
	<a href="Sample.pdf">Question Bank</a>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunctionfour() {
  document.getElementById("myDropdownfour").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</div>
</div>
</div>




<div class="w3-panel w3-card"style="width: 18rem;">


<div class="dropdown">
  <button onclick="myFunctionfive()" class="dropbtn" style="width: 300px !important; min-width: 100px; max-width: 500px;">Open Elective-I</button>
  <div id="myDropdownfive" class="dropdown-content">
    <a href="Sample.pdf">Syllabus</a>
	<a href="Sample.pdf">Unit 1</a>
    <a href="Sample.pdf">Unit 2</a>
    <a href="Sample.pdf">Unit 3</a>
    <a href="Sample.pdf">Unit 4</a>
	<a href="Sample.pdf">Unit 5</a>
	<a href="Sample.pdf">Question Bank</a>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunctionfive() {
  document.getElementById("myDropdownfive").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</div>
</div>

</div>

</div>
</div>



</body>
</html>
