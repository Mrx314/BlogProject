<?php

    include "../Johan/logicJ.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Edit Data</title>
</head>
<body>

   <div class="container mt-5">
        <?php foreach($query as $w){ ?>
            <form method="POST">
                <input type="text" hidden value='<?php echo $w['id']?>' name="id">
                <input type="text" placeholder="Header 1" class="form-control my-3 bg-dark text-white text-center" name="h1" value="<?php echo $w['h1']?>">
                <textarea name="p1" class="form-control my-3 bg-dark text-white" cols="30" rows="10"><?php echo $w['p1']?></textarea>


                
            </form>
        <?php } ?> 

        <?php foreach($query as $w){ ?>
            <form method="POST">
                <input type="text" hidden value='<?php echo $w['id']?>' name="id">
                <input type="text" placeholder="Header 2" class="form-control my-3 bg-dark text-white text-center" name="h2" value="<?php echo $w['h2']?>">
                <textarea name="p2" class="form-control my-3 bg-dark text-white" cols="30" rows="10"><?php echo $w['p2']?></textarea>

                
                <button class="btn btn-dark" name="update1">Update</button>
            </form>
        <?php } ?>   
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>