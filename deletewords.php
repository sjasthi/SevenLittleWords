<?php $page_title = 'Delete your quote'; ?>
<?php 
     $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";
  require 'db_credentials.php'; 
    include("./nav.php");

?>
<div class="container">
<style>#title {text-align: center; color: darkgoldenrod;}</style>
<?php
include_once 'db_credentials.php';


  $sql = "SELECT * FROM words
            WHERE word_id = '-1'";

$db->set_charset("utf8");

$touched=isset($_POST['ident']);
if (!$touched) {
  echo 'You need to select an entry. Go back and try again. <br>';
  
  ?>
      <button><a class="btn btn-sm" href="list.php">Go back</a></button>
  <?php
} else {     $id = $_POST['ident'];
    $sql = "SELECT * FROM words
            WHERE word_id = '$id'";
    

  
}

    if (!$result = $db->query($sql)) {
        die ('There was an error running query[' . $connection->error . ']');
    }//end if


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {





        echo '<form action="deleteTheWord.php" method="POST" >
    <br>
    <h3 id="title">Delete Words</h3><br>
   
     <table>
      <tr>
    <td style="width:100px> <label for="category">ID</label> </td>
     <td><input type="text" class="form-control" name="word_id" value="'.$row["word_id"].'"  maxlength="4" readonly> </td>
        </tr>
    <tr>
     <td style="width:100px> <label for="category">Title</label> </td>
      <td><input type="text" class="form-control" name="title" value="'.$row["title"].'"  maxlength="50" size="50" readonly></td>
   </tr>
        
      <tr>
    <td style="width:100px>  <label for="name">Subtitle</label></td>
    <td>  <input type="text" class="form-control" name="subtitle" value="'.$row["subtitle"].'"  maxlength="50" size="50" readonly></td>
   </tr>
    
        
  <tr>
      <td style="width:100px><label for="level">Word1</label></td>
     <td> <input type="text" class="form-control" name="word1" value="'.$row["word1"].'"  maxlength="300" size="200"  readonly></td>
 </tr>

 <tr>
    <td style="width:100px>  <label for="name">Word2</label></td>
    <td>  <input type="text" class="form-control" name="word2" value="'.$row["word2"].'"  maxlength="50" size="50" readonly></td>
   </tr>

   <tr>
    <td style="width:100px>  <label for="name">Word3</label></td>
    <td>  <input type="text" class="form-control" name="word3" value="'.$row["word3"].'"  maxlength="50" size="50" readonly></td>
   </tr>

   <tr>
    <td style="width:100px>  <label for="name">Word4</label></td>
    <td>  <input type="text" class="form-control" name="word4" value="'.$row["word4"].'"  maxlength="50" size="50" readonly></td>
   </tr>

   <tr>
    <td style="width:100px>  <label for="name">Word5</label></td>
    <td>  <input type="text" class="form-control" name="word5" value="'.$row["word5"].'"  maxlength="50" size="50" readonly></td>
   </tr>

   <tr>
    <td style="width:100px>  <label for="name">Word6</label></td>
    <td>  <input type="text" class="form-control" name="word6" value="'.$row["word6"].'"  maxlength="50" size="50" readonly></td>
   </tr>

   <tr>
    <td style="width:100px>  <label for="name">Word7</label></td>
    <td>  <input type="text" class="form-control" name="word7" value="'.$row["word7"].'"  maxlength="50" size="50" readonly></td>
   </tr>

   <tr>
    <td style="width:100px>  <label for="name">Clue1</label></td>
    <td>  <input type="text" class="form-control" name="clue1" value="'.$row["clue1"].'"  maxlength="50" size="50" readonly></td>
   </tr>

   <tr>
    <td style="width:100px>  <label for="name">Clue2</label></td>
    <td>  <input type="text" class="form-control" name="clue2" value="'.$row["clue2"].'"  maxlength="50" size="50" readonly></td>
   </tr>

   <tr>
    <td style="width:100px>  <label for="name">Clue3</label></td>
    <td>  <input type="text" class="form-control" name="clue3" value="'.$row["clue3"].'"  maxlength="50" size="50" readonly></td>
   </tr>

    <tr>
    <td style="width:100px>  <label for="name">Clue4</label></td>
    <td>  <input type="text" class="form-control" name="clue4" value="'.$row["clue4"].'"  maxlength="50" size="50" readonly></td>
   </tr>

    <tr>
    <td style="width:100px>  <label for="name">Clue5</label></td>
    <td>  <input type="text" class="form-control" name="clue5" value="'.$row["clue5"].'"  maxlength="50" size="50" readonly></td>
   </tr>

    <tr>
    <td style="width:100px>  <label for="name">Clue6</label></td>
    <td>  <input type="text" class="form-control" name="clue6" value="'.$row["clue6"].'"  maxlength="50" size="50" readonly></td>
   </tr>

    <tr>
    <td style="width:100px>  <label for="name">Clue7</label></td>
    <td>  <input type="text" class="form-control" name="clue7" value="'.$row["clue7"].'"  maxlength="50" size="50" readonly></td>
   </tr>
    </table>    
  
           
    <br>
     <div align="center" class="text-left">
        <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center"> Delete word</button>
    </div>
    <br> <br>
    
    </form>';

    }//end while
}//end if
else {
    echo "0 results";
}//end else

?>

</div


