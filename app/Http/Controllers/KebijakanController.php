<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB as KebijakanDB;

class KebijakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_kebijakan = KebijakanDB::table('kebijakans')->get();

        return view('admin.kebijakan_admin.index', compact('ar_kebijakan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kebijakan_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        KebijakanDB::table('kebijakans')->insert([
            'nama' => $request->nama

        ]);

        return redirect()->route('kebijakans')
            ->with('success', 'Data Kebijakan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ar_kebijakan = KebijakanDB::find($id)->delete();
        return redirect()->route('kebijakans');
    }
}
