<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function gift(Request $request)
    {
        Storage::put('results.json', json_encode($request->get('results')));
    }
}
