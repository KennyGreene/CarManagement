<?php  include "header.php" ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="update.css?v=<?php echo time();?>">
<?php 
  if(isset($_POST['create'])) 
    {
        $make = $_POST['make'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $service = $_POST['service'];
        
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO cars(make, model, year, service) VALUES('{$make}','{$model}','{$year}','{$service}')";
        $add_student = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_student) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Car added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Item Details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="make" class="form-label">Make</label>
        <input type="text" name="make"  class="form-control">
      </div>

      <div class="form-group">
        <label for="model" class="form-label">Model</label>
        <input type="text" name="model"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="year" class="form-label">Year</label>
        <input type="text" name="year"  class="form-control">
      </div>    

      <div class="form-group">
        <label for="service" class="form-label">Service</label>
        <input type="text" name="service"  class="form-control">
      </div>    

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="Submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "footer.php" ?>