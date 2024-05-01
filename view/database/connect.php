<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "review";

    $conn = new mysqli($servername, $username, $password, $databasename);

    if($conn -> connect_error){
        die("Kết nối csdl thất bại" .$conn->connect_error);

    }else{
       return true;
    }

?>