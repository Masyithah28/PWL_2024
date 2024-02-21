<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        $nim = '2241720011';
        $nama = 'Masyithah Sophia Damayanti';

        return "NIM: $nim<br>Nama: $nama";
    }

}
