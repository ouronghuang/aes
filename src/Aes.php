<?php

namespace Orh\Aes;

use Orh\Aes\Exceptions\InvalidArgumentException;

class Aes
{
    /**
     * 密钥.
     *
     * @var string
     */
    protected $key = '';

    /**
     * 偏移量.
     *
     * @var string
     */
    protected $iv = '';

    /**
     * 加密方式.
     *
     * @var string
     */
    protected $method = '';

    public function __construct(string $key, string $iv, string $method = 'AES-256-CBC')
    {
        $this->key = $key;
        $this->iv = $iv;
        $this->method = $method;
    }

    /**
     * 加密.
     *
     * @param string|array $data
     *
     * @throws
     */
    public function encrypt($data): string
    {
        if (!is_string($data) && !is_array($data)) {
            throw new InvalidArgumentException('The encrypt data must be a string or an array.');
        }

        if (is_array($data)) {
            $data = json_encode($data);
        }

        return base64_encode(openssl_encrypt($data, $this->method, $this->key, OPENSSL_RAW_DATA, $this->iv));
    }

    /**
     * 解密.
     *
     * @return string|array
     */
    public function decrypt(string $data)
    {
        $data = openssl_decrypt(base64_decode($data), $this->method, $this->key, OPENSSL_RAW_DATA, $this->iv);

        $array = json_decode($data, true);

        return is_array($array) ? $array : $data;
    }
}
