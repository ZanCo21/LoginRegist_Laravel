<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        return view ('home.index');
    }

    public function about(){
        // $name = 'zan';
        // $kelas = 'XI PPLG 1';
        $data = [
            'nama' => 'zan',
            'kelas' => 'XI PPLG 1' 
        ];
        return view ('home.about', compact ('data'));
    }

    public function base(){
        return view ('base');
    }
}
