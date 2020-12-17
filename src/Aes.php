<?php

namespace Orh\Aes;

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

    /**
     * 初始化.
     *
     * @return void
     */
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
     * @return string
     */
    public function encrypt($data)
    {
        if (is_array($data)) {
            $data = json_encode($data);
        }

        return base64_encode(openssl_encrypt($data, $this->method, $this->key, OPENSSL_RAW_DATA, $this->iv));
    }

    /**
     * 解密.
     *
     * @param string $data
     *
     * @return string|array
     */
    public function decrypt($data)
    {
        $data = openssl_decrypt(base64_decode($data), $this->method, $this->key, OPENSSL_RAW_DATA, $this->iv);

        $array = json_decode($data, true);

        return is_array($array) ? $array : $data;
    }
}
