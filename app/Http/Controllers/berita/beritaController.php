<?php

namespace App\Http\Controllers\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berita_model;

class beritaController extends Controller
{
    public function index(){
        //return('SAYA MUHAMMAD NURFI SYAHLAN');
        $berita = berita_model::get();
        return view ('admin.berita.index', compact('berita'));
    }
}
