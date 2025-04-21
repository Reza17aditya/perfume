<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Tampilkan halaman utama.
     */
    public function index()
    {
        return view('pages.main.home', [
            'javascript_file' => 'home.js', // Menentukan file JavaScript yang akan dimuat di halaman ini
        ]);
    }
        /**
     * Buat instance controller baru.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index'); // Tidak membutuhkan otentikasi untuk halaman index
    }
}

