<?php

  $nav_selected = "SCANNER"; 
  $left_buttons = "YES"; 
  $left_selected = "WORDS"; 

  include("./nav.php");
  global $db;

  $query = "SELECT * FROM  words";


  ?>


<div class="right-content">
    <div class="container">

      <h3 style = "color: #01B0F1;">Words</h3>

        <h3><img src="images/releases.png" style="max-height: 35px;" />System Releases</h3>

        <table id="info" cellpadding="0" cellspacing="0" border="0"
            class="datatable table table-striped table-bordered datatable-style table-hover"
            width="100%" style="width: 100px;">
              <thead>
                <tr id="table-first-row">
                        <th>word_id</th>
                        <th>title</th>
                        <th>subtitle</th>
                        <th>Sword1</th>
                        <th>word2</th>
                        <th>word3</th>
                        <th>word4</th>
                        <th>word5(s)</th>
                        <th>word6</th>
                        <th>word7</th>
                        <th>clue1</th>
                </tr>
              </thead>

              <tfoot>
                <tr>
                        <th>word_id</th>
                        <th>title</th>
                        <th>subtile</th>
                        <th>word1</th>
                        <th>word2</th>
                        <th>word3</th>
                        <th>word4</th>
                        <th>word5(s)</th>
                        <th>word6</th>
                        <th>word7r</th>
                        <th>clue1</th>
                </tr>
              </tfoot>

              <tbody>

              <?php

               $sql = "SELECT * FROM words;";
                $data = mysqli_query($db,$sql);
                $dataCheck = mysqli_num_rows($data);
              if ($data->num_rows > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($data)) {


// $sql = "SELECT * from words ORDER BY rtm_date ASC;";
// $result = $db->query($sql);

//                 if ($result->num_rows > 0) {
//                     // output data of each row

//                     while($data = $result->fetch_assoc()) {
                        echo '<tr>
                                <td>'.$row["word_id"].'</td>
                                <td>'.$row["title"].' </span> </td>
                                <td>'.$row["subtitle"].'</td>
                                <td>'.$row["word1"].'</td>
                                <td>'.$row["word2"].' </span> </td>
                                <td>'.$row["word3"].'</td>
                                <td>'.$row["freeze_date"].'</td>
                                <td>'.$row["word5"].' </span> </td>
                                <td>'.$row["word6"].' </span> </td>
                                <td>'.$row["word7"].' </span> </td>
                                <td>'.$row["app_id"].' </span> </td>
                            </tr>';
                    }//end while
                }//end if
                else {
                    echo "0 results";
                }//end else

                 // $result->close();
                ?>

              </tbody>
        </table>


        <script type="text/javascript" language="javascript">
    $(document).ready( function () {
        
        $('#info').DataTable( {
            dom: 'lfrtBip',
            buttons: [
                'copy', 'excel', 'csv', 'pdf'
            ] }
        );

        $('#info thead tr').clone(true).appendTo( '#info thead' );
        $('#info thead tr:eq(1) th').each( function (i) {
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
    
        var table = $('#info').DataTable( {
            orderCellsTop: true,
            fixedHeader: true,
            retrieve: true
        } );
        
    } );

</script>

        

 <style>
   tfoot {
     display: table-header-group;
   }
 </style>

  <?php include("./footer.php"); ?>
