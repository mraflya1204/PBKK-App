<?php

namespace App\Http\Controllers;

use \App\Models\Ninja;
use \App\Models\Dojo;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function index(){
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
        return view('ninjas.index', ["ninjas" => $ninjas]);
    }
    
    public function show($id){
        $ninja = Ninja::with('dojo')->findOrFail($id);
        return view('ninjas.show', ['ninja' => $ninja]);
    }
    public function create(){
        $dojoList = Dojo::all();
        return view('ninjas.create', ['dojoList' => $dojoList]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|integer|min:10|max:100',
            'specialty' => 'required|in:Stealth,Espionage,Assasination,Martial Arts,Thievery',
            'skill' => 'required|integer|min:30|max:100',
            'bio' => 'required',
            'dojo_id' => 'required|exists:dojos,id'
        ]);

        Ninja::create($validated);
        
        return redirect()->route('ninjas.index')->with('success', 'Ninja created successfully!');
    }

    public function destroy($id){
        $ninja = Ninja::findOrFail($id);
        $ninja->delete();
        return redirect()->route('ninjas.index')->with('success', 'Ninja deleted successfully!');
    }
}
