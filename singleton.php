<?php

final class Singleton
{
    private static $instance = null;
    private $bar = 0;

    public function getBar()
    {
        return $this->bar;
    }

    public function incBar()
    {
        $this->bar++;
    }

    public static function getInstance(): self
    {
        if(empty(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // защита от создания через конструктор
    final private function __construct() { }

    // защита от клонирования
    final private function __clone() { }

    // защита от десериализации
    final private function __wakeup() { }

    // защита от сериализации
    final private function __sleep() { }
}

$inst = Singleton::getInstance();
var_dump($inst);
$inst->incBar();
var_dump($inst->getBar());

$inst1 = Singleton::getInstance();
var_dump($inst1);
$inst1->incBar();
var_dump($inst1->getBar());

// защита от создания
$inst_construct = new Singleton();
var_dump($inst_construct);

// защита от клонирования
$inst_clone = clone $inst;
var_dump($inst_construct);

$str = serialize($inst);
var_dump($str);

$inst_unserialize = unserialize($str);
var_dump($inst_unserialize);