<?php

namespace App\Http\Controllers;

use App\Models\Ourtripcrud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OurtripcrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourtripcruds = Ourtripcrud::paginate(10);

        return view('home.ourtrip', compact('ourtripcruds'));
    }

    public function packages()
    {

        $ourtripcruds = Ourtripcrud::paginate(10);

        return view('admin.layout.packages', compact('ourtripcruds'));
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'duration' => 'required|string',
            'availability' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $ourtripcrud = Ourtripcrud::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($ourtripcrud->image) {
                Storage::delete('public/' . $ourtripcrud->image);
            }
            $imagePath = $request->file('image')->store('images/trips', 'public');
            $validatedData['image'] = $imagePath;
        }

        $ourtripcrud->update([
            'title' => $validatedData['title'],
            'image' => $validatedData['image'] ?? $ourtripcrud->image,
            'duration' => $validatedData['duration'],
            'availability' => $validatedData['availability'],
            'location' => $validatedData['location'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
        ]);

        return redirect('tripcruds');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ourtripcrud = Ourtripcrud::findOrFail($id);
        if ($ourtripcrud->image) {
            Storage::delete('public/' . $ourtripcrud->image);
        }
        $ourtripcrud->delete();
        return redirect('tripcruds');
    }
}
