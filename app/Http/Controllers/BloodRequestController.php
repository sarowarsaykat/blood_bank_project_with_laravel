<?php

namespace App\Http\Controllers;

use App\Models\BloodRequest;
use Illuminate\Http\Request;
use Validator;
use Toastr;
class BloodRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bloodRequests = BloodRequest::latest()->get();
        return view("backend.blood_request.index", compact("bloodRequests"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
                'email' => 'required|email|unique:blood_requests,email',
                'phone' => 'required|string',
                'blood_group' => 'required|string',
                'donation_center' => 'required|string',
                'quantity' => 'required|integer|min:1',
                'date' => 'required|date',
                'time' => 'required',
                'reason' => 'nullable|string',
            ]
        );
        if ($validator->fails()) {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed');
            }
            return back()->withInput();
        }
        $bloodRequest = new BloodRequest();
        $bloodRequest->name = $request->name;
        $bloodRequest->email = $request->email;
        $bloodRequest->phone = $request->phone;
        $bloodRequest->blood_group = $request->blood_group;
        $bloodRequest->donation_center = $request->donation_center;
        $bloodRequest->quantity = $request->quantity;
        $bloodRequest->date = $request->date;
        $bloodRequest->time = $request->time;
        $bloodRequest->reason = $request->reason;
        $save = $bloodRequest->save();
        // Check if save was successful
        if ($save) {
            Toastr::success('Success', 'Blood request added successfully!');
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
        $bloodRequest = BloodRequest::findOrFail($id);
        return view('backend.blood_request.show', compact('bloodRequest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BloodRequest $bloodRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BloodRequest $bloodRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bloodRequest = BloodRequest::findOrFail($id);
        $delete = $bloodRequest->delete();
        // Check if deletion was successful
        if ($delete) {
            Toastr::success('Success', 'Blood request deleted successfully!');
            return redirect()->route('blood_requests.index');
        } else {
            Toastr::error('Error', 'An issue occurred while deleting the blood request.');
            return redirect()->back();
        }

    }
}
