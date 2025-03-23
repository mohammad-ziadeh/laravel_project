<?php

namespace App\Http\Controllers;

use App\Models\ourtrips;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurtripsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.ourtrip');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $categories = $request->input('tax-tour_category'); 

    $min_price = $request->input('min-price'); 
    $max_price = $request->input('max-price');

        ourtrips::create([
            'category' => implode(', ', $categories),
            'duration'=>$request->duration,
            'date'=>$request->date,
            'month'=>$request->month,
            'min_price' => $min_price,
            'max_price' => $max_price,
            'rating' => $request->rating ?? 0,
        ]);
        return view('home.ourtrip');
    }

    /**
     * Display the specified resource.
     */
    public function show(ourtrips $ourtrips)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ourtrips $ourtrips)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ourtrips $ourtrips)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ourtrips $ourtrips)
    {
        //
    }
}
