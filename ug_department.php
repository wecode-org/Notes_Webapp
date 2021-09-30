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
  height: 300px;
  float: left;
  width: 15%;
  padding: 0 -20px; 
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -1px;}

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
    margin-bottom: 100px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border-radius: 25px; 
  padding: 10px;
  text-align: center;
   background-color:#FFDAB9;
  height: 200px;
}

.centered {
 position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
</head>
<body style="background-color:#E9967A;">
<h2>Departments</h2>
<div class="image-container">
 <div class="row">
 <div class="column">
    <div class="card" style="width: 12rem;">
      <h3>Department of Science and Humanities</h3>
      <a href="F:\my website\s_and_h_year.html">view</a>.
      </div>
  </div>

  <div class="column" style="padding: -2 20px;">
    <div class="card" style="width: 12rem;">
      <h3>Department of Computer Science and Engineering</h3>
      <a href="cse_sem_page.php">view</a>.
    </div>
  </div>

  <div class="column">
    <div class="card" style="width: 12rem;">
      <h3>Department of Electrical & Electronics Engineering </h3>
      <a href="eee_sem_page.php">view</a>.
      </div>
  </div>
  
  <div class="column">
    <div class="card" style="width: 12rem;">
      <h3>Department of Civil Engineering</h3>
      <a href="civil_sem_page.php">view</a>.
    </div>
  </div>


<div class="column">
    <div class="card" style="width: 12rem;">
      <h3>Department of Mechanical Engineering</h3>
      <a href="mech_sem_page.php">view</a>.
    </div>
  </div>



 <div class="column">
    <div class="card" style="width: 12rem;">
      <h3>Department of Electronics and Communications Engineering</h3>
      <a href="ece_sem_page.php">view</a>.
      </div>
  </div>
</div>
</div>
</div>
</body>
</html>