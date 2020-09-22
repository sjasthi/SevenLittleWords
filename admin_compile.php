<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="styles/main_style.css" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Spectrum -->
    <link rel="stylesheet" type="text/css" href="spectrum.css">
    <script type="text/javascript" src="spectrum.js"></script>
		
    <link rel="stylesheet" href="styles/custom_nav.css" type="text/css">
  </head>
	<title>Seven Little Words</title>
  <body>
	<div class="container-fluid">
		<div class="panel">
    <?PHP
    session_start();
	require('db_configuration.php');
    require('session_validation.php');
	require('words_to_tiles_splitter_ml.php');
	require_once("word_processor.php");
    ?>
    <?PHP echo getTopNav(); ?>
    <div class="divTitle" align="center">
      <font class="font">Seven Little Words Puzzle</font>
    </div>
    <br>
	<?PHP 
	$result = run_sql("select count(1) FROM `words`");
	$row = mysqli_fetch_array($result);
	$total_rows = $row[0];
	
		for($current_id = 1; $current_id <= $total_rows; $current_id++)
		{
			echo '<div id="puzzle_number"><h1>Puzzle '. $current_id . '</h1></div>';
			$result = run_sql("SELECT * FROM `words` WHERE word_id = $current_id");
			$puzzle = mysqli_fetch_array($result);
			$title = $puzzle[1];
			$subtitle = $puzzle[2];
			$lengths = [];
			$words = [];
			$clues = [];
			$tiles = [];
			echo '<div id="title"><h1>' . $title . '</h1></div>';
			echo '<div id="subtitle"><h2>' . $subtitle . '</h2></div>';
			
			for($i = 0; $i < 7; $i++)
			{
				$word = $puzzle[$i + 3];
				$word_mod = splitWord($word);
				$length = count($word_mod);
				$clue = $puzzle[$i + 10];
				array_push($words, $word);
				array_push($lengths, $length);
				array_push($clues, $clue);
			}	
			echo '<table class="pazzle_table">';
				for($row = 1; $row <= 7; $row++)
				{
					echo '<tr>';
					echo '<td>' . $row . ' ' . '</td>';
					echo '<td>' . '&nbsp&nbsp' . $clues[$row - 1] . ' (' . $lengths[$row - 1] . ')&nbsp&nbsp&nbsp</td>';
					echo '<td> ____________________ </td>';
					echo '</tr>';
				}
			echo '</table><br><br>';
			$tiles = process_input($words);
		?>
	
	<div class="word">
	
	<?php
	echo '<table class="puzzle">';
	$index = 0;
	for($row = 1; $row <= 4; $row++)
	{
		echo '<tr>';
			for($col = 1; $col <= 5; $col++)
			{
				$tile = $tiles[($row - 1) * 5 + $col - 1];
				echo '<td class="filled">&nbsp';
				foreach($tile as $char)
					{
						echo $char; 
					}
				echo  '&nbsp</td>';
				
			}
		echo '</tr>';
	}
	echo '</table>';
		}
	?>
		
	<?php
	echo '<form id="gohome" action="index.php">';
	echo '<input class="btn btn-info btn-lg" type="submit" value="Back" />';
	//echo '<button type="button" class="btn btn-info" type="submit">Back</button>';
	echo '</form><br><br>';
	?>
	<div class="panel-group">
		<div class="panel-primary">
			<div class="panel-heading">
                <div class="row">
                    <div class="col-sm-12">
                        <div align="center"><h2>Puzzle Options</h2></div>
                    </div>
                </div>
            </div>
			<div class="panel-body">
                <div class="row">
                    <div class="col-sm-12" align="center">
						<?php // adding word options here **************************?>
															<div class="col-sm-4">
																	<div class="row">
																			<div class="col-sm-8">
																					<h3>Letters</h3>
																			</div>
																			<div align="left" >
	                                        <div class="row">
	                                            <div class="col-sm-6" >
	                                                <label>Letter Square Color</label>
	                                            </div>
	                                            <div class="col-sm-6" >
	                                                <input type="text" class='letterSquareColor'/>
	                                            </div>
	                                        </div>
	                                        <br>
	                                        <div class="row">
	                                            <div class="col-sm-6" >
	                                                <label>Letter Color</label>
	                                            </div>
	                                            <div class="col-sm-6" >
	                                                <input type="text" class='letterColor'/>
	                                            </div>
	                                        </div>
	                                        <br>
	                                        <div class="row">
	                                            <div class="col-sm-6" >
	                                                <label>Line Color</label>
	                                            </div>
	                                            <div class="col-sm-6" >
	                                                <input type="text" class='lineColor'/>
	                                            </div>
	                                        </div>
	                                        <br>
	                                    </div>
																		</div>
															</div>
                               
					</div>
				</div>
			</div>
				</div>
			</div>
			
		</div>
		
	</div>
	</div>
  </body>
</html>
<script>
// Set default spectrum elements
	$(".letterSquareColor").spectrum({
		color: "#EEEEEE",
		change: function(color) {
			$(".word table.puzzle tr td.filled").css("background-color", color.toHexString());
            $(".word .pyramid .inside").css("background-color", color.toHexString());
			$(".word .pyramid .left").css("background-color", color.toHexString());
			$(".word .pyramid .right").css("background-color", color.toHexString());
			$(".word .pyramid .top").css("background-color", color.toHexString());
			$(".word .pyramid .topRight").css("background-color", color.toHexString());
			$(".word .pyramid .bottom").css("background-color", color.toHexString());
			$(".word .pyramid .bottomRight").css("background-color", color.toHexString());
		}
	});

	$(".letterColor").spectrum({
		color: "#000000",
		change: function(color) {
			$(".word table.puzzle tr td.filled").css("color", color.toHexString());
            $(".word .pyramid .cell").css("color", color.toHexString());

			$(".word table.puzzle tr td.filled").css("color", color.toHexString());
            $(".word .pyramid .inside").css("color", color.toHexString());
			$(".word .pyramid .left").css("color", color.toHexString());
			$(".word .pyramid .right").css("color", color.toHexString());
			$(".word .pyramid .top").css("color", color.toHexString());
			$(".word .pyramid .topRight").css("color", color.toHexString());
			$(".word .pyramid .bottom").css("color", color.toHexString());
			$(".word .pyramid .bottomRight").css("color", color.toHexString());
		}
	});

	$(".lineColor").spectrum({
		color: "#000000",
		change: function(color) {
			$(".word table.puzzle tr td.filled").css("border", "2px solid " + color.toHexString());
            $(".word .pyramid .cell").css("border", "2px solid " + color.toHexString());

			$(".word table.puzzle tr td.filled").css("border-color", color.toHexString());
            $(".word .pyramid .inside").css("border-color", color.toHexString());
			$(".word .pyramid .left").css("border-color", color.toHexString());
			$(".word .pyramid .right").css("border-color", color.toHexString());
			$(".word .pyramid .top").css("border-color", color.toHexString());
			$(".word .pyramid .topRight").css("border-color", color.toHexString());
			$(".word .pyramid .bottom").css("border-color", color.toHexString());
			$(".word .pyramid .bottomRight").css("border-color", color.toHexString());
		}
	});

	$(".letterSquareColorLetters").spectrum({
		color: "#EEEEEE",
		change: function(color) {
			$(".letters table.puzzle tr td.filled").css("background-color", color.toHexString());
						$(".letters .pyramid .inside").css("background-color", color.toHexString());
			$(".letters .pyramid .left").css("background-color", color.toHexString());
			$(".letters .pyramid .right").css("background-color", color.toHexString());
			$(".letters .pyramid .top").css("background-color", color.toHexString());
			$(".letters .pyramid .topRight").css("background-color", color.toHexString());
			$(".letters .pyramid .bottom").css("background-color", color.toHexString());
			$(".letters .pyramid .bottomRight").css("background-color", color.toHexString());
		}
	});

	$(".letterColorLetters").spectrum({
		color: "#000000",
		change: function(color) {
			$(".letters table.puzzle tr td.filled").css("color", color.toHexString());
						$(".letters .pyramid .cell").css("color", color.toHexString());

			$(".letters table.puzzle tr td.filled").css("color", color.toHexString());
						$(".letters .pyramid .inside").css("color", color.toHexString());
			$(".letters .pyramid .left").css("color", color.toHexString());
			$(".letters .pyramid .right").css("color", color.toHexString());
			$(".letters .pyramid .top").css("color", color.toHexString());
			$(".letters .pyramid .topRight").css("color", color.toHexString());
			$(".letters .pyramid .bottom").css("color", color.toHexString());
			$(".letters .pyramid .bottomRight").css("color", color.toHexString());
		}
	});

	$(".lineColorLetters").spectrum({
		color: "#000000",
		change: function(color) {
			$(".letters table.puzzle tr td.filled").css("border", "2px solid " + color.toHexString());
						$(".letters .pyramid .cell").css("border", "2px solid " + color.toHexString());

			$(".letters table.puzzle tr td.filled").css("border-color", color.toHexString());
						$(".letters .pyramid .inside").css("border-color", color.toHexString());
			$(".letters .pyramid .left").css("border-color", color.toHexString());
			$(".letters .pyramid .right").css("border-color", color.toHexString());
			$(".letters .pyramid .top").css("border-color", color.toHexString());
			$(".letters .pyramid .topRight").css("border-color", color.toHexString());
			$(".letters .pyramid .bottom").css("border-color", color.toHexString());
			$(".letters .pyramid .bottomRight").css("border-color", color.toHexString());
		}
	});
</script>