<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\Url;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $this->model->create($data);

        return redirect()->route('shorten.index');
    }

    public function listUrls()
    {
        $userId = Auth::user()->id;
        $urls = Url::where('user_id', $userId)->get();

        return view('users.urls-index', compact('urls'));
    }

    public function showUrl($id)
    {
        if (!$url = Url::find($id))
            return redirect()->route('users.list.urls');

        return view('users.url-show', compact('url'));
    }

    public function editUrl($id)
    {
        if (!$url = Url::find($id))
            return redirect()->route('users.list.urls');

        return view('users.url-edit', compact('url'));
    }

    public function updateUrl(Request $request, $id)
    {
        if (!$url = Url::find($id))
            return redirect()->route('users.list.urls');

        $data = $request->all();

        $url->update($data);

        return redirect()->route('users.list.urls');
    }

    public function destroyUrl($id)
    {
        if (!$url = Url::find($id))
            return redirect()->route('users.list.urls');

        $url->delete();

        return redirect()->route('users.list.urls');
    }
}