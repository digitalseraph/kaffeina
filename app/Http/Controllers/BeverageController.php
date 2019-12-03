<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use Illuminate\Http\Request;

class BeverageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beverages = Beverage::all();

        return view('beverages.index', compact('beverages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beverages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $beverage = Beverage::create($validatedData);

        return redirect('/beverages')->with('success', 'Beverage is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beverage  $beverage
     * @return \Illuminate\Http\Response
     */
    public function show(Beverage $beverage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beverage  $beverage
     * @return \Illuminate\Http\Response
     */
    public function edit(Beverage $beverage)
    {
        return view('beverages.edit', compact('beverage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beverage  $beverage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beverage $beverage)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $beverage->update($validatedData);

        return redirect('/beverages')->with('success', 'Beverage has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beverage  $beverage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beverage $beverage)
    {
        $beverage->delete();

        return redirect('/beverages')->with('success', 'Beverage has been successfully deleted');
    }
}
