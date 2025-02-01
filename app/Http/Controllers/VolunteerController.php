<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use Validator;
use Toastr;
use File;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $volunteers = Volunteer::orderBy('id', 'desc')->get();
        return view('backend.volunteer.index', compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.volunteer.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'position' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'facebook' => 'nullable|url',
                'x' => 'nullable|url',
                'instagram' => 'nullable|url',
                'linkedin' => 'nullable|url',
                'is_active' => 'required|boolean',
            ]
        );
        if ($validator->fails()) {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed');
            }
            return back()->withInput();
        }
        $volunteer = new Volunteer();
        $volunteer->name = $request->name;
        $volunteer->position = $request->position;
        $volunteer->facebook = $request->facebook;
        $volunteer->x = $request->x;
        $volunteer->instagram = $request->instagram;
        $volunteer->linkedin = $request->linkedin;
        $volunteer->is_active = $request->is_active ?? true;
        $volunteer->created_by = auth()->id();
        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/volunteers/', $filename);
            $volunteer->image = $filename;
        }
        $save = $volunteer->save();
        if ($save) {
            Toastr::success('Success', 'Volunteer added successfully!');
            return redirect()->route('volunteers.index');
        } else {
            Toastr::error('Error', 'Any Problem Occured');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('backend.volunteer.edit', compact('volunteer'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'position' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'facebook' => 'nullable|url',
                'x' => 'nullable|url',
                'instagram' => 'nullable|url',
                'linkedin' => 'nullable|url',
                'is_active' => 'required|boolean',
            ]
        );
        if ($validator->fails()) {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed');
            }
            return back()->withInput();
        }

        $volunteer = Volunteer::findOrFail($id);
        $volunteer->name = $request->name;
        $volunteer->position = $request->position;
        $volunteer->facebook = $request->facebook;
        $volunteer->x = $request->x;
        $volunteer->instagram = $request->instagram;
        $volunteer->linkedin = $request->linkedin;
        $volunteer->is_active = $request->is_active ?? true;
        $volunteer->updated_by = auth()->id();

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            $destination = 'uploads/volunteers/' . $volunteer->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            // Store the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/volunteers/', $filename);
            $volunteer->image = $filename;
        }

        $save = $volunteer->save();
        if ($save) {
            Toastr::success('Success', 'Volunteer updated successfully!');
            return redirect()->route('volunteers.index');
        } else {
            Toastr::error('Error', 'Any Problem Occured');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $volunteer = Volunteer::findOrFail($id);

        // Delete the volunteer image if it exists
        $imagePath = 'uploads/volunteers/' . $volunteer->image;
        if ($volunteer->image && File::exists($imagePath)) {
            File::delete($imagePath); // Delete the image file
        }
        $delete = $volunteer->delete();

        if ($delete) {
            Toastr::success('Success', 'Volunteer deleted successfully!');
            return redirect()->route('volunteers.index');
        } else {
            Toastr::error('Error', 'An issue occurred while deleting the volunteer.');
            return redirect()->back();
        }
    }
}
