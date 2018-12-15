<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'currentResults' => json_encode(json_decode(Storage::get('results.json'))),
            'givers' => json_encode(json_decode(Storage::get('givers.json'))),
            'takers' => json_encode(json_decode(Storage::get('takers.json'))),
            'show'=> true && request()->get('backdoor')
        ]);
    }

    public function gift(Request $request)
    {
        Storage::put('results.json', json_encode($request->get('results')));
        Storage::put('givers.json', json_encode($request->get('givers')));
        Storage::put('takers.json', json_encode($request->get('takers')));
    }

    public function reset()
    {
        Storage::put('results.json', json_encode([]));

        $all = json_encode(json_decode(Storage::get('all.json')));

        Storage::put('givers.json', $all);
        Storage::put('takers.json', $all);
    }
}
