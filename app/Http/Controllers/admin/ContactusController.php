<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactusController extends Controller
{
    public function  contactus(Request $request){
        return view('admin.dashboard.pages.contactus');
    }
     public function  socialmedialink(Request $request){
        return view('admin.dashboard.pages.socialmedialink');
    }
}
