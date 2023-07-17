<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Petugasputricontroller extends Controller
{
    public function index()
    {
        $petugas = DB::table('t_petugas_putri')->get();

        return view('petugasputri', ['petugas' => $petugas]);
    }
}
