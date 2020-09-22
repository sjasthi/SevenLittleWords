<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN''http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>

    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->

    <!-- jQuery library -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->

    <!-- Latest compiled JavaScript -->
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->

    <!-- Spectrum -->
    <!--<link rel="stylesheet" type="text/css" href="spectrum.css">-->
	<!-- <script type="text/javascript" src="spectrum.js"></script>-->

	<!-- CSS -->
	<!--<link rel="stylesheet" type="text/css" href="dabblestyle.css">-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
	
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
    <link rel="stylesheet" href="styles/custom_nav.css" type="text/css">

    <title>Dabble Puzzle</title>
</head>
<body>
    <div class="container-fluid">
	<?PHP
    session_start();
    require('session_validation.php');
    ?>
    <?PHP echo getTopNav(); ?>
    <div class="divTitle" align="center">
      <font class="font">Seven Little Words Puzzle</font>
    </div>
		<div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-12">
                                <div align="center"><h2>Dabble Puzzle</h2></div>
                            </div>
                        </div>
                    </div>
					<div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-12">
                                <div align="center"><h2>Dabble Options</h2></div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
  </body>
</html>