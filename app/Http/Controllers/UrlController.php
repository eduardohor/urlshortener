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

    public function create(Request $request)
    {
        $data = $request->all();

        return view('urls.create', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $this->model->create($data);

        return redirect()->route('shorten.index')->with('create', 'Url salva com sucesso!');
    }

    public function index(Request $request)
    {

        $urls = $this->model->getUrlsUser(
            $request->search ?? ''
        );

        return view('urls.index', compact('urls'));
    }

    public function show($id)
    {
        if (!$url = $this->model->find($id))
            return redirect()->route('index.urls');

        return view('urls.show', compact('url'));
    }

    public function edit($id)
    {
        if (!$url = $this->model->find($id))
            return redirect()->route('index.urls');

        return view('urls.edit', compact('url'));
    }

    public function update(Request $request, $id)
    {
        if (!$url = $this->model->find($id))
            return redirect()->route('index.urls');

        $data = $request->only('title');

        $url->update($data);

        return redirect()->route('url.show', compact('id'))->with('edit', 'Url editada com sucesso!');
    }

    public function destroy($id)
    {
        if (!$url = $this->model->find($id))
            return redirect()->route('index.urls');

        $url->delete();

        return redirect()->route('index.urls')->with('destroy', 'Url deletada com sucesso!');
    }

    public function indexByAdmin(Request $request)
    {

        $urls = $this->model->getUrlsAdmin(
            $request->search ?? ''
        );

        return view('urls.index-admin', compact('urls'));
    }

    public function showByAdmin($id)
    {
        if (!$url = $this->model->find($id))
            return redirect()->route('urls.index.admin');

        return view('urls.show-admin', compact('url'));
    }

    public function editByAdmin($id)
    {
        if (!$url = $this->model->find($id))
            return redirect()->route('urls.index.admin');

        return view('urls.edit-admin', compact('url'));
    }

    public function updateByAdmin(Request $request, $id)
    {
        if (!$url = $this->model->find($id))
            return redirect()->route('urls.index.admin');

        $data = $request->only('title');

        $url->update($data);

        return redirect()->route('url.show.admin', compact('id'))->with('edit', 'Url editada com sucesso!');
    }

    public function destroyByAdmin($id)
    {
        if (!$url = $this->model->find($id))
            return redirect()->route('urls.index.admin');

        $url->delete();

        return redirect()->route('urls.index.admin')->with('destroy', 'Url deletada com sucesso!');
    }
}