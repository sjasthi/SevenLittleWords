<?php $page_title = ' generate puzzle'; ?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

 .btn {
  background-color: LightGrey;
  border: none;
  color: black;
  font-size: 50px
  text-decoration-color: : black;
  width: 350px;
  height: 50px;
  padding: 20px 100px;
  cursor: pointer;
}
   
.grid-container {
    display: grid;
    grid-template-columns: repeat(4,1fr);
    /*grid-template-columns: auto auto auto auto auto auto auto;*/
    grid-gap: 3px;
    background-color: #D3D3D3;
    padding: 5px;
    height: 20%;
    width: 35em;
    margin: auto;
   /* border: 1px solid black;*/
  }

  .grid-container > div {
    background-color: rgba(255, 255, 255, 0.8);
    text-align: center;
    padding: 10px 0;
    font-size: 30px;
    border: 1px solid black;
  }

.icon-bar {
  height: 50px;
   width: 300px;
   background-color: DarkGrey;
   overflow: auto;
}
.icon-bar a {
   float: right;
   width: 30%;
  /* text-align: center;*/
   color: white;
   font-size: 30px;
}



   </style>

   
<?php 
  $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";
  require 'db_credentials.php'; 
    include("./nav.php");
  
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
    $sql = "SELECT word1,word2, word3, word4,word5,word6,word7 FROM words
    WHERE word_id = '$word_id'";
    
}

    if (!$result = $db->query($sql)) {
        die ('There was an error running query[' . $connection->error . ']');
  } 

if ($db->connect_error) {
        die ("There was an error running query " . $db->connect_error);
}


  $word_array = array();

  
 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){
    $word1 = $row['word1'];
    $word2 = $row['word2'];
    $word3 = $row['word3'];
    $word4 = $row['word4'];
    $word5 = $row['word5'];
    $word6 = $row['word6'];
    $word7 = $row['word7'];

} 
array_push($word_array, $word1);
array_push($word_array, $word2);
array_push($word_array, $word3);
array_push($word_array, $word4);
array_push($word_array, $word5);
array_push($word_array, $word6);
array_push($word_array, $word7);
}

$tiles = process_input($word_array);

?>





<body>

<div align = "center"> 
  <div style="width:350px; height:50px; background-color: #C0C0C0;">
  <div style="font-size: 50px;"text-color = black>7 Little Words</div>
  
 </div>
  
  <table>

  <?php



  $sql = "SELECT clue1,clue2,clue3,clue4,clue5,clue6,clue7 FROM words  WHERE word_id = $word_id";

    $result = run_sql($sql);
    $clues = [];
    $clue = $result->fetch_assoc();
    $clue1 = $clue['clue1'];
    array_push($clues,$clue1);
    $clue2 = $clue['clue2'];
    array_push($clues,$clue2);
    $clue3 = $clue['clue3'];
    array_push($clues,$clue3);
    $clue4 = $clue['clue4'];
    array_push($clues,$clue4);
    $clue5 = $clue['clue5'];
    array_push($clues,$clue5);
    $clue6 = $clue['clue6'];
    array_push($clues,$clue6);
    $clue7 = $clue['clue7'];
    array_push($clues,$clue7);

    $sql = "SELECT word1,word2,word3,word4,word5,word6,word7 FROM words  WHERE word_id = $word_id";

    $result = run_sql($sql);
    $words = [];
    $word = $result->fetch_assoc();
    $word1 = $word['word1'];
    array_push($words,$word1);
    $word2 = $word['word2'];
    array_push($words,$word2);
    $word3 = $word['word3'];
    array_push($words,$word3);
    $word4 = $word['word4'];
    array_push($words,$word4);
    $word5 = $word['word5'];
    array_push($words,$word5);
    $word6 = $word['word6'];
    array_push($words,$word6);
    $word7 = $word['word7'];
    array_push($words,$word7);

       for($i = 0; $i < count($clues); $i++){
        echo "<tr>"; 

    echo "<td>" . $clues[$i] . "</td>";                  

    echo "<td>" . strlen($words[$i]) . " letters</td>";

    echo"<tr>";
    }

?>



<script>
      
  function action(element){
    var test = document.getElementById("mybutton").innerHTML;
    element.style.visibility = 'hidden';
    var myclue = element.innerHTML;
     test += myclue; 
   document.getElementById("mybutton").innerHTML= test;
  }

   </script>

</table>
<!-- </table> -->
<div class="">
<button class="btn" id = "mybutton"></button><i class="fa fa-close"align= "right"></i>
<button class><img src="images/icon 2.jpg"></i></button>
<button class><img src="images/icon 1.jpg"></i></button>

</div>        

<div class="grid-container"id="word puzzle">


<?php
  for($i=0;$i< count($tiles); $i++){
  ?>
<div id = "cell<?php echo $i; ?>"><button id= "Button<?php echo $i; ?>" onClick="action(this);"><?php echo $tiles[$i] ?></button></div> 
  <?php 
  }
  ?>

</div>


<form>
         <button name = "button" value = "OK" type = "button" style="font-size: 30px; "text-color=black align="center" >How to Play</button>
      </form>

</body>
</html>

