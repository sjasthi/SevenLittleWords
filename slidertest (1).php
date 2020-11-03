<?php $page_title = ' Split Quote';?>
<?php
  $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";
  require 'db_credentials.php';
    include("./nav.php");
	//error_reporting(0);
	include ("puzzlemaker.php");
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>

<?php
include_once 'db_credentials.php';


  $sql = "SELECT * FROM quote_table
			WHERE id = '-1'";

			$db->set_charset("utf8");

$touched=isset($_POST['ident']);
if (!$touched) {
	echo 'You need to select an entry. Go back and try again. <br>';

	?>
		  <button><a class="btn btn-sm" href="list.php">Go back</a></button>
	<?php
} else {     $id = $_POST['ident'];
    $sql = "SELECT quote FROM quote_table
            WHERE id = '$id'";



}    if (!$result = $db->query($sql)) {
        die ('There was an error running query[' . $connection->error . ']');



}

$nochars=2;
 echo '<h2 id="title">Slider</h2><br>';
$uninpo=1;
 $sqx = "SELECT * FROM pref WHERE id = '$uninpo'";
 $result2 = mysqli_query($db,$sqx);

 while ($row2 =mysqli_fetch_array($result2)){
   $nochars=$row2["Chunks"];

 } if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()){

 $quoteline = $row["quote"];


 } }
$gridArray = [];
$gridArray = SliderMaker($quoteline,$nochars);
// print_r($gridArray);
$shuffledArray = $gridArray;
//print_r($shuffledArray);
shuffle($shuffledArray);
// print_r($shuffledArray);
?>


<html>
<body>
<head>
<title>Quote Slider</title>
  <style>


  .grid-container {
    display: grid;
    grid-template-columns: auto auto auto auto auto auto;
    grid-gap: 10px;
    background-color: #2196F3;
    padding: 10px;
    height: 50%;
    width: 35em;
    margin: auto;
    border: 2px solid black;
  }

  .grid-container > div {
    background-color: rgba(255, 255, 255, 0.8);
    text-align: center;
    padding: 20px 0;
    font-size: 30px;
    border: 1px solid black;
  }

  .button{
    background-color: #33A3C8;
    border: none;
    color: white;
    padding: 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 14px;
  }

  .button:hover{
    background-color: #008CBA;
  }
  </style>
  
</head>


<div class="grid-container" id="sliderGame">
 


</div>
<br>

<div style="text-align: center;">
  
  <label for="Quote" style="text-align: center;">Click sumbit to see if you are correct: </label>
  <button class="button" type="submit" value="Submit" onclick="checkCorrect()" >Submit</button>
</div>

<p id="demo" style="text-align: center;"></p>

<script>
  function quoteFunction(){
    //Pop up prompt that asks the user to enter a phrase between 10 and 70 characters.

    var x = "<?php echo $quoteline ?>";
    alert(x.length);
    //console.log(x);
    //x should not be null
    if (x != null) {
      y = x;
      /*the number of tiles will be half the length of the phrase entered + 1 for the additional tile.  In case the number is a decimal,
      the math cieling function will raise the number.  */
      tiles = Math.ceil(y.length/2 + 1);
      //if the tiles are not divisible by 2 3, or 5; then add one to the tiles.  This is in case tiles = 7 or another odd number.
      // if(tiles % 2 !== 0 && tiles % 3 !== 0 && tiles % 5 !== 0){
      //   tiles += 1;
      // }
      alert(Math.ceil(y.length/2 + 1));
      alert(tiles);
      if (tiles == 5 || tiles == 7 || tiles == 11 || tiles == 13 || tiles == 17 || tiles == 19 || tiles == 23 || tiles == 27 || tiles == 29 || tiles == 34) {
        tiles += 1;
      }
      else if (tiles == 22 || tiles == 26 || tiles == 33) {
        alert("hello world!");
        tiles += 2;
      }
      else if (tiles == 32) {
        tiles += 3;
      }
      else if (tiles == 31) {
          tiles += 4;
      }
      else {
        tiles = tiles;
      }
      alert(tiles);

      //the tiles will determine the number of columns for the slider grid.
      if(tiles == 6 || tiles == 8 || tiles == 10 || tiles == 14){
        columns = 2;
      }else if(tiles == 9 || tiles == 12 || tiles == 15 || tiles == 18 || tiles == 21 ){
        columns = 3;
      }else if(tiles == 16 || tiles == 20 || tiles == 22 || tiles == 24 || tiles == 26 || tiles == 27 || tiles == 28){
        columns = 4;
      }else if(tiles == 25 || tiles == 30 || tiles == 35){
        columns = 5
      }else if(tiles == 32 || tiles == 33 || tiles == 34 || tiles == 36){
        columns = 6;
      }else{
        document.getElementById("demo").innerHTML = "Number was too high or too low please submit a quote between 10 and 70 characters";
      }
      autos = "auto ";
      //iterate through the number of columns to add autos to the count.
      for(i=1; i < columns; i++){
        autos += "auto ";
      }
      //the style for the grid template columns will be adjusted to the count of the autos.
      document.getElementById("sliderGame").style.gridTemplateColumns = autos;


    //console.log(y);




    var gridArray = <?php echo json_encode($gridArray); ?>;
    

      //set the gA grid to the exact same as the gridArray without copying it from the same location.
      gA = <?php echo json_encode($shuffledArray); ?>;
        alert(gA.length);
        
      var list = document.getElementById("sliderGame");
      //remove all of the tiles from the current grid.
      while (list.hasChildNodes()) {
        list.removeChild(list.firstChild);
      }

      //loop will create div elements with the id of slider + the number in the sequence.  Each div will have an onclick that will call the switchTile function
      for(z = 0; z < tiles - 1; z++){
        var para = document.createElement("div");
        num = z.toString();
        para.id = "slider" + num;
        identity = "slider" + num;
        para.addEventListener("click", function() {switchTile(this.id)});
        var node = document.createTextNode(gA[z]);
        para.appendChild(node);
        var element = document.getElementById("sliderGame");
        element.appendChild(para);
      }
      //creation of the empty tile to be moved.
      var empty = document.createElement("div");
      empty.id = "emptyTile";
      empty.style.visibility = "hidden";
      identity = "emptyTile";
      empty.addEventListener("click", function() {switchTile(this.id)});

      var element = document.getElementById("sliderGame");
      element.appendChild(empty);


  }else{
      document.getElementById("demo").innerHTML = "Please enter a phrase.  Do not leave section blank!";
  }
  }
  //function will swap the empty tile with the current tile clicked.
  function switchTile(identity){
    tileToMove = document.getElementById(identity);
    text = tileToMove.innerHTML;
    tileToMove.innerHTML = "";
    tileToMove.style.visibility = "hidden";
    emptyTile = document.getElementById("emptyTile");
    emptyTile.innerHTML = text;
    emptyTile.style.visibility = "visible";
    tileToMove.id = "emptyTile";
    emptyTile.id = identity;

    //select all of the div elements within the sliderGame grid.
    var para = document.getElementById("sliderGame").querySelectorAll("div");

    for(z = 0; z < gA.length; z++){
        index = para[z].innerHTML;
        gA[z] = index;
      }
      var count = 0;
      

    }

    function checkCorrect(){
      //if the count is the same then the puzzle is a match and completed.
      gridArray = <?php echo json_encode($gridArray); ?>;

      

    for (var i = 0, l=gA.length; i < l; i++) {

      if (gA[i] != gridArray[i]) {
          // Warning - two different object instances will never be equal: {x:20} != {x:20}
        document.getElementById("demo").innerHTML = "Pleas Try Again!";
      }
      else {
        document.getElementById("demo").innerHTML = "You Win!!!!";
      }
    }

      if(gA === gridArray){
        document.getElementById("demo").innerHTML = "You Win!!!!";

      
      }
  }

  quoteFunction();

</script>

</body>
</html>
