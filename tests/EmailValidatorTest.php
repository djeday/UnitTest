<?php

require '../vendor/autoload.php';
require '../validation/EmailValidator.php';

use PHPUnit\Framework\TestCase;

class EmailValidatorTest extends TestCase {

    /**
     * @dataProvider additionWithInvalidResultProvider
     */
    public function testInvalidResult($email) {
        $emailValidator = new EmailValidator();
        $this->assertFalse($emailValidator->validate($email));
    }

    /**
     * @dataProvider additionWithValidResultProvider
     */
    public function testvalidResult($email) {
        $emailValidator = new EmailValidator();
        $this->assertTrue($emailValidator->validate($email));
    }

    public function additionWithInvalidResultProvider() {
        return [
            ['pid@mail..ru'],
            ['pid@mail-&.ru'],
            ['pidord@mail']
        ];
    }

    public function additionWithValidResultProvider()
    {
        return [
            ['p.visxms@mail.ru'],
            ['p-dads.visxms-@mail.com']
        ];
    }
}