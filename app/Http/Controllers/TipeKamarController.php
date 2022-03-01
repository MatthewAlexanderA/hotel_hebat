<?php

namespace App\Http\Controllers;

use App\Models\TipeKamar;
use Illuminate\Http\Request;

class TipeKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipekamars = TipeKamar::latest()->paginate(150);

        return view('admin.tipekamars.index', compact('tipekamars'))
            ->with('i', (request()->input('page', 1) - 1) * 150);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipekamars.create');
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
            'tipe_kamar' => 'required',
            'jumlah_kamar' => 'required',
        ]);

        TipeKamar::create($request->all());

        return redirect()->route('tipekamars.index')
            ->with('success', 'Add Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipeKamar  $tipeKamar
     * @return \Illuminate\Http\Response
     */
    public function show(TipeKamar $tipeKamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipeKamar  $tipeKamar
     * @return \Illuminate\Http\Response
     */
    public function edit(TipeKamar $tipekamar)
    {
        return view('admin.tipekamars.edit', compact('tipekamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipeKamar  $tipeKamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipeKamar $tipekamar)
    {
        $request->validate([
            'tipe_kamar' => 'required',
            'jumlah_kamar' => 'required',
        ]);

        $tipekamar->update($request->all());

        return redirect()->route('tipekamars.index')
            ->with('success', 'Update Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipeKamar  $tipeKamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipeKamar $tipekamar)
    {
        $tipekamar->delete();

        return redirect()->route('tipekamars.index')
            ->with('success', 'Delete Success!');
    }
}
