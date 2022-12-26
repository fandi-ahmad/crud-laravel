<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return 'ini dari home controller';
    }

    public function showHtml() {
        return view('home.home');
    }

    public function learn() {
        $nama = "fandi";
        $animalList = ["kucing", "jerapah", "ayam"];
        return view('home.learn', compact(
            'nama', 'animalList'
        ));
    }

    public function useHead() {
        return view('home.useHead');
    }

    public function contoh() {
        return view('home.contoh');
    }
    public function contohPost(Request $req) {
        $name = $req -> get('nama');
        return "ini dari fungsi contoh post dengan nama ". $name;
    }
}
