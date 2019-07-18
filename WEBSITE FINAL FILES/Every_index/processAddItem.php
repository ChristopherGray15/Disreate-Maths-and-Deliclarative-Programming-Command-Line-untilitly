<?php
$target_dir = "images/";
$uploadOk = 1;
$uploadError = "";


// Check if image file is an actual image or fake image
if(isset($_POST["submit"]) && is_uploaded_file($_FILES['image']['tmp_name']))  {
  $filename = basename($_FILES["image"]["name"]);
  $target_file = $target_dir . $filename;
  $imageFileType =  strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    $uploadError = "File is an image -  {$check["mime"]}.<br />";
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    $uploadError .= "Sorry, file already exists.<br />";
    $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["image"]["size"] > 500000) {
    $uploadError .= "Sorry, your file is too large.<br />";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    $uploadError .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br />";
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {   
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $uploadError .= "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        $uploadError .= "Sorry, there was an error uploading your file.<br />";
    }
  }
} else {
    header( 'Location: addItem.php' ) ;
}


//Add to Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myApp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 } 

$sql = "INSERT INTO shoe (Male_Female, Size,Name, Color, Brand, Image)
 VALUES ('{$_POST["male_female"]}', '{$_POST["description"]}', '$filename')";
 
if ($conn->query($sql) === TRUE) {
    $status =  "Upload Successful";
} else {
    $status = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
<div class="container">
  <nav>
    <ul>
      <li><a href="index.php">home</a></li>
      <li><a href="addItem.php">add item</a></li>
    </ul>    
  </nav>
  <h2>New Item Upload</h2>
  <div class="row sectionPadding">
      <?php 
      if ($uploadOk) {
      ?>
    <section>
      <h3 class="uploadOutcome"><?= $status;?></h3>
      <img class="icon" src="images/<?= $filename;?>" alt="Icon">
      <h3><?= $_POST["title"];?></h3>
      <p><?= $_POST["description"];?></p>
    </section>
      <?php  } else { ?>
     <section>
      <h3 class="uploadOutcome">Error Uploading</h3>
      <p><?= $uploadError; ?></p>
    </section>  
      <?php  } ?>
  </div>
    </div>
    </body>
</html>