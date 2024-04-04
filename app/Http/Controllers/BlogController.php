<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventCreated;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use File;

 
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
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
            'content' => 'required|string',
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
            $event = BlogPost::create([
                'title' => $request->title,
                'content' => $request->content,                                
                'url' => '/images/' . $imageName,
            ]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to create blog: ' . $e->getMessage()], 500);  
        }
    
        $request->session()->flash('success', 'Blog Post created successfully!');

        return Redirect::route('blogs');
    }

    public function edit(BlogPost $blog)
    {
        return view('BlogEdit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules
        $rules = [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  
        ];
    
        // Validate request data
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    
        // Fetch the blog post to update
        $post = BlogPost::findOrFail($id);
    
        // Handle image update (if image is provided in the request)
        if ($request->hasFile('image')) {
            try {
                // Delete existing image (optional, depending on your logic)
                if ($post->url) {
                    $existingImagePath = public_path(str_replace('/images/', '', $post->url));
                    if (File::exists($existingImagePath)) {
                        File::delete($existingImagePath);
                    }
                }
    
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $post->url = '/images/' . $imageName;
            } catch (Exception $e) {
                return response()->json(['message' => 'Failed to upload image: ' . $e->getMessage()], 500);
            }
        }
    
        // Update post data
        $post->title = $request->title;
        $post->content = $request->content;
    
        // Save changes to the database
        $post->save();
    
        $request->session()->flash('success', 'Blog Post updated successfully!');
    
        return Redirect::route('blogs'); 
    }
    

    public function destroy($id)
    {
        $blog = BlogPost::findOrFail($id);
        if (Storage::disk('public')->exists($blog->url)) {
            Storage::disk('public')->delete($blog->url);
        }
    
        $blog->delete();

        session()->flash('success', 'BLog deleted successfully!');
        return redirect()->route('blogs');
    }
    
}
