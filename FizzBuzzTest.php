<?php
require "vendor/autoload.php";
require "FizzBuzz.php";

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $fizzbuzz;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fizzBuzz= new FizzBuzz();
    }

    public function test_count_given1_shouldReturn1()
    {
        // Arrange (on prepare tous ce dont on a besoin pour le test, càd les variables etc..)

        //Act (execute la fonction que l'on souhaite tester)
        $actual = $this->fizzBuzz->count(1);

        //Assert
        $this->assertEquals("1", $actual);

        // $this->assertTrue(true ); // raccourci pour les booleans (au lieu de mettre le assertEquals)
    }

    public function test_count_given2_shouldReturn2(){
        // Arrange

        //Act
        $actual = $this->fizzBuzz->count(2);

        //assert
        $this->assertEquals("2" , $actual);
    }
    public function test_count_given3_shouldReturnFizz(){
        // Arrange

        //Act
        $actual = $this->fizzBuzz->count(3);

        //assert
        $this->assertEquals("Fizz" , $actual);
    }
    public function test_count_given4_shouldReturn4(){
        // Arrange

        //Act
        $actual = $this->fizzBuzz->count(4);

        //assert
        $this->assertEquals("4" , $actual);
    }

    //  $this->assertEquals(true,true); // verifier que 2 valeurs sont egales  (true est bien egal a true )



}
