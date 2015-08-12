<?php 
	class RockPaperScissors 
	{
		private $player1;
		private $player2;
		
		function __construct($player1= "", $player2 = "")
		{
			$this->player1 = $player1;
			$this->player2 = $player2;
		}
		
		function setPlayer1($new_move)
		{
			$this->player1 = $new_move;
		}
		
		function getPlayer1()
		{
			return $this->player1;
		}
		
		function setPlayer2($new_move)
		{
			$this->player2 = $new_move;
		}
		
		function getPlayer2()
		{
			return $this->player2;
		}
		
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
		
		function computerPlayer()
		{
			$x = rand(0, 2);
			switch($x) {
				case 0:
					return "rock";
				case 1:
					return "paper";
				case 2:
					return "scissors";
			}
		}
		
		function save()
		{
			array_push($_SESSION['list_of_moves'], $this);
		}
		
		static function getAll()
		{
			return $_SESSION['list_of_moves'];
		}
		
		static function deleteAll()
		{
			$_SESSION['list_of_moves'] = array();
		}
	}
?>