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
            $this->assertEquals(1, $result);
        }

        function test_onewordstrings_nomatch()
        {
            //Arrange
            $test_WordFrequency = new RepeatCounter;
            $word = "cat";
            $string = "bat";

            //Act
            $result = $test_WordFrequency->CountRepeats($word, $string);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_multiplewordstrings_onematch()
        {
            //Arrange
            $test_WordFrequency = new RepeatCounter;
            $word = "cat";
            $string = "the cat in the hat";

            //Act
            $result = $test_WordFrequency->CountRepeats($word, $string);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_multiplewordstrings_nomatch()
        {
            //Arrange
            $test_WordFrequency = new RepeatCounter;
            $word = "cat";
            $string = "the bat in the hat";

            //Act
            $result = $test_WordFrequency->CountRepeats($word, $string);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_multiplewordstrings_twomatches()
        {
            //Arrange
            $test_WordFrequency = new RepeatCounter;
            $word = "cat";
            $string = "the cat by the cat";

            //Act
            $result = $test_WordFrequency->CountRepeats($word, $string);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_multiplewordstrings_multiplematches()
        {
            //Arrange
            $test_WordFrequency = new RepeatCounter;
            $word = "cat";
            $string = "the cat by the cat with the cat";

            //Act
            $result = $test_WordFrequency->CountRepeats($word, $string);

            //Assert
            $this->assertEquals(3, $result);
        }

        function test_multiplewordstrings_wholewordonly()
        {
            //Arrange
            $test_WordFrequency = new RepeatCounter;
            $word = "cat";
            $string = "the cat in the cathedral";

            //Act
            $result = $test_WordFrequency->CountRepeats($word, $string);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_multiplewordstrings_specialcharacters()
        {
            //Arrange
            $test_WordFrequency = new RepeatCounter;
            $word = "cat";
            $string = "the cat, the bat, and the car by the cat";

            //Act
            $result = $test_WordFrequency->CountRepeats($word, $string);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_multiplewordstrings_upperlowercase()
        {
            //Arrange
            $test_WordFrequency = new RepeatCounter;
            $word = "cat";
            $string = "The Cat, the Bat, and the Car by the Cat";

            //Act
            $result = $test_WordFrequency->CountRepeats($word, $string);

            //Assert
            $this->assertEquals(2, $result);
        }

    }


 ?>
