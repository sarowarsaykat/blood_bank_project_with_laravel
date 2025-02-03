<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use App\Models\DonationCampaign;
class MyController extends Controller
{
    public function sendSMS($sms_send_to, $message)
    {
        $to = $sms_send_to;
        $token = "f94823207b6ac36867a4f8c430169f33";
        $message = $message;

        $url = "http://sms.greenweb.com.bd/api.php";


        $data = array(
            'to' => "$to",
            'message' => "$message",
            'token' => "$token"
        ); // Add parameters in key value
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch);
        return $smsresult;
        //sendsms end//
    }


    //Volunteers
    public static function loadAllVolunteer(){
        $volunteers= Volunteer::where("is_active","1")->latest()->take(9)->get();
        return $volunteers;
     }

    //Donation Campaigns
    public static function loadAllDonationCampaigns(){
        $donation_campaigns = DonationCampaign::where("is_active","1")->latest()->take(4)->get();
        return $donation_campaigns;
    }
}
