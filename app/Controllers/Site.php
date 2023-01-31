<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function getIndex()
    {
        return 'Selamat datang';
    }
    public function getHitung($a, $b = 0)
    {
        $c = $a + $b;
        return (string) $c;
    }
}