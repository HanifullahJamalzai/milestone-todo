<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('master.todos')->with('todos', $todos);
    }

    public function create(){
        return view('master.create');
    }

    public function store(){

        // laravel request
        // dd(request()->all());

        $data = request()->all();
        // dd($data);

        if(request()->status){
            $data['status'] = true;
        }else{
            $data['status'] = false;
        }

        // dd($data);
        
        $todo = new Todo;

        $todo->create($data);

        return redirect()->route('todos');
    }
}
