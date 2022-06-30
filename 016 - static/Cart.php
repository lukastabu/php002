<?php

class Cart {

    public $id;

    static private $cart;

    static public function create() {
        return self::$cart ?? self::$cart = new self;
    }

    private function __construct ()
    {
        $this->id = rand(10,99);
    }

    private function __clone(){}
    private function sleep() {
        return[];
    }
    private function wakeup() {}
}