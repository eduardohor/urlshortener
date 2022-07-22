<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UrlController extends Controller
{
    public function __construct(Url $url)
    {
        $this->model = $url;
    }
    public function shorten()
    {
        return view('shorten.shorten');
    }

    public function shortening(Request $request)
    {
        $url = $request->input('url');

        $api = Http::get("https://ulvis.net/API/write/get?url={$url}&type=json");

        $data = $api['data'];

        return view('shorten.create', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $this->model->create($data);


        return redirect()->route('shorten.shorten')->with('create', 'Url salva com sucesso!');
    }
}