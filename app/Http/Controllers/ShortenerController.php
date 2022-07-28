<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShortenerController extends Controller
{
    public function index()
    {
        return view('shorten.shorten');
    }

    public function shortening(Request $request)
    {
        $url = $request->input('url');

        $api = Http::get("https://ulvis.net/API/write/get?url={$url}&type=json");

        $data = $api['data'];

        return redirect()->route('url.create', $data);
    }
}