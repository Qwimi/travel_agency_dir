<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function mainPage()
    {
        $tours = Tour::select('*')->take(3)->get();
        return view('welcome', compact('tours'));
    }
}
