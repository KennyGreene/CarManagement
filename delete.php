<!-- Footer -->
<?php  include "header.php" ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="update.css">
<?php 
     if(isset($_GET['delete']))
     {
         $student_id= $_GET['delete'];

         // SQL query to delete data from user table where id = $studentid
         $query = "DELETE FROM cars WHERE id = {$student_id}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
     


              ?>


  <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>
  <!-- Footer -->
<?php include "footer.php" ?>