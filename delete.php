<?php
    include 'config.php';
?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM students WHERE id= $id";
    $deleteData = mysqli_query($connection, $query);

    if($deleteData == true){
        header('location:index.php');
    }
    else{
        echo "Failed to delete data";
    }
}

else{
    header('location:index.php');
}

?>