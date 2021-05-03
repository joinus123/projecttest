<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Faqpage;
use Illuminate\Http\Request;
use App\Models\Faqs;



class FaqpageController extends Controller
{
        public function  faqpage(Request $request){
        $faqpage['faqpage']=Faqpage::all();
        return view('admin.dashboard.pages.faqpage',$faqpage);
    }

        public function  faqs(Request $request){
        $faqs=Faqs::all();
        return view('admin.dashboard.pages.faqs')->with('faqs',$faqs);
    }
        public function  editfaqs($id){
        $faqs['faqs']=Faqs::find($id);
        return view('admin.dashboard.pages.editfaqs',$faqs);
    }

       public function  addformfaqs(Request $request){
        return view('admin.dashboard.pages.addformfaqs');
    }
       public function  submitfaqs(Request $request){
          $faqs = request()->validate([

            'faqs_heading'=> 'required',
            'faqs_description'=> 'required',


        ]);

         $faqs = [

           'faqs_heading'=>$request->faqs_heading,
            'faqs_description'=>$request->faqs_description,


        ];

        Faqs::where('id',$request->id)->insert($faqs);
        return redirect()->route('faqs')->withSuccess('Great! Data successfully insert with validation.');
}
    public function updatefaqs(Request $request){

    $faqs=Faqs::find($request->id);

    $faqs->faqs_heading= $request->faqs_heading;
    $faqs->faqs_description= $request->faqs_description;

    $faqs->save();
    return redirect()->route('faqs',$request->id)->withSuccess('Great! Record Has been update successfully');
 }
    public function deletefaqs(Request $request ,$id)
    {
    $delete=Faqs::find($id)->delete();

    return  redirect()->route('faqs',$delete)->withSuccess('Great! Record Has been Delete successfully ');
    }

    public function  submitfaqpage(Request $request){



        $testinomial = request()->validate([

            'faqpage_heading'=> 'required',


        ]);

         $faqpage = [



            'faqpage_heading'=>$request->faqpage_heading,



        ];

            if($request->hasFile('faqpage_image')){
            $path = $request->file('faqpage_image');
            $path = $request->faqpage_image->store('public/media');
            $path = basename($path);
            $faqpage['faqpage_image']= $path;
         }

        //

         if($request->id)
         {
             Faqpage::where('id',$request->id)->update($faqpage);

         }
                 //dd($request->id);
         else{
             Faqpage::where('id',$request->id)->insert($faqpage);
         }
         return redirect()->route('faqpage')->withSuccess('Great! Data successfully update with validation.');
}

}
