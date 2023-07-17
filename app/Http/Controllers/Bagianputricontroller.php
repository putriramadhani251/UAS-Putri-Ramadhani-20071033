<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Bagianputricontroller extends Controller
{
    public function index()
    {
        $bagian = DB::table('t_bagian_putri')->get();

        return view('bagianputri', ['bagian' => $bagian]);
    }
}
