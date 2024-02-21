<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function index() {
    //     return 'Selamat Datang';
    //     }
    // public function about() {
    //     return 'Masyithah Sophia Damayanti (2241720011)';
    //     }
    public function articles($id) {
        return "Halaman Artikel dengan ID {{$id}}";
    }
}
