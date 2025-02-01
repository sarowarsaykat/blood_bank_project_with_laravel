<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use App\Models\Donor;
use App\Models\DonationCampaign;
class HomeController extends Controller
{
    public function Home(){
        $data =[
            "volunteers" => Volunteer::where("is_active","1")->latest()->take(3)->get(),
            "donation_campaigns"=> DonationCampaign::where("is_active","1")->latest()->take(4)->get(),
        ];
        
        return view("home", $data);
    }
    public function aboutUs(){
        return view("frontend.aboutUs.about_us");
    }

    public function donorList(){
        $donors = Donor::where('status','1')->latest()->get();
        return view("frontend.donor_list.donor_list",compact('donors'));
    }

     public function campaignAll(){
        return view("frontend.campaign.all_campaign");
    }

    public function campaignSingle(){
        return view("frontend.campaign.single_campaign");
    }

    public function blogPageAll(){
        return view("frontend.blog.all_page");
    }

    public function blogSinglePage(){
        return view("frontend.blog.single_page");
    }
   

    public function Gallery(){
        return view("frontend.gallery.gallery");
    }

    public function Contact(){
        return view("frontend.contact.contact");
    }
}
