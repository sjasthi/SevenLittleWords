<?php $page_title = ' generate puzzle'; ?>
<?php 
  $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";
  require 'db_credentials.php'; 
    include("./nav.php");
	//error_reporting(0);
	include ("puzzlemaker.php");
?>

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
} else {     $word_id = $_POST['ident'];
    $sql = "SELECT * FROM words
            WHERE word_id = '$word_id'";
    

	
}

    if (!$result = $db->query($sql)) {
        die ('There was an error running query[' . $connection->error . ']');
  

} $nochars=3;
  echo '<h2 id="title">Generate Quote</h2><br>';
$uninpo=1;
	$sqx = "SELECT * FROM pref WHERE id = '$uninpo'";
	$result2 = mysqli_query($db,$sqx);
	
	while ($row2 =mysqli_fetch_array($result2))
	{ 
	$nochars=$row2["Chunks"];
		
	}
	

	
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
	
	$quoteline = $row["word"];
	
	} 
}
SplitMaker($quoteline,$nochars);


?>