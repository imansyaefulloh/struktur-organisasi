<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index()
    {
        $positions = Position::with('subordinates', 'users')->where('parent_id', null)->first();

        // return $positions;

        return view('stuctures.index', compact('positions'));
    }
}
