<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateFlightRequest;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        /* update
        $flight = Flight::find(2);
        $flight->name = 'Paris to London';
        $flight->save();
        */

        /* mutiple update
        Flight::where('number', 11111)
      ->where('company', 'alitalia')
      ->update(['destination' => 'madrid']);

      */

      /* delete
      $flight = Flight::find(2);
      $flight->delete();

      */

     // Flight::destroy(1);

        $flights = Flight::all();
        return view('index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $flight = new Flight;
            $flight->name = $request->name;
            $flight->destination = $request->destination;
            $flight->company = $request->company;
            $flight->number = $request->number;
            $flight->save();
            return redirect('/flights');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlightRequest $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight)
    {
        //
    }
}
