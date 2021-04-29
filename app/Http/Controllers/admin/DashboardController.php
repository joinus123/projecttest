<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function  dashboard(Request $request){
        return view('admin.dashboard.pages.dashboard');
    }
    public function  features(Request $request){
        return view('admin.dashboard.pages.features');
    }
    public function  homepage(Request $request){
        $data['data']=Homepage::all();

        return view('admin.dashboard.pages.home-page',$data);
    }
    public function homedatasubmit(Request $request)
    {


        //  $Homepage = request()->validate([

        // 	'section_one_logo'=> 'requied',
        // 	'section_one_text'=> 'requied',
        // 	'section_one_banner'=> 'requied',
        // 	'section_one_box1_heading'=> 'requied',
        //     'section_one_box1_text'=> 'requied',
        // 	'section_one_box2_heading'=> 'requied',
        // 	'section_one_box2_text'=> 'requied',
        // 	'section_one_box3_heading'=> 'requied',
        // 	'section_one_box3_text'=> 'requied',
        // 	'section_two_heading'=> 'requied',
        // 	'section_two_text'=> 'requied',
        // 	'section_three_heading'=> 'requied',
        // 	'section_three_image'=> 'requied',
        // 	'section_four_heading'=> 'requied',

        //  ]);



       $Homepage = [


        'section_one_text'=>$request->section_one_text,
        'section_one_banner'=>$request->section_one_banner,
        'section_one_box1_heading'=>$request->section_one_box_one_heading,
        'section_one_box1_text'=>$request->section_one_box_one_text,
        'section_one_box2_heading'=>$request->section_one_box_two_heading,
        'section_one_box2_text'=>$request->section_one_box_two_text,
        'section_one_box3_heading'=>$request->section_one_box_three_heading,
        'section_one_box3_text'=>$request->section_one_box_three_text,
        'section_two_heading'=>$request->section_two_heading,
        'section_two_text'=>$request->section_two_text,
        'section_three_heading'=>$request->section_three_heading,




        ];

          if($request->hasFile('section_one_logo_img')){
            $path = $request->file('section_one_logo_img');
            $path = $request->section_one_logo_img->store('public/media');
            $path = basename($path);
            $Homepage['section_one_logo']= $path;
         }

           if($request->hasFile('section_one_banner_img')){
           $path = $request->file('section_one_banner_img');
           $path = $request->section_one_banner_img->store('public/media');
           $path1 = basename($path);
           $Homepage['section_one_banner']= $path1;
        }
        if($request->hasFile('section_three_img')){
            $path = $request->file('section_three_img');
            $path = $request->section_three_img->store('public/media');
            $path2 = basename($path);
            $Homepage['section_three_image'] = $path2;
         }
        if($request->id)
        {
            Homepage::where('home_page_id',$request->id)->update($Homepage);

        }
                //dd($request->id);
        else{
            Homepage::where('home_page_id',$request->id)->insert($Homepage);
        }
        //   dd($Homepage);

         return redirect()->route('home-page')->withSuccess('Great! Data successfully update with validation.');

    }
    public function  userprofile(Request $request){
        return view('admin.dashboard.pages.userprofile');
    }
    public function  sitesetting(){
        $data['data']=Sitesetting::all();

        return view('admin.dashboard.pages.sitesetting',$data);
    }
    public function  sitesettingadd(Request $request){



        $Sitesetting = [


            'Site_title'=>$request->site_title,
            'Email_address'	=>$request->email,
            'Phone_number'=>$request->phone_number,
            'Address'=>$request->address,
            'Currency'=>$request->currency,
            'Footer_copyright_text'=>$request->footer_tagline,
            'Footer_text'=>$request->footer_text,


            ];

            if($request->hasFile('footer_image')){
                $path = $request->file('footer_image');
                $path = $request->footer_image->store('public/media');
                $path = basename($path);
                $Sitesetting['Footer_image']= $path;
             }

               if($request->hasFile('header_logo')){
               $path = $request->file('header_logo');
               $path = $request->header_logo->store('public/media');
               $path1 = basename($path);
               $Sitesetting['Header_logo']= $path1;
            }
            if($request->hasFile('footer_logo')){
                $path = $request->file('footer_logo');
                $path = $request->footer_logo->store('public/media');
                $path2 = basename($path);
                $Sitesetting['Footer_logo'] = $path2;
             }
             if($request->hasFile('fav_icon')){
                $path = $request->file('fav_icon');
                $path = $request->fav_icon->store('public/media');
                $path3 = basename($path);
                $Sitesetting['Fav_icon'] = $path3;
             }

            if($request->id)
            {
                Sitesetting::where('id',$request->id)->update($Sitesetting);

            }
                    //dd($request->id);
            else{
                Sitesetting::where('id',$request->id)->insert($Sitesetting);
            }
            //   dd($Homepage);


            return redirect()->route('site.setting')->withSuccess('Great! Data successfully update with validation.');
    }

    public function  registry(Request $request){
        return view('admin.dashboard.pages.registry');
    }
        public function logout(){
        session()->forget('admin');



        return Redirect::route('admin')->with(['msg_type' => 'success', 'msg' => 'Logout Successfully']);
    }
}
