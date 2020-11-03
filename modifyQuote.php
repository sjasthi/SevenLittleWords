
<php $page_title = ' Modify words'; ?>
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
  $sql = "SELECT * FROM quotes_db
            WHERE id = -1";
			$sleep=true;
$touched=isset($_POST['ident']);
if (!$touched) {
	echo "You need to select an entry.";
      ?>
		  <button><a class="btn btn-sm" href="list.php">Go back</a></button>
	<?php
		
		
} else {     $id = $_POST['ident'];
    $sql = "SELECT * FROM words
            WHERE id = '$id'";
    

	
}
if ($touched) {
    if (!$data = $db->query($sql)) {
        die ('There was an error running query[' . $connection->error . ']');
    }//end if
//end if

if ($data->num_rows > 0) {
    // output data of each row
	

    while($row = $result->fetch_assoc()) {

    
    
      


      echo '<form action="modify.php" method="POST" enctype="multipart/form-data">
      <br>
     <h2 id="title">Modify words</h2><br>
      
           <table>
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

<?php
include_once 'db_credentials.php';

if (isset($_POST['ID'])){

  $update_id = mysqli_real_escape_string($db, $_POST['ID']);
  $word_1 = mysqli_real_escape_string($db, $_POST['word1']);
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $subtitle = mysqli_real_escape_string($db, $_POST['subtitle']);
  $word1 = mysqli_real_escape_string($db, $_POST['word1']);
  $word2 = mysqli_real_escape_string($db, $_POST['word2']);
  $word3 = mysqli_real_escape_string($db, $_POST['word3']);
  $word4 = mysqli_real_escape_string($db, $_POST['word4']);
  $word5 = mysqli_real_escape_string($db, $_POST['word5']);
  $word6 = mysqli_real_escape_string($db, $_POST['word6']);
  // $upper_limit = mysqli_real_escape_string($db, $_POST['upper_limit']);
  // $contains_demo = mysqli_real_escape_string($db, $_POST['contains_demo']);
  // $demo_lead = mysqli_real_escape_string($db, $_POST['demo_lead']);
  // $is_optional = mysqli_real_escape_string($db, $_POST['is_optional']);
  // $is_safe = mysqli_real_escape_string($db, $_POST['is_safe']);
  // $safe_link = mysqli_real_escape_string($db, $_POST['safe_link']);
  // $status = mysqli_real_escape_string($db, $_POST['status']);
  // $comments = mysqli_real_escape_string($db, $_POST['comments']);

$sql = "UPDATE words
        SET id = 'update_id',
          word_id = '$word_id',
            title = '$title',
            subtitle = '$subtitle',
            word1 = '$word1',
            -- facilitator = '$facilitator',
            -- required_attendees = '$required_attendees',
            -- optional_attendees = '$optional_attendees',
            -- cadence = '$cadence',
            -- lower_limit = '$lower_limit',
            -- upper_limit = '$upper_limit',
            -- contains_demo = '$contains_demo',
            -- demo_lead = '$demo_lead',
            -- is_optional = '$is_optional',
            -- is_safe = '$is_safe',
            -- safe_link = '$safe_link',
            -- status = '$status',
            -- comments = '$comments'

          WHERE id = '$update_id'";

       mysqli_query($db, $sql);
       header('location: list(varname).php?CeremonyUpdated=Success');
}//end if
?>





