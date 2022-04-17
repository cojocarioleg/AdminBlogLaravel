<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $request ->validate([

            'title' => 'required|email',

        ]);
        Mail::create($request->all());
        return redirect()->route('home')->with('success', 'Email Adress is seed');
    }
}
