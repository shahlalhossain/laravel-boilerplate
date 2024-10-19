<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function contact() : View
    {

        $data['contactInformation'] = [
            'address'   => 'LakeCity, Khilkhet, Dhaka - 1229',
            'mobiles'   => '+8801731223344, +8801731334455',
            'emails'    => 'info@example.com, support@example.com',
            'website'   => 'www.example.com',
        ];

        return view('frontend.contact', $data);
    }

    public function contactPost(Request $request) : View
    {
        $contactPost = true;

        if ($contactPost) {
            $messageType = 'success';
            $meassage = 'Thanks, Your feedback has been submitted. We will contact you shortly.';
        } else {
            $messageType = 'error';
            $meassage = 'Sorry, there was an error submitting your feedback. Please try again.';
        }

        $data['contactInformation'] = [
            'address'   => 'LakeCity, Khilkhet, Dhaka - 1229',
            'mobiles'   => '+8801731223344, +8801731334455',
            'emails'    => 'info@example.com, support@example.com',
            'website'   => 'www.example.com',
        ];

        return view('frontend.contact', $data)->with($messageType, $meassage);
    }
}
