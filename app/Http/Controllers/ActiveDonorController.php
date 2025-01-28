<?php

namespace App\Http\Controllers;
use Toastr;
use App\Models\Donor;
use Illuminate\Http\Request;

class ActiveDonorController extends Controller
{
    public function index()
{
    $donors = Donor::where('status', 1)->get(); // Fetch only active donors
    return view('backend.donor.activeDonor', compact('donors'));
}


    public function destroy($id)
    {
        // Find the donor by ID or fail
        $donor = Donor::findOrFail($id);
    
        // Attempt to delete the donor
        $delete = $donor->delete();
    
        // Check if deletion was successful
        if ($delete) {
            Toastr::success('Success', 'Active donor deleted successfully!');
            return redirect()->route('active_donors.index'); // Redirect to active donors list
        } else {
            Toastr::error('Error', 'An issue occurred while deleting the active donor.');
            return redirect()->back(); // Redirect back to the previous page
        }
    }
    
}
