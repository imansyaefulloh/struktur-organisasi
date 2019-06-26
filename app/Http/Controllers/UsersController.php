<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->paginate($this->limit);
        $usersCount = User::count();

        return view('users.index', compact('users', 'usersCount'));
    }

    // public function create()
    // {
    //     $user = new user();
    //     return view('backend.users.create', compact('user'));
    // }

    // public function store(UserStoreRequest $request)
    // {
    //     $data = $request->all();
    //     $data['password'] = bcrypt($data['password']);
    //     $user = User::create($data);
    //     $user->attachRole($request->role);

    //     return redirect('/backend/users')->with('message', 'New user was created successfully!');
    // }

    // public function edit($id)
    // {
    //     $user = User::findOrFail($id);

    //     return view('backend.users.edit', compact('user'));
    // }

    // public function update(UserUpdateRequest $request, $id)
    // {
    //     $data = $request->all();
    //     $data['password'] = bcrypt($data['password']);
        
    //     $user = User::findOrFail($id);
    //     $user->update($data);
        
    //     $user->detachRoles();
    //     $user->attachRole($request->role);

    //     return redirect('/backend/users')->with('message', 'User was updated successfully!');
    // }

    // public function destroy(UserDestroyRequest $request, $id)
    // {
    //     $user = User::findOrFail($id);

    //     $deleteOption = $request->delete_option;
    //     $selectedUser = $request->selected_user;

    //     if ($deleteOption == 'delete') {
    //         // TODO
    //         // DELETE post image before deleting the posts
    //         $user->posts()->withTrashed()->forceDelete();
    //     } elseif ($deleteOption == 'attribute') {
    //         $user->posts()->update(['author_id' => $selectedUser]);
    //     }

    //     $user->delete();

    //     return redirect('/backend/users')->with('message', 'User was deleted successfully!');
    // }
}
