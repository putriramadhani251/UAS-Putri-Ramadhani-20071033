<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pengeluaranitemputricontroller extends Controller
{
    public function index()
    {
        $pengeluaranitem = DB::table('t_pengeluaranitem_putri')
            ->join('t_barang_putri', 't_barang_putri.barang_id', '=', 't_pengeluaranitem_putri.barang_id')
            ->get();

        return view('pengeluaranitemputri', ['pengeluaranitem' => $pengeluaranitem]);
    }
}
