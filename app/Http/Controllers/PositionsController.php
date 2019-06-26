<?php

namespace App\Http\Controllers;

use App\User;
use App\Position;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    protected $limit = 5;

    public function index()
    {
        $positions = Position::with('boss')->orderBy('id')->paginate($this->limit);
        $positionsCount = Position::count();

        return view('positions.index', compact('positions', 'positionsCount'));
    }

    public function create()
    {
        $position = new Position();
        return view('positions.create', compact('position'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        Position::create($request->only(['name', 'parent_id']));

        return redirect('positions')->with('message', 'New position created successfully!');
    }

    public function edit($id)
    {
        $position = Position::findOrFail($id);

        return view('positions.edit', compact('position'));
    }

    public function update(Request $request, $id)
    {
        Position::findOrFail($id)->update($request->only(['name', 'parent_id']));

        return redirect('positions')->with('message', 'Position was updated successfully!');
    }

    public function destroy(Request $request, $id)
    {
        $position = Position::findOrFail($id);

        // delete subordinates
        Position::where('parent_id', $position->id)->delete();

        $position->delete();

        return redirect('positions')->with('message', 'Position and all of the subordinates was deleted successfully!');
    }
}
