<?php $page_title = 'The Cow Layer'; ?>
<?php 
  $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";

 require 'db_credentials.php'; 
   include("./nav.php");
 ?>

<?php 
    $mysqli = NEW MySQLi('localhost','root','','quotes_db');
   
?>

<form action="createTheQuote.php" method="POST" enctype="multipart/form-data">
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
         
          
        </table>

        <br><br>
        <div align="center" class="text-left">
            <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Create word</button>
        </div>
        <br> <br>

    </form>
</div>