<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Resources\TodoCollection;
class TodoController extends Controller
{
    
    public function index(){
        
        $todo = Todo::all();
        if(!isset($todo)){
            return 'No hay toDos en db';
        }
        // $todo = $todo->with('states');
        return new TodoCollection($todo);
    }

    public function store(Request $req){
        if(!$req->title || !$req->description){
            return 'Faltan datos';
        }

        $existe = Todo::where('title','=',$req->title)->get();
        
        if(isset($existe->id)){
            return 'Ya existe una todo con el mismo nombre';
        }

        Todo::create([
            'title'=> $req->title,
            'description' => $req->description,
            'state_id' => 1
        ]);

        return 'creada';
    }
}
