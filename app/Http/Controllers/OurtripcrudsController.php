<?php

namespace App\Http\Controllers;

use App\Models\Ourtripcrud;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurtripcrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourtripcruds = Ourtripcrud::all();
        return view('home.ourtrip', compact('ourtripcruds'));
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
        $validatedData = [];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/trips', 'public');

            $validatedData['image'] = $imagePath;
        }

        Ourtripcrud::create([
            'title' => $request->title,
            'image' => $validatedData['image'] ?? null,
            'duration' => $request->duration,
            'availability' => $request->availability,
            'location' => $request->location,
            'description' => $request->description,
            'reviews_count' => $request->reviews_count,
            'price' => $request->price,
        ]);

        return redirect('tripcruds');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ourtripcrud $ourtripcruds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ourtripcruds = Ourtripcrud::findOrFail($id);
        return view('home.edit', compact('ourtripcruds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = [];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/trips', 'public');

            $validatedData['image'] = $imagePath;
        }


        $ourtripcruds = Ourtripcrud::findOrFail($id);
        $ourtripcruds->update([
            'title' => $request->title,
            'image' => $validatedData['image'] ?? null,
            'duration' => $request->duration,
            'availability' => $request->availability,
            'location' => $request->location,
            'description' => $request->description,
            'reviews_count' => $request->reviews_count,
            'price' => $request->price,
        ]);
        return redirect('tripcruds');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Ourtripcrud::destroy($id);
        return redirect('tripcruds');
    }
}
