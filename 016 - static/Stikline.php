<?php

class Stikline {
    public $turis;
    static public $gerimas = 'gazirofke';

    public static function valio() {
        echo '<h2>Valio</h2>';
    }

    public function __construct() {
        $this->turis = rand(100, 200);
    }

    public function kas()
    {
        echo '<br>xx>> '.self::$gerimas;
    }

}