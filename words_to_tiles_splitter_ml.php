<?php
require_once ("word_processor.php");

$tiles = [];

	function validate_input($words_array)  //Enforces restrictions of the puzzle
	{
		$number_of_chars = 0;
		foreach ($words_array as $word)
		{
			if (getWordLength($word) < 2 || getWordLength($word) > 16)
			{
				//echo "line 26 " . getWordLength($word) . " " . $word;
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
			fill_tiles($words_array);
			$tiles = array_values(array_filter($tiles));
			complement_to_twenty();
			shuffle($tiles);
			return $tiles;
		}
	}
	function fill_tiles($words_array)
	{
		global $tiles;
		foreach($words_array as $word)
		{
			$chars = splitWord($word);
			$tokens = split_word($chars);
			foreach($tokens as $token)
			{
				array_push($tiles, $token);
			}
		}
	}
	
	function complement_to_twenty()  //eliminates remaining empty tiles of the puzzle by repeatedly splitting longer chunks into the smaller ones.
	{
		split_words_of_4();
		split_words_of_3();
		split_words_of_2();
	}
	
	function split_words_of_4()	//splits words with a given current_length to chunks of the desired target_lenght or less
	{
		global $tiles;
		$token_count = $count = count($tiles);
		for($i = 0; $i < $count && $token_count < 20; $i++)
		//for($i = 0; $i < $count && count($tiles) < 20; $i++)
			{
				if(count($tiles[$i]) == 4)
				{
					$tokens = split_token_of_4($tiles[$i]);
					$tiles[$i] = $tokens[0];
					array_push($tiles, $tokens[1]);
					$token_count++;
				}
			}
	}
	
	function split_words_of_3()	//splits words with a given current_length to chunks of the desired target_lenght or less
	{
		global $tiles;
		$token_count = $count = count($tiles);
		for($i = 0; $i < $count && $token_count < 20; $i++)
			{
				if(count($tiles[$i]) == 3)
				{
					$tokens = split_token_of_3($tiles[$i]);
					$tiles[$i] = $tokens[0];
					array_push($tiles, $tokens[1]);
					$token_count++;
				}
			}
	}
	
	function split_words_of_2()	//splits words with a given current_length to chunks of the desired target_lenght or less
	{
		global $tiles;
		$token_count = $count = count($tiles);
		for($i = 0; $i < $count && $token_count < 20; $i++)
			{
				if(count($tiles[$i]) == 2)
				{
					$tokens = split_token_of_2($tiles[$i]);
					$tiles[$i] = $tokens[0];
					array_push($tiles, $tokens[1]);
					$token_count++;
				}
			}
	}
	function split_token_of_4($chars)
	{
		$new_tokens = [];
		array_push($new_tokens, array_slice($chars, 0, 2), array_slice($chars, 2));
		return $new_tokens;
	}
	
	function split_token_of_3($chars)
	{
		$new_tokens = [];
		array_push($new_tokens, array_slice($chars, 0, 1), array_slice($chars, 1));
		return $new_tokens;
	}
	
	function split_token_of_2($chars)
	{
		$new_tokens = [];
		array_push($new_tokens, array_slice($chars, 0, 1), array_slice($chars, 1));
		return $new_tokens;
	}
		
	function split_word($chars)
	{
		$tokens = [];
		if(count($chars) == 2)
		{
			array_push($tokens, array_slice($chars, 0, 1), array_slice($chars, 1));
		}
		elseif(count($chars) == 3)
		{
			array_push($tokens, array_slice($chars, 1), array_slice($chars, -3, 1));
		}
		elseif(count($chars) == 4)
		{
			array_push($tokens, array_slice($chars, 0, 2), array_slice($chars, 2));
		}
		else
		{
			if(count($chars) % 4 == 1)
			{
				array_push($tokens, array_slice($chars, -5, 2), array_slice($chars, -3));
				$chars = array_slice($chars, 0, count($chars) - 5);
			}
			while(count($chars) >= 4)
			{
				$first_four_chars = array_slice($chars, 0, 4);
				array_push($tokens, $first_four_chars);
				$chars = array_slice($chars, 4);
			}
			if(count($chars) > 0)
			{
				array_push($tokens, $chars);
			}
		}
		return $tokens;
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