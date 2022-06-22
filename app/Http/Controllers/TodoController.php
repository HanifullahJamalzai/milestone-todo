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

        // another way
            // Todo::create(
            //     $request->validate([
            //         'description' => 'required',
            //     ])
            // );

        // another 2 way
        //  $data = $request->validate([
        //     'description' => 'required',
        //     ]);
        // Todo::create($data);


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
        // DB::table('todos')->insert($data);


        return redirect()->route('todos');
    }

    public function show($id){
        $data = Todo::findOrFail($id);
        // $data = Todo::find($id);
        return view('master.show', compact('data'));
    }

    public function destroy($id){
        $data = Todo::findOrFail($id)->delete();
        return redirect()->route('todos');
    }

    public function edit($id){
        $data = Todo::findOrFail($id);
        return view('master.edit', compact('data'));
    }
}
