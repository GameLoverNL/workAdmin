<?php

namespace App\Http\Controllers;

use App\Models\Hour;
use Illuminate\Http\Request;

class HourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hours.show', [
            'hours' => auth()->user()->hours
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hours = $request->validate([
            'start_time' => 'numeric',
            'end_time' => 'numeric',
        ]);

        Hour::create([
            'user_id' => auth()->user(),
            'start_time' => $hours['start_time'],
            'end_time' => $hours['end_time'],
            'day' => 'Monday',
            'week' => 1,
            'total' => 20.5
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hour $hour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hour $hour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hour $hour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hour $hour)
    {
        //
    }
}
