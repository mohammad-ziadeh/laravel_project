<?php
namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('admin.layout.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.layout.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('gallery_images', 'public');

        Gallery::create([
            'image' => $imagePath,
        ]);

        return redirect()->route('galleries.index');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.layout.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
        if (Storage::exists('public/' . $gallery->image)) {
            Storage::delete('public/' . $gallery->image);
        }

        $imagePath = $request->file('image')->store('gallery_images', 'public');
        $gallery->update(['image' => $imagePath]);
    }

    return redirect()->route('galleries.index')->with('success', 'Gallery image updated successfully.');
}

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->route('galleries.index');
    }
}
