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
		
		function test_rock_paper()
		{
			//Arrange
			$test = new RockPaperScissors;
			$first_input = "rock";
			$second_input = "paper";
			
			//Act
			$result = $test->rochambeau($first_input, $second_input);
			
			//Assert
			$this->assertEquals("Player 2", $result);
		}
		
		function test_rock_rock()
		{
			//Arrange
			$test = new RockPaperScissors;
			$first_input = "rock";
			$second_input = "rock";
			
			//Act
			$result = $test->rochambeau($first_input, $second_input);
			
			//Assert
			$this->assertEquals("Draw", $result); 
		}
		
		function test_paper_rock()
		{
			//Arrange
			$test = new RockPaperScissors;
			$first_input = "paper";
			$second_input = "rock";
			
			//Act
			$result = $test->rochambeau($first_input, $second_input);
			
			//Assert
			$this->assertEquals("Player 1", $result);
		}
		function test_scissor_rock()
		{
			//Arrange
			$test = new RockPaperScissors;
			$first_input = "scissors";
			$second_input = "rock";
			
			//Act
			$result = $test->rochambeau($first_input, $second_input);
			
			//Assert
			$this->assertEquals("Player 2", $result);
		}
	}
?>