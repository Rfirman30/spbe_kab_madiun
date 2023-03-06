<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FooterDB;

class FooterController extends Controller
{
    public function index()
    {
        $ar_footer = FooterDB::table('footers')->get();

        return view('admin.footerdashboard.index', compact('ar_footer'));
    }
}
