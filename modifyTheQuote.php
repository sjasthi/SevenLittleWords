<!-- <?php

include_once 'db_credentials.php'; 

if (isset($_POST['id'])){

    $id = mysqli_real_escape_string($db, $_POST['id']);
    $word_id = mysqli_real_escape_string($db, $_POST['word_id']);
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $subtitle = mysqli_real_escape_string($db, $_POST['subtitle']);
    
    
                 $sql = "UPDATE words
                  
                  SET  word_id = '$word_id',
                   title = '$title',
                    subtitle = '$subtitle'
                  WHERE id = '$id'"
                 ;

                mysqli_query($db, $sql);
                
                 header('location: list.php?updated=Success');
                
    
}//end if



?> -->





<!-- <?php

include_once 'db_credentials.php'; 

if (isset($_POST['id'])){

    $word_id = mysqli_real_escape_string($db, $_POST['word_id']);
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $sutitle = mysqli_real_escape_string($db, $_POST['sutitle']);
    $word1 = mysqli_real_escape_string($db, $_POST['word1']);
    
    
       
    
    
     
            
                 $sql = "UPDATAE words
                  
				  SET  word_id = '$word_id',
				   title = '$title',
                    subtitle = '$subtitle'
                  WHERE id = '$id'"
				 ;

                mysqli_query($db, $sql);

                 header('location: index.php?updated=Success');
                
                
                
    
}//end if



?> -->