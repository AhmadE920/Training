<?php

use PHPUnit\Framework\TestCase;

class ValidatePasswordTest extends TestCase{
  
    public function testValidLogin()
    {
        $password = new ValidatePassword();
        $this->assertFalse($password->validLength('1234'));
    }
}