<?php
      include 'includes/db-con.php';
      $id= $_GET["test_id"];

    /*sql to delete a record*/
    $sql = "DELETE FROM 5g_testimonial WHERE test_id ='{$id}'";

    if (mysqli_query($con, $sql)) {
        header("location: view-testimonial.php");
    }


?>