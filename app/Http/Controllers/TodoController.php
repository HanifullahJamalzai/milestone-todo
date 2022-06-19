<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return view('master.todos');
    }

    public function create(){
        return view('master.create');
    }

    public function store(){
        return 'storing data';
    }
}
