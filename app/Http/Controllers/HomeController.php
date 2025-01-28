<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        return view("home");
    }
    public function aboutUs(){
        return view("frontend.aboutUs.about_us");
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
