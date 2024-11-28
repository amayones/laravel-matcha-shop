<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class UserController extends Controller
{
    public function home(){
        $produk = Produk::all();
        return view('welcome', compact('produk'));
    }

    public function detail($id){
        $produk = Produk::where('id', $id)->first();
        return view('detail', compact('produk'));
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function keranjang(){
        return view('keranjang');
    }

    public function bayar(){
        return view('bayar');
    }

    public function summary(){
        return view('summary');
    }
}