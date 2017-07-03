<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_reject_noInput()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "";

            //Act
            $result = $test_PingPongGenerator->rejectNoInput($input);

            //Assert
            $this->assertEquals("Please enter a number.", $result);
        }

        function test_reject_whitespace()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = " ";

            //Act
            $result = $test_PingPongGenerator->rejectWhitespace($input);

            //Assert
            $this->assertEquals("Spaces are not allowed.", $result);
        }

    }

?>
