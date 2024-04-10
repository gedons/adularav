<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeImage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use File;

class HomeImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'headertext' => 'required|string|max:255',
            'bodytext' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:9096000',
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

        // Create slider (with error handling)
        try {
            $home_image = HomeImage::create([
                'headertext' => $request->headertext,
                'bodytext' => $request->bodytext,
                'url' => '/images/' . $imageName,
            ]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to create: ' . $e->getMessage()], 500);
        }

        $request->session()->flash('success', 'Home Image created successfully!');

        return Redirect::route('home_images');
    }

    public function destroy($id)
    {
        $home_image = HomeImage::findOrFail($id);
        if (Storage::disk('public')->exists($home_image->url)) {
            Storage::disk('public')->delete($home_image->url);
        }

        $home_image->delete();

        session()->flash('success', 'Home Image deleted successfully!');
        return redirect()->route('home_images');
    }

    public function edit(HomeImage $home_image)
    {
        return view('home_imageEdit', compact('home_image'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules
        $rules = [
            'headertext' => 'required|string|max:255',
            'bodytext' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:9096000',
        ];

        // Validate request data
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Fetch the home_image to update
        $home_image = HomeImage::findOrFail($id);

        // Handle image update (if image is provided in the request)
        if ($request->hasFile('image')) {
            try {
                // Delete existing image (optional, depending on your logic)
                if ($home_image->url) {
                    $existingImagePath = public_path(str_replace('/images/', '', $home_image->url));
                    if (File::exists($existingImagePath)) {
                        File::delete($existingImagePath);
                    }
                }

                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $home_image->url = '/images/' . $imageName;
            } catch (Exception $e) {
                return response()->json(['message' => 'Failed to upload image: '  . $e->getMessage()], 500);
            }
        }

        // Update home_image data
        $home_image->headertext = $request->headertext;
        $home_image->bodytext = $request->bodytext;
       

        // Save changes to the database
        $home_image->save();

        $request->session()->flash('success', 'Home Image updated successfully!');

        return Redirect::route('home_images');
    }
}
