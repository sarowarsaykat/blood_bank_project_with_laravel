<?php

namespace App\Http\Controllers;

use App\Models\BloodRequest;
use App\Models\Contact;
use App\Models\Donor;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class BackendController extends Controller
{
   public function Backend(){
      $data =[
         "bloodRequest" => BloodRequest::count(),
         "donorRequest" => Donor::where("status","0")->count(),
         "donor" => Donor::where("status","1")->count(),
         "volunteer" => Volunteer::count(),
         "messageCount" => Contact::whereBetween("created_at", [date('Y-m-d 00:00:00', strtotime('-2 days')), date('Y-m-d 23:59:59')])->count(),

         
      ];
    return view("backend.backend", $data);
   }
}
