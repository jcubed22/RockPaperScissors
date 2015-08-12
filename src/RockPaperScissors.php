<?php 
	class RockPaperScissors 
	{
		function rochambeau($first_input, $second_input)
		{
			switch($first_input) {
				case "rock":
					switch($second_input){
						case "rock":
							return "Draw";
						case "paper":
							return "Player 2";
						case "scissors":
							return "Player 1";
					}
				case "paper":
					switch($second_input){
						case "rock":
							return "Player 1";
						case "paper":
							return "Draw";
						case "scissors":
							return "Player 2";
					}
				case "scissors":
					switch($second_input){
						case "rock":
							return "Player 2";
						case "paper":
							return "Player 1";
						case "scissors":
							return "Draw";
					}
			}
		}
	}
?>