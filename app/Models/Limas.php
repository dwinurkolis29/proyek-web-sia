<?php

namespace App\Models;

class Limas
{
    public $luasAlas;
    public $luasLimas;
    public $sepertiga = 1/3;

    public function volume()
    {
        return $this->sepertiga * $this->luasAlas * $this->luasLimas;
    }
}
