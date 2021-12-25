<?php

    // Don't display server errors 
    ini_set("display_errors", "on");

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "husainisbest53", "blog");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM ronaldinho";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['r10_post'])){
        $title1 = mysqli_real_escape_string($conn,$_REQUEST['title1']);
        $titleC1 = mysqli_real_escape_string($conn,$_REQUEST['titleC1']);
        $title2 =  mysqli_real_escape_string($conn,$_REQUEST['title2']);
        $titleC2 =  mysqli_real_escape_string($conn,$_REQUEST['titleC2']);

        $sql = "INSERT INTO ronaldinho (title1,titleC1,title2,titleC2) VALUES('$title1','$titleC1','$title2','$titleC2')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location:../indexD.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM ronaldinho WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM ronaldinho WHERE id=$id";
        mysqli_query($conn, $sql);

        header("Location:../indexD.php");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update2'])){
        $id = $_REQUEST['id'];
        $h1 = mysqli_real_escape_string($conn,$_REQUEST['h1']);
        $p1 = mysqli_real_escape_string($conn,$_REQUEST['p1']);
        $h2 = mysqli_real_escape_string($conn,$_REQUEST['h2']);
        $p2 = mysqli_real_escape_string($conn,$_REQUEST['p2']);


        $sql = "UPDATE ronaldinho SET title1 = '$title1', titleC1 = '$titleC1', title2 = '$title2',titleC2='$titleC2' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location:../indexD.php");
        exit();
    }

