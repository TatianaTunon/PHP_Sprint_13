<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleats;
use App\Http\Requests\empleatsRequest;

class empleatsController extends Controller
{

    public function index(Request $request) {
        $empleats = empleats::all(); 

             //Modificación para el boton search
             $departament_id = $request->get('buscar');
             $empleats = empleats::where('departament_id','like',"%$departament_id%")->paginate();

        return view('empleats/index', compact('empleats'));
    }

    public function create() { 
        return view('empleats/create');
     }

     public function store(empleatsRequest $request) { 
        $empleats = empleats::create($request->all());
        return redirect()->route('empleats.index');
     }

    public function show (empleats $empleats, $id) {
        $empleats = empleats::findOrFail ($id);
        return view ('empleats/show', compact('empleats'));
    }

    public function edit(empleats $empleat) { 
        return view('empleats/edit', compact('empleat'));
    }
    
     public function update(Request $request, empleats $empleat) { 
        $request->validate([ 
            'name' => 'required | max:255',
            'last_name' => 'required | max:255',
            'DNI' => 'required | max:255',
            'phone' => 'required | max:255',
            'departament_id' => 'required | max:255',
        ]);
        $empleat->update($request->all());
        return redirect()->route('empleats.index');
    }

     public function destroy(empleats $empleat) {
        $empleat->delete();
        return redirect()->route('empleats.index');
    }
}
