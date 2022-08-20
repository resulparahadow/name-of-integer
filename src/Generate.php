<?php

namespace ResulParahadow;

class NameOfInteger {

    protected $numbers = [
        1 => 'Bir',
        2 => 'Iki',
        3 => 'Üç',
        4 => 'Dört',
        5 => 'Bäş',
    ];

    public function nameOfInt(int $int) : string
    {
        return isset($this->numbers[$int]) ? $this->numbers[$int] : 'Sorry this is not known!';
    }
    
}