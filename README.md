<h1 align="center">
    The PHP Aes encrypt and decrypt
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

$key = 'D5E483D8B90C02BD4D470BA8049E1FA61D64EB2BFA444CBF9853CDFB8B24DA7A';
$iv = '304E9E87DB9C1C81';

$data = 'This is need encrypt data.';
// $data = [];

$aes = new Aes($key, $iv);

$encrypt = $aes->encrypt($data);

$decrypt = $aes->decrypt($encrypt);
```

## License

MIT
