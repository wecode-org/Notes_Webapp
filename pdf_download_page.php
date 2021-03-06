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
</style>
</head>
<body style="background-color:#E9967A;">

<h2>PDF to Download</h2>
<div class="image-container">
 <div class="row">
  <div class="column">
    <div class="card">
      <h1>PG</h3>
      <a href="pg_department.php">view</a>.
    </div>
  </div>

 <div class="column">
    <div class="card">
      <h1>UG</h3>
     
      <a href="ug_department.php">view</a>.
      
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>