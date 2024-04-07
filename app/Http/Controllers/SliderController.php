<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderImage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use File;


class SliderController extends Controller
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
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
            $event = SliderImage::create([
                'headertext' => $request->headertext,
                'bodytext' => $request->bodytext,
                'url' => '/images/' . $imageName,
            ]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to create blog: ' . $e->getMessage()], 500);
        }

        $request->session()->flash('success', 'Slider Image created successfully!');

        return Redirect::route('sliders');
    }

    public function destroy($id)
    {
        $slider = SliderImage::findOrFail($id);
        if (Storage::disk('public')->exists($slider->url)) {
            Storage::disk('public')->delete($slider->url);
        }

        $slider->delete();

        session()->flash('success', 'Slider deleted successfully!');
        return redirect()->route('sliders');
    }
}
