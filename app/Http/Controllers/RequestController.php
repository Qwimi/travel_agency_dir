<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use App\Models\Hotel;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class RequestController extends Controller
{

    public function create($id)
    {
        $tour = Tour::find($id);
        $food = Foods::all();
        $hotel = Hotel::all();

        return view('createReques', compact(['tour', 'food', 'hotel']));
    }

    public function store(Request $request)
    {
        return redirect()->route('main');
    }

    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect(RouteServiceProvider::HOME);
    // }
}
