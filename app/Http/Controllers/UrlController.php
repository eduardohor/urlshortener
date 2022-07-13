<?php

namespace App\Http\Controllers;

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

    public function index()
    {

        return view('shorten.index');
    }

    public function urlShorten(Request $request)
    {
        $url = $request->input('url_long');

        $api = Http::get("https://ulvis.net/API/write/get?url={$url}&type=json");

        $data = $api['data'];


        return view('shorten.create', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $this->model->create($data);

        return dd($data);
    }
}