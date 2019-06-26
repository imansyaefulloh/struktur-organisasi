<?php

namespace App\Http\Controllers;

use App\User;
use App\Position;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $limit = 5;

    public function index()
    {
        $users = User::with('position')->orderBy('id')->paginate($this->limit);

        return view('users.index', compact('users'));
    }

    public function create()
    {
        $user = new User;
        return view('users.create', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'position_id' => $request->position_id
        ]);

        return redirect('users')->with('message', 'New user created successfully!');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'position_id' => $request->position_id
        ]);

        return redirect('users')->with('message', 'User was updated successfully!');
    }

    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // delete semua posisi yang memiliki parent_id yang dimiliki oleh user yang mau di delete
        Position::where('parent_id', $user->position_id)->delete();

        $user->delete();

        return redirect('users')->with('message', 'User  was deleted successfully!');
    }
}
