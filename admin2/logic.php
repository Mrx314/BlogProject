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
        $header1 = mysqli_real_escape_string($conn,$_REQUEST['header1']);
        $para1 = mysqli_real_escape_string($conn,$_REQUEST['para1']);
        $header2 = mysqli_real_escape_string($conn,$_REQUEST['header2']);
        $para2 = mysqli_real_escape_string($conn,$_REQUEST['para2']);

        $sql = "INSERT INTO messi(header1, para1,header2,para2) VALUES('$header1', '$para1','$header2','$para2')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: indexm10.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM messi WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM messi WHERE id=$id";
        mysqli_query($conn, $sql);

        header("Location: indexm10.php");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = (int)mysqli_real_escape_string($conn,$_REQUEST['id']) ;
        $header1 = mysqli_real_escape_string($conn,$_REQUEST['header1']);
        $para1 = mysqli_real_escape_string($conn,$_REQUEST['para1']);
        $header2 = mysqli_real_escape_string($conn,$_REQUEST['header2']);
        $para2 = mysqli_real_escape_string($conn,$_REQUEST['para2']);    


        $sql = "UPDATE messi SET  header1 = '$header1', para1 = '$para1', header2 = '$header2',para2=$'para2' WHERE id = $id";
        mysqli_query($conn, $sql);


        header("Location: indexm10.php?info=updated");
        exit();
    }

?>
