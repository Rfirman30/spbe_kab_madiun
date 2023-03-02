<?php

namespace App\Http\Controllers;

use App\Models\Kebijakan;
use Illuminate\Http\Request;

class KebijakanController extends Controller
{
    public function index()
    {
        $kebijakans = Kebijakan::latest()->paginate(5);

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
