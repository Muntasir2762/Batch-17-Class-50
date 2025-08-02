
<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create Student</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Blood Group</th>
                </tr>
            </thead>
            <tbody>
                <?php

                   $query = 'SELECT * FROM students';

                   $students = mysqli_query($connection, $query);

                   $i=1;

                   while($row = mysqli_fetch_assoc($students)){

                    $id = $row['id'];
                    $name = $row['name'];
                    $class = $row['class'];
                    $roll = $row['roll'];
                    $phone = $row['phone'];
                    $email = $row['email'];
                    $address = $row['address'];
                    $blood = $row['blood_group'];

                    echo '<tr>
                    <th scope="row">'.$i.'</th>
                    <td>'.$name.'</td>
                    <td>'.$class.'</td>
                    <td>'.$roll.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$email.'</td>
                    <td>'.$address.'</td>
                    <td>'.$blood.'</td>
                    </tr>';

                    $i++;
                   }
                
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>