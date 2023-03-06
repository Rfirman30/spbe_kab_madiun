<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
{
    public function index()
    {
        $ar_navbar = DB::table('layanans')->get();

        return view('admin.navbarcontrol.index', compact('ar_navbar'));
    }
}
