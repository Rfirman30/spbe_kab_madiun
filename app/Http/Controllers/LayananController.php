<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as LayananDB;

class LayananController extends Controller
{
    public function index()
    {
        $ar_layanan = LayananDB::table('layanans')->get();

        return view('admin.layanan.index', compact('ar_layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layanan.create');
    }
}
