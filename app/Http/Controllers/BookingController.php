<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Bookings = Booking::all();
        return view('admin.layout.reservations',compact('Bookings'));
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
          Booking::create([
          'name' => $request->name,
          'email' => $request->email,
           'date' => $request->date,
           'time' => $request->time,
           'message' => $request->message,
           'numberofpeople' =>$request->numberofpeople,
        ]);
        return redirect('tripcruds');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Booking::destroy($id);
        return redirect()->route('booknows.index');
    }
}
