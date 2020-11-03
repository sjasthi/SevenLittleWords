<!DOCTYPE html>
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
  <div style="text-align: center;">
  <h1>Quote Slider</h1>
  <i style="margin: 5px;">Enter your quote below and then have fun!</i>
  </div>
  <br>
</head>

<div class="grid-container" id="sliderGame">
  <div class="sliders">Hel</div>
  <div class="sliders">lo </div>
  <div class="sliders">Wor</div>
  <div class="sliders">ld </div>
  <div class="sliders">!  </div>
  <div class="sliders">We </div>
  <div class="sliders">are</div>
  <div class="sliders">Tea</div>
  <div class="sliders">m A</div>
  <div class="sliders">lli</div>
  <div class="sliders">gat</div>
  <div class="sliders">ors</div>
  <div class="sliders">!  </div>





</div>


<br>


<div style="text-align: center;">
 <!--  <label for="Quote" style="text-align: center;">Enter Quote:</label> -->
  <!-- <textarea style="vertical-align: top;" id="Quote" name="quote" rows="2" cols="50"></textarea> -->

  <button class="button" type="submit" value="Submit" onclick="quoteFunction()" >Enter quote</button>
</div>

<p id="demo" style="text-align: center;"></p>

<script>
  function quoteFunction(){
    //Pop up prompt that asks the user to enter a phrase between 10 and 70 characters.
    var x = prompt("Please enter a quote between 10 and 70 characters", "Hello World");
    //x should not be null
    if (x != null) {
      y = x;
      /*the number of tiles will be half the length of the phrase entered + 1 for the additional tile.  In case the number is a decimal,
      the math cieling function will raise the number.  */
      tiles = Math.ceil(y.length/2 + 1);
      //if the tiles are not divisible by 2 3, or 5; then add one to the tiles.  This is in case tiles = 7 or another odd number.  
      if(tiles % 2 !== 0 && tiles % 3 !== 0 && tiles % 5 !== 0){
        tiles += 1;
      }      
      //the tiles will determine the number of columns for the slider grid.  
      if(tiles == 6 || tiles == 8 || tiles == 10 || tiles == 14){
        columns = 2;
      }else if(tiles == 9 || tiles == 12 || tiles == 15 || tiles == 18 || tiles == 21){
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
      
      gridArray = [];
      index = 0;
      iterative = Math.ceil(y.length/2);
      //loop will separate phrase into substrings of two character length.
      for(n=0; n < iterative; n++){ 
        ending = index + 2;
        if(y.length < ending){
          final = y.substring(index) + " ";
          gridArray[n] = final;
        }else {
          gridArray[n] = y.substring(index, ending)
          index = ending;
        }
        
      }  
      //will add a blank space if the grid needs one more tile to satisfy the grid.  
      if(gridArray.length < tiles - 1){
        gridArray.push("  ");
      }

      //set the gA grid to the exact same as the gridArray without copying it from the same location.
      gA = [...gridArray];
      //freeze the gridArray to keep the original phrase.
      Object.freeze(gridArray);
      //loop will randomize the gA array.  
      for(t = gA.length - 1; t > 0; t--){
        const j = Math.floor(Math.random() * i);
        const temp = gA[t];
        gA[t] = gA[j];
        gA[j] = temp;
      }

      //list will be assigned to the grid which is id sliderGame.  
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
      for(run = 0; run < gA.length; run++){
        //if the gA and gridArray have the same match at the same index then add to the count.  
        if(gA[run] == gridArray[run]){
          count += 1;
        }
      }
      //if the count is the same then the puzzle is a match and completed.  
      if(count == gA.length){
        document.getElementById("demo").innerHTML = "You Win!!!!";

      }
  }
</script>

<form action="slider.php" style="text-align: center;">

 <button onclick="myFunction()">Press me</button>
      

        </script>

       </form>



      </body>
</html>


