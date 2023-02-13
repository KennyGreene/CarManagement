<!-- Footer -->
<?php include "header.php"?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="update.css?v=<?php echo time();?>">
<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['student_id']))
    {
      $studentid = $_GET['student_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM cars WHERE id = $studentid ";
      $view_students= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_students))
        {
          $id = $row['id'];
          $make = $row['make'];
          $model = $row['model'];
          $year = $row['year'];
          $service = $row['service'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $make = $_POST['make'];
      $model = $_POST['model'];
      $year = $_POST['year'];
      $service = $_POST['service'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE cars SET make = '{$make}' , model = '{$model}' , year= '{$year}' , service = '{$service}' WHERE id = $studentid";
      $update_student = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Car data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Car Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="make" >Make</label>
        <input type="text" name="make" class="form-control" value="<?php echo $make  ?>">
      </div>

      <div class="form-group">
        <label for="model" >Model</label>
        <input type="text" name="model"  class="form-control" value="<?php echo $model  ?>">
      </div>
        
    
      <div class="form-group">
        <label for="year" >Year</label>
        <input type="text" name="year"  class="form-control" value="<?php echo $year  ?>">
      </div>    

      <div class="form-group">
        <label for="service" >Service</label>
        <input type="text" name="service"  class="form-control" value="<?php echo $service  ?>">
      </div>    

      <div class="form-group">
         <input type="submit"  name="Update" class="btn btn-primary mt-2" value="Update">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="Home.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "footer.php" ?>