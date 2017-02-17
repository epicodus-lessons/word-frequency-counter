<?php

    require_once 'src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_onewordstrings()
        {
            //Arrange
            $test_WordFrequency = new RepeatCounter;
            $word = "cat";
            $string = "cat";

            //Act
            $result = $test_WordFrequency->CountRepeats($word, $string);

            //Assert
            $this->assertEquals("1", $result);
        }

    }


 ?>
