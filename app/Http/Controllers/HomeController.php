<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Dashboard',
            'about' => DB::table('about')->count(),
            'pekerjaan' => DB::table('pekerjaan')->count(),
            'pendidikan' => DB::table('pendidikan')->count(),
            'organisasi' => DB::table('organisasi')->count(),
            'sertifikat' => DB::table('sertificate')->count(),
            'pertanyaan' => DB::table('question')->count(),
        ];

        return view('dashboard', $data);
    }

    
}
