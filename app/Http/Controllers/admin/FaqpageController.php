<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class FaqpageController extends Controller
{
        public function  faqpage(Request $request){
        return view('admin.dashboard.pages.faqpage');
    }

     public function  faqs(Request $request){
        return view('admin.dashboard.pages.faqs');
    }
}
