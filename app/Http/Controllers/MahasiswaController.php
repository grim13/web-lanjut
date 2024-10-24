<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index() {
        //menampilkan data mahasiswa
        $mhs = Mahasiswa::all();
        return view('mahasiswa.index', [
            'mhs' => $mhs
        ]);
    }
}
