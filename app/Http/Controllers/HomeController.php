<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $points = $user->totalFidelityPoints();

            return view('home', compact('points'));
        }

        return view('home');
    }
}
