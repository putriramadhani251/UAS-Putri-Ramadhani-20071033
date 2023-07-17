<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangputriController extends Controller
{
    public function index()
    {
        $barang = DB::table('t_barang_putri')->get();

        return view('barangputri', ['barang' => $barang]);
    }
}
