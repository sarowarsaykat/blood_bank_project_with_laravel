<?php

namespace App\Http\Controllers;

use Toastr;
use App\Models\Donor;
use Illuminate\Http\Request;

class ActiveDonorController extends Controller
{
    public function index()
    {
        $donors = Donor::where('status', 1)->latest()->get();
        return view('backend.donor.activeDonor', compact('donors'));
    }


    public function destroy($id)
    {
        $donor = Donor::findOrFail($id);
        $delete = $donor->delete();
        if ($delete) {
            Toastr::success('Success', 'Active donor deleted successfully!');
            return redirect()->route('active_donors.index');   
        } else {
            Toastr::error('Error', 'An issue occurred while deleting the active donor.');
            return redirect()->back(); 
            
        }
    }
}
