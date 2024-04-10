<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSlider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use File;

class HomeSliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
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
            $home_slider = HomeSlider::create([
                'title' => $request->title,
                'description' => $request->description,
                'url' => '/images/' . $imageName,
            ]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to create home slider: ' . $e->getMessage()], 500);
        }

        $request->session()->flash('success', 'Home Slider created successfully!');

        return Redirect::route('home_sliders');
    }

    public function destroy($id)
    {
        $home_slider = HomeSlider::findOrFail($id);
        if (Storage::disk('public')->exists($home_slider->url)) {
            Storage::disk('public')->delete($home_slider->url);
        }

        $home_slider->delete();

        session()->flash('success', 'Home slider deleted successfully!');
        return redirect()->route('home_sliders');
    }

    public function edit(HomeSlider $home_slider)
    {
        return view('home_sliderEdit', compact('home_slider'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:9096000',
        ];

        // Validate request data
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Fetch the home_image to update
        $home_slider = HomeSlider::findOrFail($id);

        // Handle image update (if image is provided in the request)
        if ($request->hasFile('image')) {
            try {
                // Delete existing image (optional, depending on your logic)
                if ($home_slider->url) {
                    $existingImagePath = public_path(str_replace('/images/', '', $home_slider->url));
                    if (File::exists($existingImagePath)) {
                        File::delete($existingImagePath);
                    }
                }

                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $home_slider->url = '/images/' . $imageName;
            } catch (Exception $e) {
                return response()->json(['message' => 'Failed to upload image: '  . $e->getMessage()], 500);
            }
        }

        // Update home$home_slider data
        $home_slider->title = $request->title;
        $home_slider->description = $request->description;
       

        // Save changes to the database
        $home_slider->save();

        $request->session()->flash('success', 'Home slider updated successfully!');

        return Redirect::route('home_sliders');
    }
}
