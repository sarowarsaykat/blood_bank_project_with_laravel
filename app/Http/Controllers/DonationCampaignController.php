<?php

namespace App\Http\Controllers;

use App\Models\DonationCampaign;
use Illuminate\Http\Request;
use Validator;
use Toastr;
use File;

class DonationCampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =[
            "donation_campaigns"=> DonationCampaign::orderBy('id', 'desc')->get(),
        ];
    
        return view('backend.donation_campaign.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.donation_campaign.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'date' => 'required|date',
                'start_time' => 'required',
                'end_time' => 'required',
                'location' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
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

        $campaign = new DonationCampaign();
        $campaign->title = $request->title;
        $campaign->description = $request->description;
        $campaign->date = $request->date;
        $campaign->start_time = $request->start_time;
        $campaign->end_time = $request->end_time;
        $campaign->location = $request->location;
        $campaign->is_active = $request->is_active ?? true;
        $campaign->created_by = auth()->id();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/campaigns/', $filename);
            $campaign->image = $filename;
        }
        $save = $campaign->save();
        if ($save) {
            Toastr::success('Success', 'Campaign created successfully!');
            return redirect()->route('donation_campaigns.index');
        } else {
            Toastr::error('Error', 'Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(DonationCampaign $donationCampaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $campaign = DonationCampaign::findOrFail($id);
        return view('backend.donation_campaign.edit', compact('campaign'));
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
                'description' => 'required|string',
                'date' => 'required|date',
                'start_time' => 'required',
                'end_time' => 'required',
                'location' => 'required|string|max:255',
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

        $campaign = DonationCampaign::findOrFail($id);
        $campaign->title = $request->title;
        $campaign->description = $request->description;
        $campaign->date = $request->date;
        $campaign->start_time = $request->start_time;
        $campaign->end_time = $request->end_time;
        $campaign->location = $request->location;
        $campaign->is_active = $request->is_active;
        $campaign->updated_by = auth()->id();

        if ($request->hasFile('image')) {
            $destination = 'uploads/campaigns/' . $campaign->image;
            if ($campaign->image && File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/campaigns/', $filename);
            $campaign->image = $filename;
        }

        if ($campaign->save()) {
            Toastr::success('Success', 'Campaign updated successfully!');
            return redirect()->route('donation_campaigns.index');
        } else {
            Toastr::error('Error', 'Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $campaign = DonationCampaign::findOrFail($id);

        $imagePath = 'uploads/campaigns/' . $campaign->image;
        if ($campaign->image && File::exists($imagePath)) {
            File::delete($imagePath);
        }

        if ($campaign->delete()) {
            Toastr::success('Success', 'Campaign deleted successfully!');
            return redirect()->route('donation_campaigns.index');
        } else {
            Toastr::error('Error', 'Something went wrong');
            return redirect()->back();
        }
    }
}
