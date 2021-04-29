<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Testinomial;
use Illuminate\Http\Request;

class TestinomialController extends Controller
{
    public function  testinomial(Request $request){
        $testinomial=Testinomial::all();
        return view('admin.dashboard.pages.testinomial')->with('testinomial',$testinomial);
    }
    public function  addtestinomial(Request $request){
        return view('admin.dashboard.pages.addtestinomial');
    }
                public function  edittestinomial(Request $request,$id){
                $testinomial['testinomial']=Testinomial::find($id);
                return view('admin.dashboard.pages.edittestinomial',$testinomial);
            }
         public function  submittestinomial(Request $request){

        $testinomial = [



            'testinomials_name'=>$request->testimonials_name,
            'testinomials_text'=>$request->testimonials_text,


            ];

                if($request->hasFile('testinomials_image')){
                $path = $request->file('testinomials_image');
                $path = $request->testinomials_image->store('public/media');
                $path = basename($path);
                $testinomial['testinomials_image']= $path;
             }

             Testinomial::where('id',$request->id)->insert($testinomial);

            //   dd($Homepage);


            return redirect()->route('testinomial')->withSuccess('Great! Data successfully update with validation.');
}
           public function updatetestinomial(Request $request){



            $testinomial=Testinomial::find($request->id);

            $testinomial->testinomials_name= $request->testimonials_name;
            $testinomial->testinomials_text= $request->testimonials_text;

            if($request->hasFile('testinomials_image')){
            $path = $request->file('testinomials_image');
            $path = $request->testinomials_image->store('public/media');
            $path = basename($path);
            $testinomial->testinomials_image = $path;
            }


     $testinomial->save();
     return redirect()->route('testinomial',$request->id)->withSuccess('Great! Record Has been update successfully');


     }

}
