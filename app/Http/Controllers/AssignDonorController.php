<?php

namespace App\Http\Controllers;

use App\Models\BloodRequest;
use Illuminate\Http\Request;
use App\Models\Donor;
use App\Http\Controllers\MyController;
use Validator;
use Toastr;
//email send
use Illuminate\Support\Facades\Mail;
use App\Mail\DonorNotificationMail;

class AssignDonorController extends MyController
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            "donors" => Donor::where("status", 1)->get(),
            "blood_request" => BloodRequest::findOrFail($id),
        ];
        return view('backend.blood_request.assign_donor', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'assign_donors' => 'required|array',
                'assign_donors.*' => 'required|string|max:255',
            ]
        );

        if ($validator->fails()) {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed');
            }
            return back()->withInput();
        }

        $bloodRequest = BloodRequest::findOrFail($id);
        // echo "<pre>"; 
        // print_r($bloodRequest);
        // // dd($bloodRequest);
        // exit;
        $nameString = "";
        foreach ($request->assign_donors as $key => $value) {
            $donor = Donor::findOrFail($value);
            $nameString .= $donor->name . ", ";
            // sms send
            $smsString = "You are requested to donate blood to Mr $bloodRequest->name please contact $bloodRequest->phone";
            $this->sendSMS($donor->number, $smsString);

            // email send
            Mail::to($donor->email)->send(new DonorNotificationMail($donor, $bloodRequest));
        }

        $bloodRequest->assign_donors = $nameString;
        // $bloodRequest->assign_donors = json_encode($request->assign_donors);
        $save = $bloodRequest->save();

        if ($save) {
            Toastr::success('Donor message sent successfully!', 'Success');
            return redirect()->route('blood_requests.index');
        } else {
            Toastr::error('There was an issue adding the donor.', 'Error');
            return redirect()->back();
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
