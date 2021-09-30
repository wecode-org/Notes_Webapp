<!DOCTYPE html>
<html lang="en">
<body>
<h1>PDF</h1>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  height: 500px;
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border-radius: 25px; 
  padding: 16px;
  text-align: center;
   background-color:#FFDAB9;
  height: 300px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}





.dropbtn {
  background-color:#E9967A;
  color: black;
  padding: 16px;
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
</head>
<body style="background-color:#E9967A;">
<div class="image-container">
 <div class="row">
  <div class="column">
    <div class="card">
      <h3>Second Year</h3>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Choose a sem</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="Mech_Secondyear_Odd_Sem.php">odd sem</a>
    <a href="mech_Secondyear_Even_sem.php">Even sem</a>


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
  </div>

  <div class="column">
    <div class="card">
      <h3>Third Year</h3>


<div class="dropdown">
  <button onclick="myFunctionone()" class="dropbtn">Choose a sem</button>
  <div id="myDropdownone" class="dropdown-content">
    <a href="Mech_Thirdyear_Odd_sem.php">odd sem</a>
    <a href="Mech_Thirdyear_even_sem.php">Even sem</a>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunctionone() {
  document.getElementById("myDropdownone").classList.toggle("show");
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
 
  <div class="column">
    <div class="card">
      <h3>Final Year</h3>

<div class="dropdown">
  <button onclick="myFunctiontwo()" class="dropbtn">Choose a sem</button>
  <div id="myDropdowntwo" class="dropdown-content">
    <a href="Mech_Finalyear_Odd_sem.php">odd sem</a>
    <a href="Mech_Finalyear_Even_sem.php">Even sem</a>


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
  </div>

    </div>
  </div>


</div>
</div>
</div>
</body>
</html>