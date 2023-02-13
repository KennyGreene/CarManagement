<?php include 'header.php'?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="update.css?v=<?php echo time();?>"">
<h1 class="text-center">Car Details</h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Year</th>
                    <th scope="col">Service</th>
</tr>
</thead>
<tbody>
    <tr>

    <?php



        if (isset($_GET['student_id'])) {
            $student_id = $_GET['student_id'];

            $query="SELECT * FROM cars WHERE id = {$student_id}";
            $view_students= mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($view_students))
            {
                $id = $row['id'];
                $make = $row['make'];
                $model = $row['model'];
                $year = $row['year'];
                $service = $row['service'];

                    echo "<tr >";
                    echo " <td >{$id}</td>";
                    echo " <td >{$make}</td>";
                    echo " <td >{$model}</td>";
                    echo " <td >{$year}</td>";
                    echo " <td >{$service}</td>";
                    echo " </tr>";
            }
        }
        ?>
        </tr>
    </tbody>
    </table>
    </div>

    <div class="container text-center mt-5">
        <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    </div>

    <?php include "footer.php" ?>