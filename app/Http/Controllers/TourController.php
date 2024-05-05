<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use File;
use Illuminate\Support\Facades\Validator;

class TourController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'video' => 'required|file|max:10240',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }



        try {
            $videoName = time() . '.' . $request->video->getClientOriginalExtension();
            $request->video->move(public_path('videos'), $videoName);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to upload video: ' . $e->getMessage()], 500);
        }

        // Create tour (with error handling)
        try {
            $tour = Tour::create([
                'title' => $request->title,
                'url' => '/videos/' . $videoName,
            ]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to create tour: ' . $e->getMessage()], 500);
        }

        $request->session()->flash('success', 'Video Tour created successfully!');

        return Redirect::route('tours');

    }

    public function edit(Tour $tour)
    {
        return view('TourEdit', compact('tour'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'video' => 'required|file|max:10240',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $tour = Tour::find($id);

            if (!$tour) {
                return abort(404);
            }



            if ($request->hasFile('video')) {
                try {
                    if ($tour->url) {
                        $existingVideoPath = public_path(str_replace('/videos/', '', $tour->url));
                        if (File::exists($existingVideoPath)) {
                            File::delete($existingVideoPath);
                        }
                    }

                    $videoName = time() . '.' . $request->video->getClientOriginalExtension();
                    $request->video->move(public_path('videos'), $videoName);
                    $tour->url = '/videos/' . $videoName;
                } catch (Exception $e) {
                    return response()->json(['message' => 'Failed to upload video: ' . $e->getMessage()], 500);
                }
            }

            $tour->title = $request->title;

            $tour->save();

            $request->session()->flash('success', 'Video Tour updated successfully!');

            return Redirect::route('tours');
    }


    public function destroy($id)
    {
        $tour = Tour::find($id);

        if (!$tour) {
            return abort(404);
        }

        // Delete the associated video file (if any)
        if ($tour->url) {
            Storage::delete($tour->url);
        }

        $tour->delete();

        return redirect()->route('tours')->with('success', 'Video Tour deleted successfully!');
    }


}
