<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as TataDB;

class TataKelolaController extends Controller
{
    public function index()
    {
        $ar_tata = TataDB::table('tatakelolas')->get();

        return view('admin.tatakelola.index', compact('ar_tata'));
    }
}
