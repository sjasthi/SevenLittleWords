<?php
require('words_to_tiles_splitter_ml.php');
require_once("word_processor.php");
$words = ["table", "car", "desk", "compilation", "bookkeeping", "pencil", "roommate"];
$tiles = process_input($words);
$chars = splitWord("కజనబట");
foreach ($chars as $char)
{
	echo $char . ", ";
}
?>