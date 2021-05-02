<?php

namespace App\Http\Controllers;
use App\Models\departaments;
use App\Http\Requests\departamentsRequest;

use Illuminate\Http\Request;

class departamentsController extends Controller
{
    public function __construct()
    {
       //$this->authorizeResource(departamentsFutbol::class, 'departaments');
    }

    public function index(Request $request) {
        $departaments = departaments::all(); 
        return view('departaments/index', compact('departaments'));
    }
  
    public function create() { 
        return view('departaments/create');
     }

     public function store(departamentsRequest $request) { 
        $departaments = departaments::create($request->all());
        return redirect()->route('departaments.index');
     }

    public function show (departaments $departaments, $id) {
        $departaments = departaments::findOrFail ($id);
        return view ('departaments/show', compact('departaments'));
    }

    public function edit(departaments $departament) { 
        return view('departaments/edit', compact('departament'));
    }

     public function update(Request $request, departaments $departament) { 
        $request->validate([ 
            'name' => 'required | max:255',
        ]);
        $departament->update($request->all());
        return redirect()->route('departaments.index');
    }

     public function destroy(departaments $departament) {
        $departament->delete();
        return redirect()->route('departaments.index');
       
    }
}
