<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function  aboutus(Request $request){
        return view('admin.dashboard.pages.aboutus');
    }
}
