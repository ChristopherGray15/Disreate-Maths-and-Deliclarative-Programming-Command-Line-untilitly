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
    <h2>Add Item</h2>
  <div class="row sectionPadding">
    <section>
      <form action="processAddItem.php" method="post" enctype="multipart/form-data">
        <p>
          <label for="title">
            <span>Male-Female: </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <input type="text" id="male_female" name="male_female">
        </p>
          
          <p>
          <label for="title">
            <span>Size: </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <input type="text" id="size" name="size">
        </p>
         
          <p>
          <label for="title">
            <span>Colour </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <input type="text" id="colour" name="colour">
        </p>
        
          <p>
          <label for="Brand">
            <span>Brand: </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
         <input type="text" id="brand" name="brand">
        </p>
        <p>
          <label for="image">
            <span>Image: </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>  
          <input type="file" name="image">
        </p>
        <p>
          <input type="submit" name="submit" value="upload">
        </p>
    </form>
    </section>
  </div><!-- row -->   
</div><!-- content container -->
</body>
</html>