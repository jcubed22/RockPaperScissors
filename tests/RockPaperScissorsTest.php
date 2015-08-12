<?php 
	require_once "src/RockPaperScissors.php";
	
	class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
	{
		function test_rock_scissors()
		{
			//Arrange
		$test = new RockPaperScissors;
		$first_input = "rock";
		$second_input = "scissors";
		
		 //Act
		 $result = $test->rochambeau($first_input, $second_input);
		 
		 //Assert
		 $this->assertEquals("Player 1", $result);
		}
	}
?>