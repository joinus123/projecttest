<?php

namespace App\Http\Controllers\frontend;
use  App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function homepage()
    {


        // if(session()->has('admin'))
        // {
        //     $user = session()->get('admin');
        //     $exist = HomeSetting::where('user_id', '=', $user->id)->first();
        //     $id = $exist?$exist->id:13;
        // }else{
        //     $id = 13;
        // }

        // $data=HomeSetting::find($id);



        return view('frontend.homepage');
}
}
