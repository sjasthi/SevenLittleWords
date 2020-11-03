<?php $page_title = 'The Words'; ?>
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

<form action="createTheWord.php" method="POST" enctype="multipart/form-data">
        <br>
        <h3 id="title">Create Words</h3> <br>
        
        <table>


          
            <tr>
                
            <td style="width:100px">title:</td>
                <td><input type="text"  name="mytitle" class="form-control" maxlength="50" size="50" required title="Please enter  atitle."></td>
            </tr>
            <tr>
                <td style="width:100px">subtitle:</td>
                <td><input type="text"  name="mysubtitle" class="form-control" maxlength="50" size="50" required title="Please enter a subtitle."></td>
            </tr>
           
            <tr>
                <td style="width:100px">word1:</td>
                <td><input type="text"  name="MESSIC" class="form-control" maxlength="300" size="200" required title="Please enter a word1."></td>
            </tr>

             <tr>
                <td style="width:100px">word2:</td>
                <td><input type="text"  name="KAZIWI" class="form-control" maxlength="300" size="200" required title="Please enter a word2."></td>
            </tr>

             <tr>
                <td style="width:100px">word3:</td>
                <td><input type="text"  name="SIMBA" class="form-control" maxlength="300" size="200" required title="Please enter a word3."></td>
            </tr>

             <tr>
                <td style="width:100px">word4:</td>
                <td><input type="text"  name="BARCA" class="form-control" maxlength="300" size="200" required title="Please enter a word4."></td>
            </tr>

             <tr>
                <td style="width:100px">word5:</td>
                <td><input type="text"  name="LUCKD" class="form-control" maxlength="300" size="200" required title="Please enter a word5."></td>
            </tr>

             <tr>
                <td style="width:100px">word6:</td>
                <td><input type="text"  name="AUTONOMOUS" class="form-control" maxlength="300" size="200" required title="Please enter a word6."></td>
            </tr>

             <tr>
                <td style="width:100px">word7:</td>
                <td><input type="text"  name="BALLBOY" class="form-control" maxlength="300" size="200" required title="Please enter a word7."></td>
            </tr>

             <tr>
                <td style="width:100px">clue1:</td>
                <td><input type="text"  name="awesome" class="form-control" maxlength="300" size="200" required title="Please enter a clue1."></td>
            </tr>

             <tr>
                <td style="width:100px">clue2:</td>
                <td><input type="text"  name="tsunami" class="form-control" maxlength="300" size="200" required title="Please enter a clue2."></td>
            </tr>

             <tr>
                <td style="width:100px">clue3:</td>
                <td><input type="text"  name="cool" class="form-control" maxlength="300" size="200" required title="Please enter a clue3."></td>
            </tr>

             <tr>
                <td style="width:100px">clue4:</td>
                <td><input type="text"  name="readily" class="form-control" maxlength="300" size="200" required title="Please enter a clue4."></td>
            </tr>

             <tr>
                <td style="width:100px">clue5:</td>
                <td><input type="text"  name="regular" class="form-control" maxlength="300" size="200" required title="Please enter a clue5."></td>
            </tr>

             <tr>
                <td style="width:100px">clue6:</td>
                <td><input type="text"  name="verify" class="form-control" maxlength="300" size="200" required title="Please enter a clue6."></td>
            </tr>

             <tr>
                <td style="width:100px">clue7:</td>
                <td><input type="text"  name="halleluya" class="form-control" maxlength="300" size="200" required title="Please enter a clue7."></td>
            </tr> 

          
  
            
           

            <!-- title: <input type="text" id="myText" value="Test" class maxlength="100" size="100"required title="Please enter title"><br/>
           </tr>

           <tr>

    sutitle: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required subtitle="Please enter subtitle"><br/>

           </tr>

           <tr>

           word1: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required word1="Please enter word1"><br/>

           </tr>

           <tr>

           word2: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required word2="Please enter word2"><br/>

           </tr>

           <tr>

           word3: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required word3="Please enter word3"><br/>

           </tr>

           <tr>

          word4: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required word4="Please enter word4"><br/>

          </tr>

          <tr>


          word5: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required word5="Please enter a word5"><br/>

           </tr>

           <tr>

           word6: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required word6="Please enter word6"><br/>

           </tr>

           <tr>

           word7: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required word7="Please enter word7"><br/>

           </tr>

           <tr>

            clue1: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required clue1="Please enter clue1"><br/>

           </tr>

           <tr>

           clue2: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required clue2="Please enter clue2"><br/>

           </tr>

           <tr>

          clue3: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required clue3="Please enter clue3"><br/>

           </tr>

           <tr>

          clue4: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required clue4="Please enter clue4"><br/>

           </tr>
           <tr>

          clue5: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required clue5="Please enter  clue5"><br/>

           </tr>

           <tr>

          clue6: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required clue6="Please enter  clue6"><br/>

           </tr>
           <tr>

          clue7: <input type="text" id="myText" value="Test" class maxlength= "100" size= "100" required clue7="Please enter clue7"></td>

           </tr>
 -->


 </table>

        <br><br>
        <div align="center" class="text-left">
            <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Create Word</button>
        </div>
        <br> <br>

    </form>
</div>
        
