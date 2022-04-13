<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ResepsionisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resepsioniss = User::where('role', 'resepsionis')->latest()->paginate(150);

        return view('admin.resepsioniss.index', compact('resepsioniss'))
            ->with('i', (request()->input('page', 1) - 1) * 150);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resepsioniss.create');
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
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $request['password'] = bcrypt($request['password']);

        User::create($request->all());

        return redirect()->route('resepsioniss.index')
            ->with('success', 'Add Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resepsionis  $resepsionis
     * @return \Illuminate\Http\Response
     */
    public function show(User $resepsionis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resepsionis  $resepsionis
     * @return \Illuminate\Http\Response
     */
    public function edit(User $resepsioniss)
    {
        return view('admin.resepsioniss.edit', compact('resepsioniss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resepsionis  $resepsionis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $resepsioniss)
    {
        $request->validate([
            'username' => 'required', 'unique:resepsioniss',
            'password' => 'required',
            'role' => 'required',
        ]);

        $request['password'] = bcrypt($request['password']);

        $resepsioniss->update($request->all());

        return redirect()->route('resepsioniss.index')
            ->with('success', 'Update Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resepsionis  $resepsionis
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $resepsioniss)
    {
        $resepsioniss->delete();

        return redirect()->route('resepsioniss.index')
            ->with('success', 'Delete Success!');
    }
}
