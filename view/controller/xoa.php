<?php 

    include "../database/connect.php";

    if (isset($_GET["id"])){
        $id = $_GET["id"];
    }

    $sql = "DELETE FROM baiviet WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    header('location:../admin.php');

?>