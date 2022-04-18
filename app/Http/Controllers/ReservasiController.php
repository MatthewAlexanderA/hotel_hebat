<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index(Request $request)
    {
        $pemesanans = Pemesanan::when($request->search, function ($query) use ($request) {
            $query->where('nama_tamu', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(150);

        $pemesanans->appends($request->only('search'));

        if (request()->filter) {
            $filter = Carbon::parse(request()->filter)->toDateTimeString();
            $pemesanans = Pemesanan::where('tgl_check_in', '=', "{$filter}")->orderBy('created_at', 'desc')->paginate(5);
        } else {
            $data = Pemesanan::latest()->get();
        }

        return view('resepsionis.index', compact('pemesanans'))
            ->with('i', (request()->input('page', 1) - 1) * 150);
    }
}
