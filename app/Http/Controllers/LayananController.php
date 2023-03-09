<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Ramsey\Uuid\Uuid;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_layanan = Layanan::all();

        return view('admin.layanan.index', compact('ar_layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'isi' => 'required',
            'file' => 'required'
        ]);

        $fileName = Uuid::uuid4() . '.' . $request->file('file')->extension();
        $request->file('file')->move(public_path('storage/kebijakan'), $fileName);

        Layanan::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'isi' => $request->isi,
            'file' => $fileName
        ]);

        return redirect()->route('layanans.index')
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
    public function destroy(string $id)
    {
        $ar_layanan = Layanan::find($id);
        $ar_layanan->delete();
        return redirect()->route('layanans.index');
    }
}
