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
    private function __constructor()
    {
        // echo "Привет из конструктора !!! Инстанцироваться не получится ... ";
        // return self::$instance;
    }

    // защита от клонирования
    private function __clone()
    {

    }

    // защита от сериализации
    private function __wakeup()
    {

    }
}

$inst = Singleton::getInstance();
var_dump($inst);
$inst->incBar();
var_dump($inst->getBar());

$inst1 = Singleton::getInstance();
var_dump($inst1);
$inst1->incBar();
var_dump($inst1->getBar());

$inst_construct = new Singleton();
var_dump($inst_construct);


