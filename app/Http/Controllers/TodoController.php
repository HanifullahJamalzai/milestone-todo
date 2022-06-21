<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(){
        // $todos = Todo::all(); //Fetch all todos from Model
        
        $todos = Todo::orderBy('id', 'desc')->paginate(8);
        return view('master.todos')->with('todos', $todos);
    }

    public function create(){
        return view('master.create');
    }

    public function store(TodoRequest $request){

        // This validation is used for small data 

        // $request->validate([
        //     'status' => 'required',
        // ]);

        // First Way
        $data['description'] = $request->description;
        if($request->status){
            $data['status'] = true;
        }else{
            $data['status'] = false;
        }
        // $todo = new Todo;
        // $todo->create($data);
        
        //You can insert all data at once, but here is a problem of boolean
        // Todo::create($request->all());
        // Todo::create($request->all());

        // Eloquent another way
        // $todo = new Todo();
        // $todo->status = $request->status ? true : false;
        // $todo->description = $request->description;
        // $todo->save();

        // Query builder
        DB::table('todos')->insert($data);


        return redirect()->route('todos');
    }
}
