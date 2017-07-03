<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_validate()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            // $input = "";
            // $input = " ";
            $input = "r@nd0m_nVmb3r$!#";
            // $input = "1 5";
            // $input = "&* !!";
            // $input = "&*84 &@ 33!!";
            // $input = "15*$%%89";

            //Act
            $result = $test_PingPongGenerator->validate($input);

            //Assert
            $this->assertEquals("Please enter a number.", $result);
        }

        function test_count()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "15";

            //Act
            $result = $test_PingPongGenerator->count($input);
            var_dump($result);

            //Assert
            $this->assertEquals([1, 2, "ping", 4, "pong", "ping", 7, 8, "ping", "pong", 11, "ping", 13, 14, "ping-pong"], $result);
        }

    }

?>
