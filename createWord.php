<?php $page_title = 'The Lttle Word'; ?>
<?php 
  $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";

 require 'db_credentials.php'; 
   include("./nav.php");
 ?>

<?php 
    $mysqli = NEW MySQLi('localhost','root','','sevenlittlewords');
   
?>

<?php

 echo "HERE";
    
      $man = mysqli_real_escape_string($db,$_POST['man']);
      $subject = mysqli_real_escape_string($db,$_POST['subject']);
      $worded = mysqli_real_escape_string($db,$_POST['worded']);
      
        $sql = "INSERT INTO words(title,subtitle,word1,word2,word3,word4,word5,word6,word7,clue1,clue2,clue3,clue4,clue5,clue6,clue7)
                VALUES ('$man','$subject','$worded')
                ";

                mysqli_query($db, $sql);
                header('location: list.php?create=Success');

  ?>



<form action="createWord.php" method="POST" enctype="multipart/form-data">
        <br>
        <h3 id="title">Create A Word</h3> <br>
        
        <table>
          
            <tr>
                <td style="width:100px">word_id:</td>
                <td><input type="text"  name="man" class="form-control" maxlength="50" size="50" required title="Please enter an author."></td>
            </tr>
            <tr>
                <td style="width:100px">title:</td>
                <td><input type="text"  name="subject" class="form-control" maxlength="50" size="50" required title="Please enter a topic."></td>
            </tr>
           
            <tr>
                <td style="width:100px">subtitle:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a quote."></td>
            </tr>

             <tr>
                <td style="width:100px">word1:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a quote."></td>
            </tr>

             <tr>
                <td style="width:100px">word2:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a quote."></td>
            </tr>

            <!--  <tr>
                <td style="width:100px">subtitle:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a quote."></td>
            </tr>

             <tr>
                <td style="width:100px">subtitle:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a quote."></td>
            </tr>

             <tr>
                <td style="width:100px">subtitle:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a quote."></td>
            </tr>

             <tr>
                <td style="width:100px">subtitle:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a quote."></td>
            </tr>

             <tr>
                <td style="width:100px">subtitle:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a quote."></td>
            </tr> -->
         
          
        </table>

        <br><br>
        <div align="center" class="text-left">
            <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">createWord</button>
        </div>
        <br> <br>

    </form>
</div>












<!-- <?php
   
include_once 'db_credentials.php';

   echo "HERE";
    
      $man = mysqli_real_escape_string($db,$_POST['man']);
      $subject = mysqli_real_escape_string($db,$_POST['subject']);
      $worded = mysqli_real_escape_string($db,$_POST['worded']);
      
       $sql = "INSERT INTO words(title,subtitle,word1,word2,word3,word4,word5,word6,word7,clue1,clue2,clue3,clue4,clue5,clue6,clue7)
                VALUES ('$man','$subject','$worded')
                ";

        

                mysqli_query($db, $sql);
                header('location: index.php?create=Success');
                
                
                
?> -->