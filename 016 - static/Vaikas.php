<?php
namespace Broool;

class Vaikas extends Tevas {
    public function betvarke() {
        echo '<h3>BETVARKE</h3>';
    }

    public function pasaka() {
        echo '<h3>Vaiku pasaka</h3>';
    }

    public static $posakis = 'vaikas pasako';


    public function senelioPosakis() {
        echo '<h3>'.self::$posakis.'</h3>';
        echo '<h3>'.static::$posakis.'</h3>';
    }

    public function __construct()
    {
        parent::__construct();
        echo '<h4> Vaikelio konstruktoriai <h4>';
    }


}