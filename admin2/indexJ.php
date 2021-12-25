<?php

    include 'Johan/logicJ.php';
    include 'delete.php';
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Admin Panel</title>
</head>
<body>

    <div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php }?>
        <?php } ?>

<a href="indexm10.php" class="btn btn-outline-dark my-3">Go Home</a>
        
    <center><h1>Cryuff Section</h1></center>
        <br>
        <br>

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="Johan/createJ.php" class="btn btn-outline-dark">+ Create a new post</a>
        </div>

        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $w){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $w['h1'];?></h5>
                            <p class="card-text"><?php echo substr($w['p1'], 0, 50);?>...</p>
                            <h5 class="card-title"><?php echo $w['h2'];?></h5>
                            <p class="card-text"><?php echo substr($w['p2'], 0, 50);?>...</p>
                            <a href="Johan/viewJ.php?id=<?php echo $w['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
       
    </div>

<center><h1>Comments</h1></center>
         <?php 
         $servername = "localhost";
         $username = "root";
        $password = "husainisbest53";
        $database = "blog";

// Create connection
      $con = mysqli_connect($servername, $username, $password,$database);
     
      $sql = 'SELECT * FROM commentsj';
      $result =mysqli_query($con, $sql) ;
      
foreach($result as $r){ ?>
    
      
<form method="POST">
<div class="col-15 col-lg-5 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 40rem;">
                        <div class="card-body">

                       <h4><b><?php echo $r['name']; ?></b></h4>
                      
        
                        <p><?php echo $r['comment']; ?></p>
                        
                         <input type="hidden"  value='<?php echo $r['id']?>' name="id">
                         <button class="btn btn-danger btn-sm ml-0.25" name="deletejo">Delete</button>

                        </div>
                    </div>
                </div>
            </form>
                <?php

        }
      
      
?>




    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>


