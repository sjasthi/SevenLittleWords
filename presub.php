<?php

include_once 'db_credentials.php'; 



$id=1;

    $colnum = mysqli_real_escape_string($db, $_POST['alpha']);
	  $display =mysqli_real_escape_string($db, $_POST['words']);
    $chunk =mysqli_real_escape_string($db, $_POST['hippo']);
   
    
    
       
    
     
            
                 $sql = "UPDATE pref
                  
				  SET 
				   value = '$colnum',
                
					Chunks = '$chunk',
					display ='$display'
                  WHERE id = '$id'"
				 ;

                mysqli_query($db, $sql);
                
                 header('location: preferences.php?updated=Success');
                




?>