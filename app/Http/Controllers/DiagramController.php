<?php

namespace App\Http\Controllers;

use App\Models\Diagram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use File;

class DiagramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:9048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Store image (with error handling)
        try {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to upload image: ' . $e->getMessage()], 500);
        }

        // Create diagram (with error handling)
        try {
            $diagram = Diagram::create([
                'url' => '/images/' . $imageName,
            ]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to create diagram: ' . $e->getMessage()], 500);
        }

        $request->session()->flash('success', 'Diagram created successfully!');

        return Redirect::route('diagrams');

    }

    public function edit(Diagram $diagram)
    {
        return view('DiagramEdit', compact('diagram'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:9048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $diagram = Diagram::findOrFail($id);

        // Handle image update (if image is provided in the request)
        if ($request->hasFile('image')) {
            try {
                if ($diagram->url) {
                    $existingImagePath = public_path(str_replace('/images/', '', $diagram->url));
                    if (File::exists($existingImagePath)) {
                        File::delete($existingImagePath);
                    }
                }

                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $diagram->url = '/images/' . $imageName;
            } catch (Exception $e) {
                return response()->json(['message' => 'Failed to upload image: ' . $e->getMessage()], 500);
            }
        }

        $diagram->save();

        $request->session()->flash('success', 'Diagram updated successfully!');

        return Redirect::route('diagrams');

    }

    public function destroy($id)
    {
        $diagram = Diagram::find($id);

        if (!$diagram) {
            return abort(404);
        }

        // Delete the associated image file (if any)
        if ($diagram->url) {
            Storage::delete($diagram->url);
        }

        $diagram->delete();

        return redirect()->route('diagrams')->with('success', 'Diagram deleted successfully!');
    }
}
