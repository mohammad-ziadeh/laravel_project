<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Ourtripcrud; 

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourtripcruds = Ourtripcrud::paginate(10);
        
        return view('admin.layout.packages.index', compact('ourtripcruds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layout.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'duration' => 'required|string',
            'availability' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'reviews_count' => 'required|integer',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/trips', 'public');
            $validatedData['image'] = $imagePath;
        }

        Ourtripcrud::create([
            'title' => $validatedData['title'],
            'image' => $validatedData['image'] ?? null,
            'duration' => $validatedData['duration'],
            'availability' => $validatedData['availability'],
            'location' => $validatedData['location'],
            'description' => $validatedData['description'],
            'reviews_count' => $validatedData['reviews_count'],
            'price' => $validatedData['price'],
        ]);

        return redirect('packages');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ourtripcrud = Ourtripcrud::findOrFail($id);
        
        return view('admin.layout.packages.edit', compact('ourtripcrud'));
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
            'reviews_count' => 'required|integer',
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
            'reviews_count' => $validatedData['reviews_count'],
            'price' => $validatedData['price'],
        ]);

        return redirect()->route('packages.index')->with('success', 'Package updated successfully!');
    }

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

        
        return redirect()->route('packages.index')->with('success', 'Package updated successfully!');
    }
}
