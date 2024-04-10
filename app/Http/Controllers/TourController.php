<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function mainPage()
    {
        $tours = Tour::select('*')->take(3)->get();
        $images = Image::all();
        return view('welcome', compact(['tours', 'images']));
    }

    public function tourPage()
    {
        $tours = Tour::all();
        return view('dashboard', compact('tours'));
    }
}
