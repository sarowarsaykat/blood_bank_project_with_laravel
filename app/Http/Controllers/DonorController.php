<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;
use Validator;
use Toastr;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donors = Donor::where('status', '0')->get();
        return view('backend.donor.index', compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("frontend.donor.donor");
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
                'email' => 'required|email|unique:donors,email',
                'number' => 'required|string',
                'blood_group' => 'required|string',
                'age' => 'required|integer|min:18|max:65', // Age range for donors
                'last_donation_date' => 'nullable|date',
                'status' => 'nullable|boolean',
            ]
        );
        if ($validator->fails()) {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed');
            }
            return back()->withInput();
        }
        // Create new Donor entry
        $donor = new Donor();
        $donor->name = $request->name;
        $donor->email = $request->email;
        $donor->number = $request->number;
        $donor->blood_group = $request->blood_group;
        $donor->age = $request->age;
        $donor->last_donation_date = $request->last_donation_date;
        $donor->status = $request->status ?? 0; // Default status 0 (Inactive)
        $save = $donor->save();
        // Check if save was successful
        if ($save) {
            Toastr::success('Success', 'Donor added successfully!');
            return redirect()->back();
        } else {
            Toastr::error('Error', 'There was an issue adding the donor.');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $donor = Donor::findOrFail($id);
        return view('backend.donor.show', compact('donor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donor $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $donor = Donor::findOrFail($id);
        $delete = $donor->delete();

        // Check if deletion was successful
        if ($delete) {
            Toastr::success('Success', 'Donor deleted successfully!');
            return redirect()->route('donors.index');
        } else {
            Toastr::error('Error', 'An issue occurred while deleting the donor.');
            return redirect()->back();
        }
    }


    //donor status
    public function toggleStatus(Donor $donor)
    {
        // Set the donor's status to Active (1)
        $donor->status = 1;
        $donor->save();
        Toastr::success('Donor set to Active successfully!');
        return redirect()->route('donors.index');
    }
}
