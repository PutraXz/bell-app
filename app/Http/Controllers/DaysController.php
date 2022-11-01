<?php

namespace App\Http\Controllers;
use App\Models\Days;
use App\Models\Hours;
use Illuminate\Http\Request;

class DaysController extends Controller
{

    public function index(){
        $days = Days::with('Hours')->get();
        return view('days.index', compact('days'));
    }
}
