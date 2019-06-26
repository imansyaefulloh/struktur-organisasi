<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    private $tree_string = "";

    public function index()
    {
        $positions = Position::with('subordinates', 'users')->where('parent_id', null)->first();

        return view('stuctures.index', compact('positions'));
    }

    /**
     * TODO
     * Implements ORG Chart
     */
    public function generateTree($positions)
    {
        $this->tree_string = "";
        $this->tree_string .= "<ul id='org' style='display:none'>";
        $this->tree_string .= "<li>$positions->name</li>";
        foreach ($positions->subordinates as $position) {
            $this->tree_string .= "<ul>";
            $this->tree_string .= "<li>$position->name";

            if ($position->subordinates()->exists()) {
                $this->recursiveTree($position->subordinates);
            }

            $this->tree_string .= "</li>";
        }

        $this->tree_string .= "</ul>";

        return $this->tree_string;
    }

    public function recursiveTree($subordinateChilds)
    {
        foreach ($subordinateChilds as $sub) {
            $this->tree_string .= "<ul>";
            $this->tree_string .= "<li>$sub->name";
            
            if ($sub->users()->exists()) {
                // @include('stuctures.users',['users' => $sub->users])
            }

            $this->tree_string .= "</li>";
            
            if ($sub->subordinates()->exists()) {
                $this->recursiveTree($sub->subordinates);
            }

            $this->tree_string .= "</ul>";
        }
    }
}
