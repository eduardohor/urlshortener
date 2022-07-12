<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\Url;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function indexUsers()
    {
        $users = User::all();

        return view('admin.index-users', compact('users'));
    }

    public function showUser($id)
    {
        if (!$user = User::find($id))
            return redirect()->route('users.index');

        return view('admin.show-user', compact('user'));
    }

    public function editUser($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.index');

        return view('admin.edit-user', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $data = $request->all();

        $user->update($data);

        return redirect()->route('users.index');
    }

    public function destroyUser($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $user->delete();

        return redirect()->route('users.index');
    }

    public function indexUrls()
    {
        $urls = Url::all();

        return view('admin.index-urls', compact('urls'));
    }
}