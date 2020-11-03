<?php $page_title = ' Modify Word'; ?>
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
$db->set_charset("utf8");
  $sql = "SELECT * FROM words
            WHERE word_id = -1";
      $sleep=true;
$touched=isset($_POST['ident']);
if (!$touched) {
  echo "You need to select an entry.";
      ?>
      <button><a class="btn btn-sm" href="list.php">Go back</a></button>
  <?php
    
    
} else {     $word_id = $_POST['ident'];
    $sql = "SELECT * FROM words
            WHERE word_id = '$word_id'";
    

  
}
if ($touched) {
    if (!$result = $db->query($sql)) {
        die ('There was an error running query[' . $connection->error . ']');
    }//end if
//end if

if ($result->num_rows > 0) {
    // output data of each row
  

    while($row = $result->fetch_assoc()) {

// if ($result->num_rows > 0) {
    // output data of each row
  

    // while($row = $result->fetch_assoc()) {

    echo '<form action="modifyTheWord.php" method="POST" enctype="multipart/form-data">
      <br>
     <h2 word_id="title">Modify Word</h2><br>


       <table>

       <tr>
       <td style="width:100px>   <label for="word_ida">Id</label> </td>
       <td> <input type="text" class="form-control" name="word_id" value="'.$row["word_id"].'"  maxlength="255" readonly></td>
      </tr>
      
    <tr>
        <td style="width:100px>  <label for="title">Title</label></td>
     <td>    <input type="text" class="form-control" name="title" value="'.$row["title"].'"  maxlength="255"  required></td>
  </tr>
      
      <tr>
        <td style="width:100px>  <label for="subtitle">subtitle</label></td>
      <td>  <input type="text" class="form-control" name="subtitle" value="'.$row["subtitle"].'"  maxlength="255" required></td>
     </tr>
          
   <tr>
       <td style="width:100px>   <label for="word1">word1</label></td>
   <td>      <input type="text" class="form-control" name="word1" value="'.$row["word1"].'"  maxlength="255" size="200" required></td>
     </tr>

     <tr>
        <td style="width:100px>  <label for="word2">word2</label></td>
    <td>     <input type="text" class="form-control" name="word2" value="'.$row["word2"].'"  maxlength="255" required></td>
     </tr>

     <tr>
        <td style="width:100px>  <label for="word3">word3</label></td>
    <td>     <input type="text" class="form-control" name="word3" value="'.$row["word3"].'"  maxlength="255" required></td>
     </tr>

     <tr>
        <td style="width:100px>  <label for="word4">word4</label></td>
    <td>     <input type="text" class="form-control" name="word4" value="'.$row["word4"].'"  maxlength="255" required></td>
     </tr>

    <tr>
        <td style="width:100px>  <label for="word5">word5</label></td>
    <td>     <input type="text" class="form-control" name="word5" value="'.$row["word5"].'"  maxlength="255" required></td>
     </tr>

     <tr>
        <td style="width:100px>  <label for="word6">word6</label></td>
    <td>     <input type="text" class="form-control" name="word6" value="'.$row["word6"].'"  maxlength="255" required></td>
     </tr>
    <tr>
        <td style="width:100px>  <label for="word7">word7</label></td>
    <td>     <input type="text" class="form-control" name="word7" value="'.$row["word7"].'"  maxlength="255" required></td>
     </tr>

    
     <tr>
        <td style="width:100px>  <label for="clue1">clue1</label></td>
    <td>     <input type="text" class="form-control" name="clue1" value="'.$row["clue1"].'"  maxlength="255" required></td>
     </tr>

     <tr>
        <td style="width:100px>  <label for="clue2">clue2</label></td>
    <td>     <input type="text" class="form-control" name="clue2" value="'.$row["clue2"].'"  maxlength="255" required></td>
     </tr>

     <tr>
        <td style="width:100px>  <label for="clue3">clue3</label></td>
    <td>     <input type="text" class="form-control" name="clue3" value="'.$row["clue3"].'"  maxlength="255" required></td>
     </tr>

     <tr>
        <td style="width:100px>  <label for="clue4">clue4</label></td>
    <td>     <input type="text" class="form-control" name="clue4" value="'.$row["clue4"].'"  maxlength="255" required></td>
     </tr>

     <tr>
        <td style="width:100px>  <label for="clue5">clue5</label></td>
    <td>     <input type="text" class="form-control" name="clue5" value="'.$row["clue5"].'"  maxlength="255" required></td>
     </tr>

     <tr>
        <td style="width:100px>  <label for="clue6">clue6</label></td>
    <td>     <input type="text" class="form-control" name="clue6" value="'.$row["clue6"].'"  maxlength="255" required></td>
     </tr>

     <tr>
        <td style="width:100px>  <label for="clue7">clue7</label></td>
    <td>     <input type="text" class="form-control" name="clue7" value="'.$row["clue7"].'"  maxlength="255" required></td>
     </tr>

     </table>

      <br>
      <div class="text-left">
          <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Modify Question</button>
      </div>
      <br> <br>
      
      </form>';
    
    }//end while
}//end if
}
else {
    echo "0 results";
}//end else

?>
</div>








      
        <!--    <table>
       <tr>
       <td style="width:100px>   <label for="ida">Id</label> </td>
       <td> <input type="text" class="form-control" name="id" value="'.$row["id"].'"  maxlength="255" readonly></td>
      </tr>
      
    <tr>
        <td style="width:100px>  <label for="topic">Topic</label></td>
     <td>    <input type="text" class="form-control" name="topic" value="'.$row["topic"].'"  maxlength="255"  required></td>
  </tr>
      
      <tr>
        <td style="width:100px>  <label for="author">author</label></td>
    <td>     <input type="text" class="form-control" name="author" value="'.$row["author"].'"  maxlength="255" required></td>
     </tr>
          
   <tr>
       <td style="width:100px>   <label for="quote">quote</label></td>
   <td>      <input type="text" class="form-control" name="quote" value="'.$row["quote"].'"  maxlength="255" size="200"  required></td>
     </tr>

     
          
    </table>

      <br>
      <div class="text-left">
          <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Modify Question</button>
      </div>
      <br> <br>
      
      </form>';
    
    }//end while
}//end if
}
else {
    echo "0 results";
}//end else

?>

</div>




 -->