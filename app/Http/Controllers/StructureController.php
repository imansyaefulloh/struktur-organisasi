<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index()
    {
        $positions = Position::with('boss')->orderBy('id')->paginate($this->limit);
        $positionsCount = Position::count();

        return view('positions.index', compact('positions', 'positionsCount'));
    }
}
