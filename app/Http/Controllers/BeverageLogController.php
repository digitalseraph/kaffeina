<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Beverage;
use App\Models\BeverageLog;
use Illuminate\Http\Request;

class BeverageLogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beverage_logs = BeverageLog::all();

        return view('beverage_logs.index', compact('beverage_logs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beverage_logs.create');
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
            'user_id' => 'exists:users,id',
            'beverage_id' => 'exists:beverages,id',
            'consumed_at' => 'date_format:M/d/Y H:i:s'
        ]);

        if(Beverage::find($request->beverage_id)->totalCaffeineAmount() > Auth::user()->allowedCaffeineAmount()) {
            $msg = 'That is too much caffeine! Try waiting a bit longer. Caffeine expiration is set to ' .  config('kaffeina.settings.caffeine_expiration_time') . 'hours';
            return redirect('/beverage_logs')->with('error', $msg);
        }

        $beverage_log = BeverageLog::create($validatedData);

        return redirect('/beverage_logs')->with('success', 'BeverageLog has been successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BeverageLog  $beverage_log
     * @return \Illuminate\Http\Response
     */
    public function show(BeverageLog $beverage_log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BeverageLog  $beverage_log
     * @return \Illuminate\Http\Response
     */
    public function edit(BeverageLog $beverage_log)
    {
        return view('beverage_logs.edit', compact('beverage_log'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BeverageLog  $beverage_log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BeverageLog $beverage_log)
    {
        $validatedData = $request->validate([
            'user_id' => 'exists:users,id',
            'beverage_id' => 'exists:beverages,id',
            'consumed_at' => 'date_format:M/d/Y H:i:s'
        ]);
        $beverage_log->update($validatedData);

        return redirect('/beverage_logs')->with('success', 'BeverageLog has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BeverageLog  $beverage_log
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeverageLog $beverage_log)
    {
        $beverage_log->delete();

        return redirect('/beverage_logs')->with('success', 'BeverageLog has been successfully deleted');
    }
}
