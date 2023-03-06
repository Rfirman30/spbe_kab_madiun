<?php

namespace App\Http\Controllers;

use App\Models\Kebijakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as KebijakanDB;

class KebijakanController extends Controller
{
    public function index()
    {
        $ar_kebijakan = KebijakanDB::table('kebijakans')->get();

        return view('admin.kebijakan_admin.index', compact('ar_kebijakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kebijakan_admin.create');
    }
}
