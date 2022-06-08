<?php

class Radio1 extends Radio2 implements Planas {
    public function goForIt(array $data) : array
    {
        echo self::TU;
        return [];
    }
    public function jop(int $data) : void // --> perkelta i Radio2
    {
    }

}