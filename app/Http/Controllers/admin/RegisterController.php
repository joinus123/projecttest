<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function  updateregister(Request $request){

        $register = [


            'register_heading'=>$request->register_heading,
            'register_text'=>$request->register_text,

        ];

            if($request->hasFile('register_banner_image')){
            $path = $request->file('register_banner_image');
            $path = $request->register_banner_image->store('public/media');
            $path = basename($path);
            $register['register_banner_image']= $path;
         }

         if($request->id)
         {
             Register::where('id',$request->id)->update($register);

         }

 else{
            Register::where('id',$request->id)->insert($register);

 }


        return redirect()->route('registry')->withSuccess('Great! Data successfully insert with validation.');
}

     public function  socialmedialink(Request $request){
        return view('admin.dashboard.pages.socialmedialink');
    }

}
