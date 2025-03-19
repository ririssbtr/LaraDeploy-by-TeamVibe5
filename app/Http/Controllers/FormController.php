<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email'
    ]);

    return back()->with('success', "Terima kasih, {$request->name}! Data Anda telah diterima.");
    }
}
