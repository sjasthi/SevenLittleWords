<?php

include_once 'db_credentials.php'; 

if (isset($_POST['word_id'])){

    $word_id = mysqli_real_escape_string($db, $_POST['word_id']);
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $subtitle = mysqli_real_escape_string($db, $_POST['subtitle']);
    $word1 = mysqli_real_escape_string($db, $_POST['word1']);
    $word2 = mysqli_real_escape_string($db, $_POST['word2']);
    $word3 = mysqli_real_escape_string($db, $_POST['word3']);
    $word4 = mysqli_real_escape_string($db, $_POST['word4']);
    $word5 = mysqli_real_escape_string($db, $_POST['word5']);
    $word6 = mysqli_real_escape_string($db, $_POST['word6']);
    $word7 = mysqli_real_escape_string($db, $_POST['word7']);
    $clue1 = mysqli_real_escape_string($db, $_POST['clue1']);
    $clue2 = mysqli_real_escape_string($db, $_POST['clue2']);
    $clue3 = mysqli_real_escape_string($db, $_POST['clue3']);
    $clue4 = mysqli_real_escape_string($db, $_POST['clue4']);
    $clue5 = mysqli_real_escape_string($db, $_POST['clue5']);
    $clue6 = mysqli_real_escape_string($db, $_POST['clue6']);
    $clue7 = mysqli_real_escape_string($db, $_POST['clue7']);




    
    
     $sql = "UPDATE words
                  
     SET title = '$title',
     subtitle = '$subtitle',
     word1 = '$word1',
     word2 = '$word2',
     word3 = '$word3',
     word4 = '$word4',
     word5 = '$word5',
     word6 = '$word6',
     word7 = '$word7',
     clue1 = '$clue1',
     clue2 = '$clue2',
     clue3 = '$clue3',
     clue4 = '$clue4',
     clue5 = '$clue5',
     clue6 = '$clue6',
     clue7 = '$clue7'
     WHERE word_id = '$word_id'"
                 ;

                mysqli_query($db, $sql);
                
                 header('location: list.php?updated=Success');
                
    
}//end if



?>





