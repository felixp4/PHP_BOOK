<?php

final class Singleton
{
    private static $instance = null;

    public static function getInstance(): self
    {
        if(empty(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __constructor()
    {
        echo "Привет из конструктора !!! Инстанцироваться не получится ... ";
        return;
    }
}

$inst = Singleton::getInstance();
var_dump($inst);

$inst1 = Singleton::getInstance();
var_dump($inst1);

// $inst_construct = new Singleton();
// var_dump($inst_construct);


