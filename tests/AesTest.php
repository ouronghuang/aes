<?php

namespace Orh\Aes\Test;

use Orh\Aes\Aes;
use PHPUnit\Framework\TestCase;

class AesTest extends TestCase
{
    protected $aes = null;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $key = 'D5E483D8B90C02BD4D470BA8049E1FA61D64EB2BFA444CBF9853CDFB8B24DA7A';
        $iv = '304E9E87DB9C1C81';

        $this->aes = new Aes($key, $iv);
    }

    public function testEncrypt()
    {
        $data = [];

        $encrypt = $this->aes->encrypt($data);

        $this->assertIsString($encrypt);
    }

    public function testDecrypt()
    {
        $data = [];

        $encrypt = $this->aes->encrypt($data);

        $decrypt = $this->aes->decrypt($encrypt);

        $this->assertIsArray($decrypt);
    }

    public function testString()
    {
        $data = 'This is need encrypt data.';

        $encrypt = $this->aes->encrypt($data);

        $decrypt = $this->aes->decrypt($encrypt);

        $this->assertEquals($data, $decrypt);
    }

    public function testArray()
    {
        $data = [
            'this',
            'is',
            'need',
            'encrypt',
            'data',
        ];

        $encrypt = $this->aes->encrypt($data);

        $decrypt = $this->aes->decrypt($encrypt);

        $this->assertEquals($data, $decrypt);
    }
}
