<?php
require_once ("word_processor.php");
	$tiles = [];



				
	/* function validate_input($words_array)  //Enforces restrictions of the puzzle
	{
		$number_of_chars = 0;
		foreach ($words_array as $word)
		{
			if (strlen($word) < 2 || strlen($word) > 16)
			{
				return false;
			}
			$number_of_chars += strlen($word);
		}
		return count($words_array) == 7 && $number_of_chars >= 20 && $number_of_chars <= 80;
	} */
	
	/* function validate_input($words_array)  //Enforces restrictions of the puzzle
	{
		$number_of_chars = 0;
		foreach ($words_array as $word)
		{
			if (getWordLength($word) < 2 || getWordLength($word) > 16)
			{
				echo "line 26 " . getWordLength($word) . " " . $word;
				return false;
			}
			$number_of_chars += getWordLength($word);
		}
		return count($words_array) == 7 && $number_of_chars >= 20 && $number_of_chars <= 80;
	} */


	 
	
	function validate_input($words_array)  //Enforces restrictions of the puzzle
	{
		$number_of_chars = 0;
		foreach ($words_array as $word)
		{
			if (getWordLength($word) < 2 || getWordLength($word) > 16)
			{
				echo "line 26 " . getWordLength($word) . " " . $word;
				return false;
			}
			$number_of_chars += getWordLength($word);
		}
		return count($words_array) == 7 && $number_of_chars >= 20 && $number_of_chars <= 80;
	}
	
	function process_input($words_array)
	{
		global $tiles;
		if(!validate_input($words_array))
		{
			echo ("Invalid input");
		}
		else
		{
			foreach($words_array as $word)
			{
				fill_tiles(split_word($word));
			}
			complement_to_twenty();
			shuffle($tiles);
			return $tiles;
			// foreach($tiles as $tile)
			// {
				// echo $tile . ' ';
			// }
		}
	}

	
	function split_word($word)	//Splits a word into smaller chunks containing no more than four letters. Words (or chunks) of five are devided 3 : 2 rather than 4 : 1. 
	{
		switch(getWordLength($word))
		{
			case 2:
				$tokens = str_split($word);
				break;
			case 3:
			case 4:
				$tokens = str_split($word, 2);
				break;
			case 5:
				$tokens = str_split($word, 3);
				break;
			default:
				if(getWordLength($word) % 4 == 1)
				{	$last_five_chars = [];
					array_push($last_five_chars, substr($word, -2));
					array_push($last_five_chars, substr($word, -5, 3));
					$partial_word = substr($word, 0, strlen($word) - 5);
					$blocks_of_four = str_split($partial_word, 4);
					$tokens = array_merge($blocks_of_four, $last_five_chars);
					
				}
				else
				{
					$tokens = str_split($word, 4);
				}
		}
		return $tokens;
	}

	?>

	

	<?php
	
	function fill_tiles($tokens_array) 	//fills tiles array of the puzzle with split words
	{
		global $tiles;
		foreach($tokens_array as $token)
		{
			array_push($tiles, $token);
		}
	}
	
	function complement_to_twenty()  //eliminates remaining empty tiles of the puzzle by repeatedly splitting longer chunks into the smaller ones.
	{
		split_words(4, 2);
		split_words(3, 2);
		split_words(2, 1);
	}
	
	function split_words($current_length, $target_lenght)	//splits words with a given current_length to chunks of the desired target_lenght or less
	{
		global $tiles;
		$token_count = $count = count($tiles);
		for($i = 0; $i < $count && $token_count < 20; $i++)
			{
				if(getWordLength($tiles[$i]) == $current_length)
				{
					$tokens = str_split($tiles[$i], $target_lenght);
					$tiles[$i] = $tokens[0];
					array_push($tiles, $tokens[1]);
					$token_count++;
				}
			}
	}
	
	/*** Word Processor Functions ***/
	function getWordLength($word){
		$wordProcessor = new wordProcessor(" ", "telugu");
		$wordProcessor->setWord($word, "telugu");

		return $wordProcessor->getLength();
	}

	function splitWord($word){
		$wordProcessor = new wordProcessor(" ", "telugu");
		$wordProcessor->setWord($word, "telugu");

		return $wordProcessor->getLogicalChars();
	}
?>





 
   



  




	
	
	
	
	
	
	





















 