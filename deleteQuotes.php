<php $page_title = ' delete records'; ?>
<?php 
  $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";
 require 'db_credentials.php'; 
    include("./nav.php");
 ?>


<!DOCTYPE html>
<html>
<body>
<head> 
<title>DELETE</title>

 <style>
  body{
    background: -color: #FFE4C4;

  }
input{
  width: 40%;
  height: 10%
  border: 2px;
  border-radius:0.8;
  padding: 10px 15px 8px 20px;
}
  
  

</style>
  <div style="text-align: center;">
  <h1>deleteRecords</h1>
  <i style="margin: 5px;">delete Records</i>
  </div>
  <br>

<center>

  <form>
    <form action = "method = POST">
    <input type = "text" name = "id" placeholder=" Enter ID"/><br/>
     <input type = "text" name = "word_id" placeholder=" Enter word_id"/><br/>
      <input type = "text" name = "Title1" placeholder=" Enter Title1"/><br/>
       <input type = "text" name = "Title2" placeholder=" Enter Title2"/><br/>
        <input type = "text" name = "Tile3" placeholder=" Enter Title3"/><br/>
         <input type = "text" name = "Title4" placeholder=" Enter Title4"/><br/>
          <input type = "text" name = "Title5" placeholder=" Enter Title5"/><br/>
           <!-- <input type = "text" name = "word4" placeholder=" Enter word4"/><br/>
            <input type = "text" name = "word5" placeholder=" Enter word5"/><br/>
             <input type = "text" name = "word6" placeholder=" Enter word6"/><br/>
              <input type = "text" name = "word7" placeholder=" Enter word7"/><br/>
              <input type = "text" name = "clue1" placeholder=" Enter clue1"/><br/>
              <input type = "text" name = "clue2" placeholder=" Enter clue2"/><br/>
              <input type = "text" name = "clue3" placeholder=" Enter clue3"/><br/>
              <input type = "text" name = "clue4" placeholder=" Enter clue4"/><br/>
              <input type = "text" name = "clue5" placeholder=" Enter clue5"/><br/>
              <input type = "text" name = "clue6" placeholder=" Enter clue6"/><br/>
              <input type = "text" name = "clue7" placeholder=" Enter clue7"/><br/>
              
 -->

    <input type="submit" name="modify"  value = "DELETE RECORDS"/>

 </form>
</center>

<?php
$connection = mysqli_connection("localhost,", "root","");
$db = mysqli_select_db($connection,'sevenlittlewords');

if(isset($_POST['modify']))
{
  $id = $POST['id'];


$query ="modify 'words' SET Title1 = '$_POST[Title1]',Title2 = '$_POST[Title2]', Title3 = '$_POST[Title3]', Title4 = '$_POST[Title4]', Title5 = '$_POST[Title5]'where id = '$_POST[id]'";
  $query_run = mysqli_query($connection, $query);

  if($query_num)
{
   echo '<script type = "text/javascript"> alert("Data modified") </script>';
}
else

   echo '<script type = "text/javascript"> alert("Data not modified") </script>';
}
?>

