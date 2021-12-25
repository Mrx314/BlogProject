<?php require_once('../admin/connection.php'); ?>

<!-- On page head area--> 
  <title>Add New Article - Techno Smarter Blog</title>
    <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
    <script>
          tinymce.init({
             mode : "specific_textareas",
    editor_selector : "mceEditor",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>


<div class="content">
 
    <h1>Add New Article</h1>

    <?php

    //if form has been submitted process it
    if(isset($_POST['submit'])){

 

        //collect form data
        extract($_POST);

        //very basic validations
        if($header1 ==''){
            $error[] = 'Please enter the title.';
        }

        if($header2 ==''){
            $error[] = 'Please enter the description.';
        }

        if($para1 ==''){
            $error[] = 'Please enter the content.';
        }

        if(!isset($error)){

          try {



    //insert into database
   $stmt = $db->prepare('INSERT INTO messi (header1,para1,header2,para2) VALUES (:header1,  :para1, :header2,:para2)') ;
  



$stmt->execute(array(
    ':header1' => $header1,
    ':header2' => $header2,
    ':para1' => $para1,
    ':para2' => $para2,
    
));
//add categories
 


    //redirect to index page
    header('Location: index.php?action=added');
    exit;

}catch(PDOException $e) {
                echo $e->getMessage();
            }

        }

    }

    //check for any errors
    if(isset($error)){
        foreach($error as $error){
            echo '<p class="message">'.$error.'</p>';
        }
    }
    ?>
 <form action="" method="post">

        <h2><label>Header 1</label><br>
        <input type="text" name="header1" style="width:100%;height:40px" value="<?php if(isset($error)){ echo $_POST['header1'];}?>"></h2>

      

        <h2><label>Para 1/label><br>
        <textarea name="para1" id="textarea1" class="mceEditor" cols="120" rows='20'><?php if(isset($error)){ echo $_POST['para1'];}?></textarea></h2>


        <h2><label>Header 2</label><br>
        <input type="text" name="header2" style="width:100%;height:40px" value="<?php if(isset($error)){ echo $_POST['header1'];}?>"></h2>

      

        <h2><label>Para 2><br>
        <textarea name="para2" id="textarea1" class="mceEditor" cols="120" rows='20'><?php if(isset($error)){ echo $_POST['para2'];}?></textarea></h2>
        

       
        <button name="submit" class="subbtn">Submit</button>


    </form>



</div>