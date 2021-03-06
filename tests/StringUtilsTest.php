<?php

use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

// Путь который будет использован при глобальной установке пакета
$autoloadPath1 = __DIR__ . '/../../../autoload.php';
// Путь для локальной работы с проектом
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}
/*
//Эти тесты (стандатные) - работают
assert(capitalize('') == '');
assert(capitalize('hello') == 'Hello');
 */

//Эти тесты (с использованием библиотеки) - не работает
Assert::eq(capitalize(''), '');

Assert::eq(capitalize('hello'), 'Hello');


echo "Все тесты пройдены!\n";
