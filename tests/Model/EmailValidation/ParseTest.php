<?php

namespace Mailgun\Tests\Model\EmailValidation;

use Mailgun\Model\EmailValidation\Parse;

class ParseTest extends \PHPUnit_Framework_TestCase
{
    public function testParseConstructorWithValidData()
    {
        $data = [
            'parsed' => ['parsed data'],
            'unparseable' => ['unparseable data'],
        ];

        $parts = Parse::create($data);

        $this->assertEquals($data['parsed'], $parts->getParsed());
        $this->assertEquals($data['unparseable'], $parts->getUnparseable());
    }

    public function testParseConstructorWithInvalidData()
    {
        $data = [
            'parsed' => null,
            'unparseable' => null,
        ];

        $parts = Parse::create($data);

        $this->assertEquals([], $parts->getParsed());
        $this->assertEquals([], $parts->getUnparseable());
    }
}
