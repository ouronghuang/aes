<h1 align="center">
  The PHP AES encrypt and decrypt
</h1>

<p align="center">
  <a href="https://packagist.org/packages/orh/aes">
    <img alt="Packagist PHP Version Support" src="https://img.shields.io/packagist/php-v/orh/aes">
  </a>
  <a href="https://packagist.org/packages/orh/aes">
    <img alt="Packagist Version" src="https://img.shields.io/packagist/v/orh/aes?color=df8057">
  </a>
  <a href="https://packagist.org/packages/orh/aes">
    <img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/orh/aes">
  </a>
  <a href="https://github.com/ouronghuang/aes">
    <img alt="StyleCI build status" src="https://github.styleci.io/repos/321933081/shield?style=flat">
  </a>
  <a href="https://github.com/ouronghuang/aes">
    <img alt="GitHub" src="https://img.shields.io/github/license/ouronghuang/aes">
  </a>
</p>

## 安装

```
$ composer require orh/aes
```

## 使用

```php
use Orh\Aes\Aes;

$key = '';
$iv = '';

// 默认加密方式
$method = 'AES-256-CBC';

$data = '';
// $data = [];

$aes = new Aes($key, $iv, $method);

$encrypt = $aes->encrypt($data);
$decrypt = $aes->decrypt($encrypt);
```

## License

MIT
