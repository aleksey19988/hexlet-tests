<?php

// Путь который будет использован при глобальной установке пакета
$autoloadPath1 = __DIR__ . '/../../../autoload.php';
// Путь для локальной работы с проектом
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

if (StringUtils\capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (StringUtils\capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}

echo 'Все тесты пройдены!';
