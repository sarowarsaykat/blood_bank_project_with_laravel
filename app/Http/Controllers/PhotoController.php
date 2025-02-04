<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Validator;
use Toastr;
use File;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::orderBy('id', 'desc')->get();
        return view('backend.photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.photo.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_active' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $photo = new Photo();
        $photo->title = $request->title;
        $photo->is_active = $request->is_active;
        $photo->created_by = auth()->id();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/photos/'), $filename);
            $photo->image = $filename;
        }

        $save = $photo->save();
        if ($save) {
            Toastr::success('Success', 'Photo uploaded successfully!');
            return redirect()->route('photos.index');
        } else {
            Toastr::error('Error', 'Any Problem Occured');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $photo = Photo::findOrFail($id);
        return view('backend.photo.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'is_active' => 'required|boolean',
            ]
        );

        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Toastr::error($message, 'Failed');
            }
            return back()->withInput();
        }

        $photo = Photo::findOrFail($id);
        $photo->title = $request->title;
        $photo->is_active = $request->is_active;
        $photo->updated_by = auth()->id(); 

        if ($request->hasFile('image')) {
            $destination = 'uploads/photos/' . $photo->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            // Store the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/photos/', $filename);
            $photo->image = $filename;
        }
         $save = $photo->save();

        if ($save) {
            Toastr::success('Success', 'Photo updated successfully!');
            return redirect()->route('photos.index');
        } else {
            Toastr::error('Error', 'An issue occurred while updating the photo.');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);

        $imagePath = 'uploads/photos/' . $photo->image;
        if ($photo->image && File::exists($imagePath)) {
            File::delete($imagePath); // Delete the image file
        }
        $delete = $photo->delete();

        if ($delete) {
            Toastr::success('Success', 'Photo deleted successfully!');
            return redirect()->route('photos.index');
        } else {
            Toastr::error('Error', 'An issue occurred while deleting the photo.');
            return redirect()->back();
        }
    }
}
