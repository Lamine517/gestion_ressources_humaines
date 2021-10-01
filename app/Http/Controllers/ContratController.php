<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContratController extends Controller
{
    public function index()
    {
        return view('admins.contrats.index');
    }
    public function create()
    {
        return view('admins.contrats.create');
    }
}
