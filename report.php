<?php
  $nav_selected = "REPORTS";
  $left_buttons = "NO";
  $left_selected = "";
 require 'db_credentials.php'; 
  include("./nav.php");
  $query = "SELECT * FROM words";
  $GLOBALS['data'] = mysqli_query($db, $query);
 ?>
<?php
include_once 'db_credentials.php'; 
$db->set_charset("utf8");
       $wheel=array();
   $samp = array();
     echo '<h2 id="title">Reports</h2><br>';


	if ($data->num_rows > 0) {
			 while($row = $data->fetch_assoc()) {
				 $writer = $row["title"];
				 
				 if (array_key_exists($writer,$wheel))
				 {
					 $wheel[$writer][0]++;
				 } else { 
				 
				
				 $wheel[$writer]=array();
				 $wheel[$writer][0]=1;
				 $wheel[$writer][1]=$writer;
				 
				 }
				 
			 }
			 
	} ?>
			  <table class="display" id="ceremoniesTable" style="width:100%">
  <tr>
    <th>Author</th>
    <th>Total</th>
    
  </tr> <?php
foreach ($wheel as $toy){
    echo '<tr>
                                <td>'.$toy[1].'</td>
                                <td><a href=list.php?id='.$toy[1].'>'.$toy[0].' </a></span> </td>
                        
                         
                            
								
          
                            
                            </tr>';
}


?>

<?php include("./footer.php"); ?>
