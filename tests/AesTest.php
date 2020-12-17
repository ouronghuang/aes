<?php

namespace Orh\Aes\Test;

use Orh\Aes\Aes;
use PHPUnit\Framework\TestCase;

class AesTest extends TestCase
{
    protected $key = 'D5E483D8B90C02BD4D470BA8049E1FA61D64EB2BFA444CBF9853CDFB8B24DA7A';

    protected $iv = '304E9E87DB9C1C81';

    public function testEncrypt()
    {
        $aes = new Aes($this->key, $this->iv);

        $data = [];
        $encrypt = $aes->encrypt($data);

        $this->assertTrue(is_string($encrypt));
    }

    public function testDecrypt()
    {
        $aes = new Aes($this->key, $this->iv);

        $data = [];
        $encrypt = $aes->encrypt($data);
        $decrypt = $aes->decrypt($encrypt);

        $this->assertTrue(is_array($decrypt));
    }

    public function testString()
    {
        $aes = new Aes($this->key, $this->iv);

        $data = 'This is need encrypt data.';
        $encrypt = $aes->encrypt($data);
        $decrypt = $aes->decrypt($encrypt);

        $this->assertSame($data, $decrypt);
    }

    public function testArray()
    {
        $aes = new Aes($this->key, $this->iv);

        $data = [
            'this',
            'is',
            'need',
            'encrypt',
            'data',
        ];
        $encrypt = $aes->encrypt($data);
        $decrypt = $aes->decrypt($encrypt);

        $this->assertSame($data, $decrypt);
    }
}
