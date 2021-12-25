 <?php
        $servername = "localhost";
         $username = "root";
        $password = "husainisbest53";
        $database = "blog";

// Create connection
      $connect = mysqli_connect($servername, $username, $password,$database);

 if(isset($_REQUEST['deleteM'])){
        $id = $_REQUEST['id'];

        $sq = "DELETE FROM comments WHERE id=$id";
        mysqli_query($connect, $sq);

        header("Location: indexm10.php");
        exit();
    }

 
 if(isset($_REQUEST['deleteR'])){
        $id = $_REQUEST['id'];

        $sq = "DELETE FROM commentsr WHERE id=$id";
        mysqli_query($connect, $sq);

        header("Location: ../admin2/indexR.php");
        exit();
    }

 
 if(isset($_REQUEST['deletejo'])){
        $id = $_REQUEST['id'];

        $sq = "DELETE FROM commmentsj WHERE id=$id";
        mysqli_query($connect, $sq);

        header("Location: ../admin2/indexJ.php");
        exit();
    }

 
 if(isset($_REQUEST['deleter10'])){
        $id = $_REQUEST['id'];

        $sq = "DELETE FROM commentsr10 WHERE id=$id";
        mysqli_query($connect, $sq);

        header("Location: ../admin2/indexD.php");
        exit();
    }


 if(isset($_REQUEST['deletem'])){
        $id = $_REQUEST['id'];

        $sq = "DELETE FROM commentsm WHERE id=$id";
        mysqli_query($connect, $sq);

        header("Location: ../admin2/indexM.php");
        exit();
    }
?>