<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\TipeKamar;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipekamars = TipeKamar::all();
        return view('user.pemesanans.pemesanan', compact('tipekamars', $tipekamars));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipekamars = TipeKamar::all();
        return view('user.pemesanans.pemesanan', compact('tipekamars', $tipekamars));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'nama_tamu' => 'required',
            'tgl_check_in' => 'required',
            'tgl_check_out' => 'required',
            'tipe_kamar' => 'required',
            'jumlah_kamar' => 'required',
        ]);

        Pemesanan::create($request->all());

        return redirect()->route('pemesanans.struk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanans)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesanan $pemesanans)
    {
        return view('user.pemesanans.struk', compact('pemesanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }
}
