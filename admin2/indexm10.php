<?php

    include "logic.php";
    include "delete.php";
    include "session.php";
    include "config.php";

// Check user login or not

    
    

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
        <?php if(isset($_REQUEST['info'])) ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php }elseif ($_REQUEST['info']=='updated') {?>
                
                <div class="alert alert-success" role="alert">
                    Post has been updated successfully
                </div>
                
            <?php}?>

        <?php } ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="btn btn-outline-success" href="logout.php">Sign out</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="indexR.php">Ronaldo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="indexJ.php">Johan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="indexM.php">Maradona</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="indexD.php">Ronaldinho</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<center><h1>Welcome <?php echo $login_session; ?></h1></center>


        <center><h1>Messi Section</h1></center>
         
      
        <hr>

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
        </div>

        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['header1'];?></h5>
                            <p class="card-text"><?php echo substr($q['para1'], 0, 50);?>...</p>
                            <h5 class="card-title"><?php echo $q['header2'];?></h5>
                            <p class="card-text"><?php echo substr($q['para2'], 0, 50);?>...</p>
                            <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
       
    </div>


<hr>

        <center><h1>Comments</h1></center>
         <?php 
     
      $sql = "SELECT * FROM comments";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

      ?>
<form method="POST">
<div class="col-15 col-lg-5 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 40rem;">
                        <div class="card-body">

                       <h4><b><?php echo $row['name']; ?></b></h4>
        
                        <p><?php echo $row['comment']; ?></p>

                         <input type="hidden"  value='<?php echo $row['id']?>' name="id">
                         <button class="btn btn-danger btn-sm ml-0.25" name="deleteM">Delete</button>

                        </div>
                    </div>
                </div>
            </form>
                <?php

        }
      }
      
      ?>



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>