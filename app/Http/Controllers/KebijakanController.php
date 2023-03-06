<?php

namespace App\Http\Controllers;

use App\Models\Kebijakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KebijakanController extends Controller
{
    public function index()
    {
        $ar_kebijakan = DB::table('kebijakans')->get();

        return view('kebijakan_admin.index', compact('kebijakans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kebijakan.create');
    }
}
