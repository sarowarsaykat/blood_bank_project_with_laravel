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

    // public function Blog(){
    //     return view("frontend.blog.blog");
    // }
    // public function Campaign(){
    //     return view("frontend.campaign.campaign");
    // }

    public function Gallery(){
        return view("frontend.gallery.gallery");
    }

    public function Contact(){
        return view("frontend.contact.contact");
    }
}
