<?php $page_title = 'Pref'; ?>
<?php 
  $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";

 require 'db_credentials.php'; 
   include("./nav.php");
 ?>

<?php 

  echo '<h2 id="title">Preferences</h2><br>';
 if(isset($_GET['updated'])){
            if($_GET["updated"] == "Success"){
                echo '<br><h3>yes yes, we changed it no worries </h3>';
            }
        }





$sql = "SELECT * FROM pref WHERE  ID = '1'";


   
   
    if (!$result = $db->query($sql)) {
	die ('There was an error running query[' . $connection->error . ']');}
	
	if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
		$axe1=$row["value"];
		$axe2=$row["Chunks"];
		
	echo '<form action="presub.php" method="post">
		Number of Columns: <input type ="number" name="alpha" min="1"  value='.$axe1.' required><br>
		Split Chunk Size: <input type ="number" name="hippo"" min="2" max="4" value='.$axe2.' required><br>
	
		<input type ="radio" id="1" name="words" value ="word" checked> 
		<label for "1"> Display words</label><br>    
		<input type ="radio" id="2" name="words" value ="word"> 
		<label for "2"> Display words</label><br>    
		<input type ="radio" id="3" name="words" value ="Both"> 
		<label for "3"> Display Both</label><br>  
		<input type ="radio" id="4" name="words" value ="Both"> 
		<label for "4"> Display Both</label><br>  
		<input type ="radio" id="5" name="words" value ="Both"> 
		<label for "5"> Display Both</label><br>  







<input type="submit" value="submit">
		</form>';
	}
	}
   ?>
