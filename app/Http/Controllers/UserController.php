<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        $users = User::all();

        return view('users.admin-users-index', compact('users'));
    }

    public function show($id)
    {
        if (!$user = User::find($id))
            return redirect()->route('user.index');

        return view('users.admin-users-show', compact('user'));
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


    public function indexUrls()
    {
        return view('users.admin-urls');
    }
}