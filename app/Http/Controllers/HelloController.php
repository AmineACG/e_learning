<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;
class HelloController extends Controller
{
    public function index(){
        $names = Name::all();
        return view('hello',compact('names'));

    }

    public function store(Request $request){
        $request->validate([
            'name' =>'required|string|max:255'
        ]);

        Name::create([
            'name'=>$request->name
        ]);

        return redirect('/hello');
    }


    public function show($name = "World"){
        return view('hello',['name'=>$name]);
    }
}
