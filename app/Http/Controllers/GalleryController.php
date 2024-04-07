<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Facades\Validator;
use App\Models\GalleryImage;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'gallerytext' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Validate request data
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Store image (with error handling)
        try {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to upload image: ' . $e->getMessage()], 500);
        }

        // Create post (with error handling)
        try {
            $gallery = GalleryImage::create([
                'gallerytext' => $request->gallerytext,
                'url' => '/images/' . $imageName,
            ]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to create gallery: ' . $e->getMessage()], 500);
        }

        $request->session()->flash('success', 'Gallery Image created successfully!');

        return Redirect::route('gallery');
    }

    public function edit(GalleryImage $gallery)
    {
        return view('GalleryEdit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules
        $rules = [
            'gallerytext' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Validate request data
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Fetch the gallery to update
        $gallery = GalleryImage::findOrFail($id);

        // Handle image update (if image is provided in the request)
        if ($request->hasFile('image')) {
            try {
                // Delete existing image (optional, depending on your logic)
                if ($gallery->url) {
                    $existingImagePath = public_path(str_replace('/images/', '', $gallery->url));
                    if (File::exists($existingImagePath)) {
                        File::delete($existingImagePath);
                    }
                }

                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $gallery->url = '/images/' . $imageName;
            } catch (Exception $e) {
                return response()->json(['message' => 'Failed to upload image: ' . $e->getMessage()], 500);
            }
        }

        // Update gallery data
        $gallery->gallerytext = $request->gallerytext;

        // Save changes to the database
        $gallery->save();

        $request->session()->flash('success', 'Gallery updated successfully!');

        return Redirect::route('gallery');
    }


    public function destroy($id)
    {
        $gallery = GalleryImage::findOrFail($id);
        if (Storage::disk('public')->exists($gallery->url)) {
            Storage::disk('public')->delete($gallery->url);
        }

        $gallery->delete();

        session()->flash('success', 'Gallery deleted successfully!');
        return redirect()->route('gallery');
    }
}
