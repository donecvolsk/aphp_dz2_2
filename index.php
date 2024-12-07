<?php
declare(strict_types=1);

function calculate($value)
{
    if(gettype($value) === 'string') {
        throw new Exception("Строка");
    } elseif (gettype($value) === 'integer' || gettype($value) === 'double') {
        throw new Exception("Число");
    } elseif (gettype($value) === 'boolean') {
        throw new Exception("булево значение");
    } elseif (gettype($value) === 'array') {
        throw new Exception("массив");
    } elseif (gettype($value) === 'NULL') {
        throw new Exception("объект");
    } 
    throw new Exception("тип неопределен");
}

try {
    calculate(true);
} catch (Exception $e) {
    echo 'Тип переменной: ',  $e->getMessage() . PHP_EOL;
}


