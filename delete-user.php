<?php
      include 'includes/db-con.php';
      $id= $_GET["id"];

    /*sql to delete a record*/
    $sql = "DELETE FROM 5g_users WHERE id ='{$id}'";

    if (mysqli_query($con, $sql)) {
        header("location: view-users.php");
    }


?>