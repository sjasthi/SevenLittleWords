<?php
   
include_once 'db_credentials.php';

   echo "HERE";

	   $mytitle = mysqli_real_escape_string($db,$_POST['mytitle']);
	  $mysubtitle = mysqli_real_escape_string($db,$_POST['mysubtitle']);
	  $MESSIC = mysqli_real_escape_string($db,$_POST['MESSIC']);
      $KAZIWI = mysqli_real_escape_string($db,$_POST['KAZIWI']);
      $SIMBA = mysqli_real_escape_string($db,$_POST['SIMBA']);
      $BARCA = mysqli_real_escape_string($db,$_POST['BARCA']);
      $LUCKD = mysqli_real_escape_string($db,$_POST['LUCKD']);
      $AUTONOMOUS = mysqli_real_escape_string($db,$_POST['AUTONOMOUS']);
      $BALLBOY = mysqli_real_escape_string($db,$_POST['BALLBOY']);
      $awesome  = mysqli_real_escape_string($db,$_POST['awesome']);
      $tsunami   = mysqli_real_escape_string($db,$_POST['tsunami']);
      $cool = mysqli_real_escape_string($db,$_POST['cool']);
      $readily  = mysqli_real_escape_string($db,$_POST['readily']);
      $regular  = mysqli_real_escape_string($db,$_POST['regular']);
      $verify = mysqli_real_escape_string($db,$_POST['verify']);
      $halleluya = mysqli_real_escape_string($db,$_POST['halleluya']);





	  $sql = "INSERT INTO words(title,subtitle,word1,word2,word3,word4,word5,word6,word7,clue1,clue2,clue3,clue4,clue5,clue6,clue7)
                VALUES ('$mytitle','$mysubtitle','$MESSIC','$KAZIWI','$SIMBA','$BARCA','$LUCKD','$AUTONOMOUS','$BALLBOY','$awesome','$tsunami ','$cool','$readily','regular','$verify','$halleluya')
                ";


   
	  
	    // $sql = "INSERT INTO quote_table(author,topic,quote)
     //            VALUES ('$man','$subject','$quoted')
     //            ";





               
                mysqli_query($db, $sql);
                header('location: list.php?create=Success');
				
				
				
?>






