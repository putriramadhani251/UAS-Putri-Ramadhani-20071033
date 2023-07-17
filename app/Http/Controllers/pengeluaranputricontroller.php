<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengeluaranputricontroller extends Controller
{
    public function index()
    {
        $pengeluaran = DB::table('t_pengeluaran_putri')
            ->join('t_pengeluaranitem_putri', 't_pengeluaranitem_putri.no_bk', '=', 't_pengeluaran_putri.no_bk')
            ->join('t_barang_putri', 't_barang_putri.barang_id', '=', 't_pengeluaranitem_putri.barang_id')
            ->join('t_bagian_putri', 't_bagian_putri.bagian_id', '=', 't_pengeluaran_putri.bagian_id')
            ->join('t_petugas_putri', 't_petugas_putri.petugas_id', '=', 't_pengeluaran_putri.petugas_id')
            ->get();

        return view('pengeluaranputri', ['pengeluaran' => $pengeluaran]);
    }
}
