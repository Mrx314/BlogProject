<?php

    include "../maradona/logicM.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Edit Ronaldo</title>
</head>
<body>

   <div class="container mt-5">

        <?php foreach($query as $w){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $w['h1'];?></h1>
            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $w['p1'];?></p>


            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $w['h2'];?></h1>
            </div>
          <p class="mt-5 border-left border-dark pl-3"><?php echo $w['p2'];?></p>

        <?php } ?>    


        <div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="editM.php?id=<?php echo $w['id']?>" class="btn btn-light btn-sm" name="edit">Edit</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $w['id']?>' name="id">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>
                </div>


        <a href="../indexR.php" class="btn btn-outline-dark my-3">Go Home</a>
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>