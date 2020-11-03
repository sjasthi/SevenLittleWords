<?php
  $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";

  include("./nav.php");
  
  

$query = "SELECT * FROM words";

 ?>
 
 <style>
    #title {
        text-align: center;
        color: white;
        background-color: #D3D3D3;
         /*background-color: #FF5733;*/
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

 <div class="right-content">
    <div class="container-fluid">
   <?php
header('Content-type: text/html; charset=utf-8');
 if(isset($_GET['create'])){
            if($_GET["create"] == "Success"){
                echo '<br><h3>Success! Your quote has been added!</h3>';
            }
        }

 if(isset($_GET['deleted'])){
            if($_GET["deleted"] == "Success"){
                echo '<br><h3>We deleted that quote, do not worry</h3>';
            }
        }
 if(isset($_GET['updated'])){
            if($_GET["updated"] == "Success"){
                echo '<br><h3>yes yes, we changed it no worries </h3>';
            }
        }

   if (isset($_GET['word_id'])) {
      $a =$_GET['word_id'];
      $query="SELECT * FROM words 
      WHERE title = '$a'"; 

    }
        
    $db->set_charset("utf8");
       $data = mysqli_query($db, $query);
       $inform = array(-1);
?>
<form action=modifyWord.php method ="post">
       <h2 id="title">Quotelist</h2><br>

       <button><a class="btn btn-sm" href="createWord2.php">CreateWords</a></button>
       <button type = "submit">Modify</button>
      <button type = "submit" formaction ="deletewords.php">Delete</button>
      <button type = "submit" formaction ="mypuzzle1.php">Create puzzle</button>
      <button type ="submit" formaction="">7LW</button>
 
        <div id="customerTableView">
        <table class="display" id="ceremoniesTable" style="width:100%">
                 <div class="table responsive">
                <thead>
                <tr>
        <th></th>
                        <th>word_id</th>
                        <th>title</th>
                        <th>subtitle</th>
                        <th>word1</th>
                        <th>word2</th>
                        <th>word3</th>
                        <th>word4</th>
                        <th>word5</th>
                        <th>word6</th>
                        <th>word7</th>
                        <th>clue1</th>
                        <th>clue2</th>
                        <th>clue3</th>
                        <th>clue4</th>
                        <th>clue5</th>
                        <th>clue6</th>
                        <th>clue7</th>
        
        </tr>
        </thead>
          <tbody>
                <?php
        
        if ($data->num_rows > 0) {
          
           while($row = $data->fetch_assoc()) {
                    echo '<tr>
                <td><input type ="radio" name ="ident" value ='.$row["word_id"].'></td>
                                <td>'.$row["word_id"].'</td>
                                <td>'.$row["title"].' </span> </td>
                                <td>'.$row["subtitle"].'</td>
                                <td>'.$row["word1"].'  </span> </td>
                                <td>'.$row["word2"].'</td>
                                <td>'.$row["word3"].' </span> </td>
                                <td>'.$row["word4"].'</td>
                                <td>'.$row["word5"].' </span> </td>
                                <td>'.$row["word6"].'</td>
                                <td>'.$row["word7"].' </span> </td>
                                <td>'.$row["clue1"].'</td>
                                <td>'.$row["clue2"].' </span></td>
                                <td>'.$row["clue3"].'</td>
                                <td>'.$row["clue4"].' </span></td>
                                <td>'.$row["clue5"].'</td>
                                <td>'.$row["clue6"].'</td>
                                <td>'.$row["clue7"].' </span> </td>
                            
                            </tr>';
           }
        }
           else {
                    echo "0 results";
                }
         ?>
           </tbody>
            </div>
        </table>
    </form>             

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 


<!--Data Table-->
<script type="text/javascript" charset="utf8"
        src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<script type="text/javascript" language="javascript">
    $(document).ready( function () {
        
        $('#ceremoniesTable').DataTable( {
            dom: 'lfrtBip',
            buttons: [
                'copy', 'excel', 'csv', 'pdf'
            ] }
        );

        $('#ceremoniesTable thead tr').clone(true).appendTo( '#ceremoniesTable thead' );
        $('#ceremoniesTable thead tr:eq(1) th').each( function (i) {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    
            $( 'input', this ).on( 'keyup change', function () {
                if ( table.column(i).search() !== this.value ) {
                    table
                        .column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    
        var table = $('#ceremoniesTable').DataTable( {
            orderCellsTop: true,
            fixedHeader: true,
            retrieve: true
        } );
        
    } );

</script>
<!-- </script>
    <div id="wrapper" class="hfeed">
        <div class="wrapAll clearfix">
            <div class="sidebar" id="sidebarContent">
            </div>
            <div id="preventMouseHoverOnPageLoad">      
            </div>
            <div class="mainsection">
                <div class="headerLinks">
                    <a class="user" href="/contribute/">Contribute </a> 
                </div>
                <div class="tabs clearfix" id="tabsContent">
                </div>
                <div class="article clearfix">
                    <div id="content" role="main"> -->
</body>
</html>










