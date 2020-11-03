modify.php
<html>
<head>
<title> Modify </title>
</head>
<style>
	body{
		background-color: #cococo;
      }
      input{
      	width: 50%;
      	height: 5%;
      	border-radius: 1px;
      	border-radius: 07px
      	padding: 8px 15px 8px 15px;
      	margin: 10px 0px 15px 0px;
      	box-shadow: 1px 1px 2px 1px grey;
      
      }

    #title {
        text-align: center;
        color: blue;
         background-color: #FF5733;
    }
    thead input {
        width: 100%;
    }
    .thumbnailSize{
        height: 100px;
        width: 100px;
        transition:transform 0.25s ease;
    }
    .thumbnailSize:hover {
        -webkit-transform:scale(3.5);
        transform:scale(3.5);
    }
</style>
<body>
	<center>

<div class="right-content">
    <div class="container-fluid">

<form action= "" method= "POST">
	title:<input type = "text" name= "word_id" placeholder="Enter word_ID"/><br/>
	<input type = "text" name= "title" placeholder="Enter title"/><br/>
	<input type = "text" name= "subtitle" placeholder="Enter subtitle"/><br/>
	<input type = "text" name= "word1" placeholder="Enter word1"/><br/>
	<input type = "text" name= "word2" placeholder="Enter word2"/><br/>
	<input type = "text" name= "word3" placeholder="Enter word3"/><br/>
	<input type = "text" name= "word4" placeholder="Enter word4"/><br/>
	<input type = "text" name= "word5" placeholder="Enter word5"/><br/>
	<input type = "text" name= "word6" placeholder="Enter word6"/><br/>
	<input type = "text" name= "word7" placeholder="Enter word7"/><br/>
	<input type = "text" name= "clue1" placeholder="Enter clue1"/><br/>
	<input type = "text" name= "clue2" placeholder="Enter clue2"/><br/>
	<input type = "text" name= "clue3" placeholder="Enter clue3"/><br/>
	<input type = "text" name= "clue4" placeholder="Enter clue4"/><br/>
	<input type = "text" name= "clue5" placeholder="Enter clue5"/><br/>
	<input type = "text" name= "clue6" placeholder="Enter clue6"/><br/>
  <input type = "text" name= "clue7" placeholder="Enter clue7"/><br/>

	<input type= "submit" name="update" value="modify data"/>
</form>
</center>
</body>
</html>

<?php 
    $connection= mysqli_connect("localhost","root");
    $db = mysqli_select_db($connection,'sevenlittlewords');

    if(isset($_POST['update']))
    {
      $id = $_POST['word_id'];

     $query =  "UPDATE 'words' SET title= '$_POST[title]',subtitle= '$_POST[subtitle]',word1= '$_POST[word1]',word2= '$_POST[word2]',word3= '$_POST[word3]',word4= '$_POST[word4]',word5= '$_POST[word5]',word6= '$_POST[word6]',word7= '$_POST[word7]',clue1= '$_POST[clue1]',clue2= '$_POST[clue2]',clue3= '$_POST[clue3]',clue4= '$_POST[clue4]',clue5= '$_POST[clue5]',clue6= '$_POST[clue6]',clue7= '$_POST[clue7]' where word_id ='$_POST[word_id]' ";
      $query_run = mysqli_query($connection,$query);

      if($query_run)

      {
       echo '<script type= "text/javascript"> alert("data modified") </script>';
    }
    else

    {
  
     echo '<script type= "text/javascript"> alert("data not modified") </script>';
    }

}

 ?>


