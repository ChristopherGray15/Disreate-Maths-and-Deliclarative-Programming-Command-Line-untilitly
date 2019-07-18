

<!DOCTYPE html>
<html>


<head>
  <title>S17117107</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<?php 

//Import database from process.php
    require_once 'process.php'; ?>

<body>
    <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">SHOES.COM</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">HOME</a></li>
            <li><a href="#">IN STOCK</a></li>
            <li><a href="#">BEST SELLING</a></li>
            <li><a href="#">SALE</a></li>
          </ul>
        </div>
      </nav>


      
<div class="container-fluid">
    <div class="row">
       
          <?php 
              $result=$mysql->query("SELECT * FROM shoe") or die($mysqli->error);
              //Loop and display all the shoes from the shoe table
              while($row = $result->fetch_assoc()){

                $id = $row['Shoe_id']; 

         ?>
       
                  <!-- For every row create the image shoe -->
                  <a class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" ><img src="images/<?=$row['Image']?>" alt='none' style="height:200px" ></a>
       
          <?php 
              //CLOSE LOOP
              } ?>
    </div>
</div>
</body>
</html>