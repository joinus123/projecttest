<?php

namespace App\Http\Controllers\frontend;
use  App\Http\Controllers\Controller;
use App\Models\Homepage;
use App\Models\Sitesetting;
use App\Models\Features;
use App\Models\Testinomial;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function homepage()
    {
    $homepage=Homepage::all();
    $features=Features::all();
    $testinomial=Testinomial::all();
    return view('frontend.homepage')->with(['homepage'=>$homepage,'features'=>$features,'testinomial'=>$testinomial]);
    }
    public function aboutus()
    {
    return view('frontend.aboutus.viewaboutus');
    }
    public function features()
    {
    $features=Features::all();
    $homepage=Homepage::all();
    return view('frontend.features.viewfeatures')->with(['features'=>$features,'homepage'=>$homepage]);
    }
    public function testinomail()
    {
        $testinomial=Testinomial::all();
        return view('frontend.testinomail.viewtestinomail')->with('testinomial',$testinomial);
    }
    public function contactus()
    {
    return view('frontend.contactus.viewcontactus');
    }
    public function faqs()
    {
    return view('frontend.faqs.viewfaqs');
    }
    public function register()
    {
    return view('frontend.register.viewregister');
    }
    public function profile()
    {
    return view('frontend.profile');
    }

}
