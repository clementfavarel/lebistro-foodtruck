<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function impressum()
    {
        return view('legal.impressum');
    }

    public function agb()
    {
        return view('legal.agb');
    }

    public function datenschutz()
    {
        return view('legal.datenschutz');
    }
}
