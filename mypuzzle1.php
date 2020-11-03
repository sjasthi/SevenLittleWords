<?php $page_title = ' Generate puzzle'; ?>
<?php 
  $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";
  require 'db_credentials.php'; 

    include("./nav.php");
	//error_reporting(0);
	include ("puzzlemaker.php");
	// include ("words_to_tiles_splitter.php");

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
  echo '<h2 id="title">Generate puzzle</h2><br>';
$uninpo=1;
	$sqx = "SELECT * FROM pref WHERE id = '$uninpo'";
	$result2 = mysqli_query($db,$sqx);
    while($row2 = mysqli_fetch_array($result,MYSQLI_ASSOC))

	// while($row2 = mysqli_fetch_array($result2))

	
	// while ($row2 =mysqli_fetch_array($result2))

	{ 
	// $nochars=$row2["Chunks"];
		
	}
	// print_r($result);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {

		$quoteline = $row["quote"];

			# code...
		}
	}


	$get_word_one = "SELECT `word_one` FROM `words` WHERE `word_id` = $word_id";
    
    $word_results = mysqli_query($db, $get_word_one);
 
    if (mysqli_num_rows($word_results) > 0) {
        while ($row = mysqli_fetch_assoc($word_results)) {
            $words[] = $row;
        }
    }
    // print_r($words);
    $db_words = array();
    foreach ($words as $associative => $word){
        foreach($word as $w => $x){
            array_push($db_words, $x);
        }
        
    } 
	



 // SplitMaker($quoteline,$nochars);
 
 ?> 