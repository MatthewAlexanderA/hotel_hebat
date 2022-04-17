<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $pemesanans = Pemesanan::all();

        return view('resepsionis.index', compact('pemesanans'))
            ->with('i', (request()->input('page', 1) - 1) * 150);
    }
}
