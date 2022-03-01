<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use App\Models\TipeKamar;
use Illuminate\Http\Request;

class FasilitasKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitaskamars = FasilitasKamar::latest()->paginate(150);

        return view('admin.fasilitaskamars.index', compact('fasilitaskamars'))
            ->with('i', (request()->input('page', 1) - 1) * 150);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipekamars = TipeKamar::all();
        return view('admin.fasilitaskamars.create', compact('tipekamars', $tipekamars));
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
            'fasilitas' => 'required',
        ]);

        FasilitasKamar::create($request->all());

        return redirect()->route('fasilitaskamars.index')
            ->with('success', 'Add Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasKamar $fasilitasKamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function edit(FasilitasKamar $fasilitaskamar)
    {
        $tipekamars = TipeKamar::all();
        return view('admin.fasilitaskamars.edit', compact('fasilitaskamar', 'tipekamars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FasilitasKamar $fasilitaskamar)
    {
        $request->validate([
            'tipe_kamar' => 'required',
            'fasilitas' => 'required',
        ]);

        $fasilitaskamar->update($request->all());

        return redirect()->route('fasilitaskamars.index')
            ->with('success', 'Update Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasKamar $fasilitaskamar)
    {
        $fasilitaskamar->delete();

        return redirect()->route('fasilitaskamars.index')
            ->with('success', 'Delete Success!');
    }
}
