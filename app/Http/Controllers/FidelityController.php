<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use Illuminate\Http\Request;

class FidelityController extends Controller
{
    public function index()
    {
        $points = auth()->user()->totalFidelityPoints();
        $rewards = Reward::all();
        return view("fidelity", compact('points', 'rewards'));
    }
}
