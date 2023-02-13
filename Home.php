<?php include "header.php"?>

<div class="container">
<link rel="stylesheet" href="Home.css?v=<?php echo time();?>">
    <h1 class="text-center"> Our Current Car Inventory</h1>
    <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-
    person-plus"></i> Create New Car</a>

        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Order Number</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Year</th>
                    <th scope="col">Service</th>
                    <br>
                    <th scope="col" colspan="3" class="text-
                    center"> Edit Car</th>
            </tr>
</thead>
<tbody>
    <tr>

    <?php
    $query="SELECT * FROM cars";

    $view_students= mysqli_query($conn,$query);

    while($row= mysqli_fetch_assoc($view_students)){
        $id = $row['id'];
        $make = $row['make'];
        $model = $row['model'];
        $year = $row['year'];
        $service = $row['service'];
    echo "<tr >";
    echo "<th scope='row' >{$id}</th>";
    echo "<td > {$make}</td>";
    echo "<td > {$model}</td>";
    echo "<td > {$year}</td>";
    echo "<td > {$service}</td>";
    
    echo "<td class='text-center'> <a href='view.php?student_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";
    
    echo "<td class='text-center'> <a href='update.php?edit&student_id={$id}' class='btn btn-secondary'> <i class='bi bi-pencil'></i> EDIT</a> </td>";
    
    echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> Delete</a> </td>";
              echo " </tr> ";
    
  
    }
    ?>
    </tr>
    </tbody>
    </table>
    </div>



<?php include "footer.php"?>

    




