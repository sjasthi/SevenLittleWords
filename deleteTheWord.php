<?php

include_once 'db_credentials.php';

if (isset($_POST['word_id'])){

	 // $delete_id = $_GET['id'];

    $word_id = mysqli_real_escape_string($db, $_POST['word_id']);
 

   

    $sql = "DELETE FROM words
            WHERE word_id = '$word_id'";

    mysqli_query($db, $sql);
    header('location: list.php?deleted=Success');
}//end if
?>

