<?php

namespace App\Http\Controllers;

use App\Models\Manajemen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_manajemen = Manajemen::all();

        return view('admin.manajemen.index', compact('ar_manajemen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manajemen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'file' => 'required|string',
        ]);

        Manajemen::create($request->all());

        return redirect()->route('manajemens.index')->with('success', 'Data Kebijakan Berhasil Disimpan');
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
    public function destroy(string $id)
    {
        $management = Manajemen::find($id);
        $management->delete();
        return redirect()->route('manajemens.index')->with('success', 'Data Kebijakan Berhasil Dihapus');
    }
}
