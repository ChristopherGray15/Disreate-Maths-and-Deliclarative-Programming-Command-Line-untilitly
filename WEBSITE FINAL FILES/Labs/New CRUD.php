
    <!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
    /* The Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* This is to Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
</head>
<body>  

<?php
// This defines variables and set to empty values


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $CustomerID = test_input($_POST["CustomerID"]);
  $Cust_name= test_input($_POST["Cust_name"]);
  $Address Line 1 = test_input($_POST["Address Line 1"]);
  $Town = test_input($_POST["Town"]);
  $Country = test_input($_POST["country"]);
  $Tel = test_input($_POST["Tel"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation S17117107</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  CustomerID: <input type="text" First name="CustomerID">
  <br><br>
  Cust_name: <input type="text" name="Cust_Name">
  <br><br>
  Address Line 1: <input type="text" name="Address Line 1">
  <br><br>
  Town: <textarea name="Town" rows="5" cols="40"></textarea>
  <br><br>
  Tel: <textarea name="Tel" rows="5" cols="40"></textarea>
  <br><br>
  Country:
  <br><br>
  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Birmingham</a>
    <a href="#">London</a>
    <a href="#">Manchester</a>
    <a href="#">Bristol</a>
    <a href="#">Swindow</a>
    <a href="#">Kent</a>
    <a href="#">Coventry</a>
  </div>
  </div>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $CustomerID;
echo "<br>";
echo $Cust_name;
echo "<br>";
echo $Address Line 1;
echo "<br>";
echo $Town;
echo "<br>";
echo $Country;
echo "<br>";
echo $Tel;
echo "<br>";



?>

</body>
</html>