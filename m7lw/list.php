

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
            
   <!--        </tbody>
                    
        </table>
          </div>

				   </tbody>
            </div>
        </table>
		</form>							

    </div>
</div> -->
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
<script type="text/javascript">
	function quote() {
		var randomNumber = math.floor(Math.randomNumber)* (quotes.length);
          document.getElementByid('quoteDisplay').innerHTML = quotes[randomNumber];
</script>
</body>
</html>  

<?php
  $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";

  include("./nav.php");
  
  

$query = "SELECT * FROM  words";

 ?>

 <style>
    #title {
        text-align: center;
        color: darkgoldenrod;
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

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"/>
 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 


<!--Data Table-->




<form action=modifyQuote.php method ="post">
       <h2 id="title">Words</h2><br>
      
      <button><a class="btn btn-sm" href="createQuote.php">Words</a></button>
     <button type = "submit">Modify</button>
     <button type = "submit" formaction ="deleteQuote.php">Delete</button>
     <button type ="submit" formaction="FloatList.php">DropFloat</button> 
      <button type ="submit" formaction="slider.php">7LW</button>
      
        <div id="customerTableView">
        <table class="display" id="ceremoniesTable" style="width:100%">
                 <div class="table responsive">
               
          <tbody>


               


                 <div id="example_wrapper" class="dataTables_wrapper">

        <table id="info" class="display dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                     
          <thead>

 

<!DOCTYPE html>
<html lang="en" >

<head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"/>
 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>


  <meta charset="UTF-8">
  <title>Basic Tween</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body class = "bg-info">
<div class = "container">
<div class ="row justify-center-content-center">
<div class = "col-lg-10 bg- light rounded my-2 py-2">
<table class = "table table bordered table-stripped table-hover">
   <thead>
     <tr>
    <th> word_id </th>
     <th> title </th>  
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
 </dv>
  </table>

   <?php

            $sql = "SELECT * FROM words;";
                $data = mysqli_query($db,$sql);
                $dataCheck = mysqli_num_rows($data);
              if ($data->num_rows > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($data)) {

                echo '<tr>
                          <td>'.$row["word_id"].'</td>
                          <td> '.$row["title"]. '</td>
                           <td> '.$row["subtitle"].'</td>
                          <td> '.$row["word1"]. '</td>
                          <td> '.$row["word2"]. '</td>
                          <td> '.$row["word3"]. '</td>
                          <td> '.$row["word4"]. '</td>
                          <td> '.$row["word5"]. '</td>
                          <td> '.$row["word6"]. '</td>
                          <td> '.$row["word7"]. '</td>
                          <td> '.$row["clue1"]. '</td>
                          <td> '.$row["clue2"]. '</td>
                          <td> '.$row["clue3"]. '</td>
                          <td> '.$row["clue5"]. '</td>
                          <td> '.$row["clue6"]. '</td>
                          <td> '.$row["clue7"]. '</td>


                          
                         
                          
                      </tr>';

              }//end while
              }//end if
              else {
              echo "0 results";
            }//end else
            ?>



  <div id="demo">
  <div id="logo"></div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js'></script>



<!-- your custom javascript file -->

 $('words').dataTable();
  });
</script>

<script  src="js/index.js"></script>
</body>
</html>






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
<script type="text/javascript">
  function quote() {
    var randomNumber = math.floor(Math.randomNumber)* (quotes.length);
          document.getElementByid('quoteDisplay').innerHTML = quotes[randomNumber];







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 


<Data Table>
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
    if (isset($_GET['id'])) {
      $a =$_GET['id'];
      $query="SELECT * FROM quotes_table 
      WHERE author = '$a'";
    }
        
    $db->set_charset("utf8");
       $data = mysqli_query($db, $query);
       $inform = array(-1);
?>  