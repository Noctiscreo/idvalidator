<?php

use PHPUnit\Framework\TestCase;

require('../index.php');

class ValidateTest extends TestCase
{
    public function test_EmptyString()
    {
        $result = validateId('');
        $expected = 'Patient ID must contain 10 positive whole numbers.';
        $this->assertEquals($expected, $result);
    }

    public function test_Valid_1()
    {
        $result = validateId('4406283776');
        $expected = 'Patient ID accepted.';
        $this->assertEquals($expected, $result);
    }

    public function test_TooFewDigits()
    {
        $result = validateId('123456');
        $expected = 'Patient ID must contain 10 positive whole numbers.';
        $this->assertEquals($expected, $result);
    }

    public function test_ContainsLetters()
    {
        $result = validateId('12312312S1');
        $expected = 'Patient ID must contain 10 positive whole numbers.';
        $this->assertEquals($expected, $result);
    }

    public function test_Valid_2()
    {
        $result = validateId('4277608332');
        $expected = 'Patient ID accepted.';
        $this->assertEquals($expected, $result);
    }

    public function test_TooManyDigits()
    {
        $result = validateId('12312312312');
        $expected = 'Patient ID must contain 10 positive whole numbers.';
        $this->assertEquals($expected, $result);
    }

    public function test_SameDigits()
    {
        $result = validateId('2222222222');
        $expected = 'Field must not have the same number 10 times.';
        $this->assertEquals($expected, $result);
    }

    public function test_Valid_3()
    {
        $result = validateId('2185273756');
        $expected = 'Patient ID accepted.';
        $this->assertEquals($expected, $result);
    }

    public function test_NegativeNumber()
    {
        $result = validateId('-875123699');
        $expected = 'Patient ID must contain 10 positive whole numbers.';
        $this->assertEquals($expected, $result);
    }

    public function test_Decimal()
    {
        $result = validateId('58751236.9');
        $expected = 'Patient ID must contain 10 positive whole numbers.';
        $this->assertEquals($expected, $result);
    }
}