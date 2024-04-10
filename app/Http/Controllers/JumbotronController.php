<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jumbotron;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use File;

class JumbotronController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        // Validation rules
        $rules = [            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:8048',
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
            $gallery = Jumbotron::create([           
                'url' => '/images/' . $imageName,
            ]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to create jumbotron: ' . $e->getMessage()], 500);
        }

        $request->session()->flash('success', 'Jumbotron Image created successfully!');

        return Redirect::route('jumbotrons');
    } 

    public function destroy($id)
    {
        $jumbotron = Jumbotron::findOrFail($id);
        if (Storage::disk('public')->exists($jumbotron->url)) {
            Storage::disk('public')->delete($jumbotron->url);
        }

        $jumbotron->delete();

        session()->flash('success', 'Jumbotron deleted successfully!');
        return redirect()->route('jumbotrons');
    }
}
