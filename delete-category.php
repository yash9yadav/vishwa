<?php
      include 'includes/db-con.php';
      $id= $_GET["cat_id"];

    /*sql to delete a record*/
    $sql = "DELETE FROM 5g_category WHERE cat_id ='{$id}'";

    if (mysqli_query($con, $sql)) {
        header("location: view-category.php");
    }


?>