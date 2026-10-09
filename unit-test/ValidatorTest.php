<?php
// file: ValidatorTest.php

use PHPunit\Framework\TestCase;

require_once "Validator.php";

class ValidatorTest extends TestCase {

// === Test Age === //
public function testValidAge() {
    $this->assertTrue(validateAge(30));
    $this->assertTrue(validateAge(-30));
}
public function testEmpityAgethrowsException() {
     $this->expection(InvalidArgumentException::class);
     validateAge("");
}
}


