
<?php $page_title = 'Create A word'; ?>
<?php 
  $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";

 require 'db_credentials.php'; 
   include("./nav.php");

   ?>

<?php 
    $mysqli = NEW MySQLi('localhost','root','','sevenlittlewords');


    // mysqli_query($db, $sql);
    //             header('location: createWord3.php?create=Success');

   
?> 





               
                

<form action="createWord3.php" method="POST" enctype="multipart/form-data">
        <br>
        <h3 id="title">Create A word</h3> <br>
        
        <table>
          
            <tr>
                <td style="width:100px">word_id:</td>
                <td><input type="text"  name="man" class="form-control" maxlength="50" size="50" required title="Please enter a word_id."></td>
            </tr>
            <tr>
                <td style="width:100px">title:</td>
                <td><input type="text"  name="subject" class="form-control" maxlength="50" size="50" required title="Please enter a title."></td>
            </tr>
           
            <tr>
                <td style="width:100px">subtitle:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a subtitle."></td>
            </tr>

            <tr>
                <td style="width:100px">word1:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a word1."></td>
            </tr>

            <tr>
                <td style="width:100px">word2:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a word2."></td>
            </tr>
            <tr>
                <td style="width:100px">word3:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a word3."></td>
            </tr>
            <tr>
                <td style="width:100px">word4:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a word4."></td>
            </tr>
            <tr>
                <td style="width:100px">word5:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a word5."></td>
            </tr>

        </tr>
             <td style="width:100px">word6:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a word6."></td>
            </tr>

             <tr>
                <td style="width:100px">word7:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a word7."></td>
            </tr>

             <tr>
                <td style="width:100px">clue1:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a clue1."></td>
            </tr>

             <tr>
                <td style="width:100px">clue2:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a clue2."></td>
            </tr>

             <tr>
                <td style="width:100px">clue3:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a clue3."></td>
            </tr>

            <tr>
                <td style="width:100px">clue4:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a clue4."></td>
            </tr>

            <tr>
                <td style="width:100px">clue5:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a clue5."></td>
            </tr>

            <tr>
                <td style="width:100px">clue6:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a clue7."></td>
            </tr>
            <tr>
                <td style="width:100px">clue7:</td>
                <td><input type="text"  name="quoted" class="form-control" maxlength="300" size="200" required title="Please enter a clue7."></td>
            </tr>


            

         
          
        </table>

        <br><br>
        <div align="center" class="text-left">
            <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Create word</button>
        </div>
        <br> <br>

    </form>
</div>










   


        
