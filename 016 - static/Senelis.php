<?php
namespace Braach;

class Senelis {
    public function pasaka() {
        echo '<h3>Seneliu pasakecia</h3>';
    }
    public static $posakis = 'ant kito nepasisako';

    public function istorija() {
        echo '<h3>'.self::$posakis.'</h3>';     // konrečiai tos klasės kintamasis
        echo '<h3>'.static::$posakis.'</h3>';   // kintamasis tos, kur naudojamas , ty atsizvelgia i overwritinumus naudojimo metu (late state binding)
    }

    public function __construct()
    {
        echo '<h4> Senelio konstruktoriai <h4>';
    }
}