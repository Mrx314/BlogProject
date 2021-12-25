<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "husainisbest53", "blog");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM messi";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $header1 = $_REQUEST['header1'];
        $para1 = $_REQUEST['para1'];

        $sql = "INSERT INTO messi(header1, para1) VALUES('$header1', '$para1')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: admin.php?info=added");
        exit();
    }