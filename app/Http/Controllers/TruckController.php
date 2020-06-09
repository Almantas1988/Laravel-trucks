<?php

namespace App\Http\Controllers;

use App\Rules\MarkeName;
use App\Rules\NameSurname;
use App\Rules\TruckYear;
use App\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    public function index()
    {
        $trucks = Truck::all();

        $trucks = Truck::sortable()->paginate(20);

        return view('trucks.index', compact('trucks'));
    }

    public function create()
    {
        $trucks = Truck::all();

        return view('trucks.create', compact('trucks'));

    }

    public function store(Request $request)
    {
        $trucks = new Truck();
        $trucks->marke = $request->input('marke');
        $trucks->gamybos_metai = $request->input('gamybos_metai');
        $trucks->savininko_vardas_pavarde = $request->input('savininko_vardas_pavarde');
        $trucks->savininku_skaicius = $request->input('savininku_skaicius');
        $trucks->komentarai = $request->input('komentarai');

        session()->flash('message', 'Sunkvežimis sėkmingai pridėtas');

        $request->validate([
            'marke' => ['required', new MarkeName()],
            'gamybos_metai' =>  ['required', new TruckYear],
            'savininko_vardas_pavarde' => ['required', new NameSurname],
        ]);

        $trucks->save();

        return redirect()->route('trucks.index');
    }

}
