<?php

namespace App\Http\Controllers;


class SessionsController extends Controller
{
    public function create()
    {
            return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($attributes)) {

            session()->regenerate();
            return redirect('/')->with('success', 'Welkom Terug!');
        }

        return back()
            ->withInput()
            ->withErrors(['email' => 'Het email adres kon niet geverifieerd worden']);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Tot ziens!');
    }
}
