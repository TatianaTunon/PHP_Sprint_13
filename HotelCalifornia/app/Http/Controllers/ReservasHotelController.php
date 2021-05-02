<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservas;
use App\Http\Requests\reservasRequest;

class ReservasHotelController extends Controller
{
    
    public function index(Request $request) {
        $reservas = reservas::all(); 
        return view('reservas/index', compact('reservas'));
    }

    public function create() { 
        return view('reservas/create');
     }

     public function store(reservasRequest $request) { 
        $reservas = reservas::create($request->all());
        return redirect()->route('reservas.index');
     }

    public function show (reservas $reservas, $id) {
        $reservas = reservas::findOrFail ($id);
        return view ('reservas/show', compact('reservas'));
    }

    public function edit(reservas $reserva) { 
        return view('reservas/edit', compact('reserva'));
    }

     public function update(Request $request, reservas $reserva) { 
        $request->validate([ 
            'name' => 'required | max:255',
            'last_name' => 'required | max:255',
            'phone' => 'required | max:255',
            'date_entrada' => 'required | max:255',
            'date_salida' => 'required | max:255',
            'number_room' => 'required | max:255',
        ]);
        $reserva->update($request->all());
        return redirect()->route('reservas.index');
    }

     public function destroy(reservas $reserva) {
        $reserva->delete();
        return redirect()->route('reservas.index');
    }

}
