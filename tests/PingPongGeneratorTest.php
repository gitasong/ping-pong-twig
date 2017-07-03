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

        function test_reject_nonNum()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "r@nd0m_nVmb3r$!#";

            //Act
            $result = $test_PingPongGenerator->rejectNonNum($input);

            //Assert
            $this->assertEquals("Please enter a number.", $result);
        }

        function test_count()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "5";

            //Act
            $result = $test_PingPongGenerator->count($input);

            //Assert
            $this->assertEquals([1, 2, 3, 4, 5], $result);
        }

        function test_ping()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "3";

            //Act
            $result = $test_PingPongGenerator->ping($input);

            //Assert
            $this->assertEquals("ping", $result);
        }

        function test_pong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "5";

            //Act
            $result = $test_PingPongGenerator->pong($input);

            //Assert
            $this->assertEquals("pong", $result);
        }

        function test_pingPong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "15";

            //Act
            $result = $test_PingPongGenerator->pingPong($input);

            //Assert
            $this->assertEquals("ping-pong", $result);
        }

        function test_combineCount()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "15";

            //Act
            $result = $test_PingPongGenerator->combineCount($input);

            //Assert
            $this->assertEquals([1, 2, "ping", 4, "pong", "ping", 7, 8, "ping", "pong", 11, "ping", 13, 14, "ping-pong"], $result);
        }

    }

?>
