<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutus;
class AboutusController extends Controller
{
    public function  aboutus(Request $request){
        $aboutus['aboutus']=Aboutus::all();
        return view('admin.dashboard.pages.aboutus',$aboutus);
    }
    public function  submitaboutus(Request $request){

        $aboutus = [

            'aboutus_heading'=>$request->aboutus_heading,
            'aboutus_text'=>$request->aboutus_text,

        ];

            if($request->hasFile('aboutus_image')){
            $path = $request->file('aboutus_image');
            $path = $request->aboutus_image->store('public/media');
            $path = basename($path);
            $aboutus['aboutus_img']= $path;
         }

         if($request->id)
         {
             Aboutus::where('id',$request->id)->update( $aboutus);

         }

 else{
         Aboutus::where('id',$request->id)->insert($aboutus);

 }


        return redirect()->route('aboutus')->withSuccess('Great! Data successfully insert with validation.');
}

}
