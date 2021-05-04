<?php

namespace App\Http\Controllers\frontend;
use  App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function homepage()
    {
    return view('frontend.homepage');
    }
    public function aboutus()
    {
    return view('frontend.aboutus.viewaboutus');
    }
    public function features()
    {
    return view('frontend.features.viewfeatures');
    }
    public function testinomail()
    {
    return view('frontend.testinomail.viewtestinomail');
    }
    public function contactus()
    {
    return view('frontend.contactus.viewcontactus');
    }
    public function faqs()
    {
    return view('frontend.faqs.viewfaqs');
    }
}
