<h1 align="center">PHP PSR Transliterator</h1>
<p align="center">
![](https://img.shields.io/github/stars/Nikidze/php-psr-transliterate.svg) ![](https://img.shields.io/github/forks/Nikidze/php-psr-transliterate.svg) ![](https://img.shields.io/github/tag/Nikidze/php-psr-transliterate.svg) ![](https://img.shields.io/github/release/Nikidze/php-psr-transliterate.svg) ![](https://img.shields.io/github/issues/Nikidze/php-psr-transliterate.svg) 
</p>
## По-русски
### Особенности
- Транслит с русского на латиницу;
- Поддержка [ISO9 вариант Б](https://ru.wikipedia.org/wiki/ISO_9) (ГОСТ 7.79—2000);
- Поддержка ЧПУ;
- Полное покрытие тестами;

### Установка
```bash
composer require nikidze/php-psr-transliterate
```
### Примеры
#### Простой транслит
```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use Nikidze\Transliterate\Transliterator;

// Aleksandr Sergeevich Pushkin
echo Transliterator::translit('Александр Сергеевич Пушкин');
// s"esh' eschyo e'tix myagkix francuzskix bulok, da vy'pej chayu
echo Transliterator::translit('съешь ещё этих мягких французских булок, да выпей чаю', 'iso9');
```

#### Транслит в ЧПУ
```php
// aleksandr-sergeevich-pushkin-dubrovskiy
echo Transliterator::friendlyUrl('Александр Сергеевич Пушкин: "Дубровский"');
```
### Зависимости
- php >= 7.2.0

## English
### Features
- Transliterates from Russian into Latin;
- Support ISO9 transliteration;
- Support friendly URLs;
- Full test coverage;

### Install
```bash
composer require nikidze/php-psr-transliterate
```
### Examples
#### Simple
```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use Nikidze\Transliterate\Transliterator;

// Aleksandr Sergeevich Pushkin
echo Transliterator::translit('Александр Сергеевич Пушкин');
// s"esh' eschyo e'tix myagkix francuzskix bulok, da vy'pej chayu
echo Transliterator::translit('съешь ещё этих мягких французских булок, да выпей чаю', 'iso9');
```

####Friendly URLs
```php
// aleksandr-sergeevich-pushkin-dubrovskiy
echo Transliterator::friendlyUrl('Александр Сергеевич Пушкин: "Дубровский"');
```
### Require
- php >= 7.2.0