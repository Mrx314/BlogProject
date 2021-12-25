
<?php
// including the database connection file
include_once("connection.php");

if(isset($_POST['update']))
{ 

  $id = mysqli_real_escape_string($conn, $_POST['id']);
  
  $header1 = mysqli_real_escape_string($conn, $_POST['header1']);
  $para1 = mysqli_real_escape_string($conn, $_POST['para1']);
  $header2 = mysqli_real_escape_string($conn, $_POST['header2']);
  $para2 = mysqli_real_escape_string($conn, $_POST['para2']); 
  
  // checking empty fields
  if(empty($header1) || empty($para1) || empty($header2) || empty($para2)) {  
      
    if(empty($header1)) {
      echo "<font color='red'>header1 field is empty.</font><br/>";
    }
    
    if(empty($para1)) {
      echo "<font color='red'>para1 field is empty.</font><br/>";
    }
    
    if(empty($header2)) {
      echo "<font color='red'>header2 field is empty.</font><br/>";
    }
    if(empty($para2)) {
      echo "<font color='red'>header2 field is empty.</font><br/>";
    }   
  } else {  
    //updating the table
    $result = mysqli_query($conn, "UPDATE  SET header1='$header1',para1='$para1',header2='$header2,para2='$para2' WHERE id=$id");
    
    //redirectig to the display ppara1. In our case, it is index.php
    header("Location: index.php");
  }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM messi WHERE id=$id");

while(mysqli_fetch_array($result))
{
  $header1 = $result['header1'];
  $para1 = $result['para1'];
  $header2 = $result['header2'];
  $para2 = $result['para2'];
}
?>
<html>
<head>  
  <title>Edit Data</title>
</head>

<body>
  <a href="index.php">Home</a>
  <br/><br/>
  
  <form  method="post" action="edit.php">
    <table border="0">
      <tr> 
        <td>header1</td>
        <td><input type="text" name="header1" value="<?php echo $header1;?>"></td>
      </tr>
      <tr> 
        <td>para1</td>
        <td><input type="text" name="para1" value="<?php echo $para1;?>"></td>
      </tr>
      <tr> 
        <td>header2</td>
        <td><input type="text" name="header2" value="<?php echo $header2;?>"></td>
      </tr>
      <tr> 
        <td>para2</td>
        <td><input type="text" name="header2" value="<?php echo $para2;?>"></td>
      </tr>
      
      <tr>
        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
        <td><input type="submit" name="update" value="Update"></td>
      </tr>
    </table>
  </form>
</body>
</html>