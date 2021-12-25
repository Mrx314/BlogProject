<?php 

$server = "localhost";
$username = "root";
$password = "husainisbest53";
$database = "blog";

$connect = mysqli_connect($server, $username, $password, $database);

if (!$connect) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}
error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
    $name = $_POST['name']; // Get Name from form

    $comment = $_POST['comment']; // Get Comment from form

    $sql = "INSERT INTO comments (name, comment)
            VALUES ('$name', '$comment')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "<script>alert('Comment added successfully.')</script>";

        exit();

    } else {
        echo "<script>alert('Comment does not add.')</script>";
    }
}

if (isset($_POST['submitR'])) { // Check press or not Post Comment Button
    $name = $_POST['name']; // Get Name from form

    $comment = $_POST['comment']; // Get Comment from form

    $sql = "INSERT INTO commentsr (name, comment)
            VALUES ('$name', '$comment')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header("Location:../Ronaldo/cr7.php");
        echo "<script>alert('Comment added successfully.')</script>";
        
        exit();
        
    } else {
        echo "<script>alert('Comment does not add.')</script>";
    }
}
?>
<?php 
if (isset($_POST['submitJ'])) { // Check press or not Post Comment Button
    $name = $_POST['name']; // Get Name from form

    $comment = $_POST['comment']; // Get Comment from form

    $sql = "INSERT INTO commentsj (name, comment)
            VALUES ('$name', '$comment')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "<script>alert('Comment added successfully.')</script>";

        exit();
        
    } else {
        echo "<script>alert('Comment does not add.')</script>";
    }

}
?>

<?php 
if (isset($_POST['submitr10'])) { // Check press or not Post Comment Button
    $name = $_POST['name']; // Get Name from form

    $comment = $_POST['comment']; // Get Comment from form

    $sql = "INSERT INTO commentsr10 (name, comment)
            VALUES ('$name', '$comment')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "<script>alert('Comment added successfully.')</script>";
        header("Location: ../R10/r10.php");

        exit();
        
    } else {
        echo "<script>alert('Comment does not add.')</script>";
    }

}
?>
<?php 
if (isset($_POST['submitM'])) { // Check press or not Post Comment Button
    $name = $_POST['name']; // Get Name from form

    $comment = $_POST['comment']; // Get Comment from form

    $sql = "INSERT INTO commentsm (name, comment)
            VALUES ('$name', '$comment')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "<script>alert('Comment added successfully.')</script>";

        exit();
        
    } else {
        echo "<script>alert('Comment does not add.')</script>";
    }

}
?>