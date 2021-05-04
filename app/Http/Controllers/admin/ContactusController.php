<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactusController extends Controller
{
    public function  contactus(Request $request){
        $contact['contact']=Contact::all();
        return view('admin.dashboard.pages.contactus',$contact);
    }
    public function  updatecontact(Request $request){

        $contactus = [

            'contact_banner_heading'=>$request->contact_banner_heading,
            'contact_heading'=>$request->contact_heading,
            'contact_text'=>$request->contact_text,

        ];

            if($request->hasFile('contact_image')){
            $path = $request->file('contact_image');
            $path = $request->contact_image->store('public/media');
            $path = basename($path);
            $contactus['contact_image']= $path;
         }

         if($request->id)
         {
             Contact::where('id',$request->id)->update($contactus);

         }

 else{
            Contact::where('id',$request->id)->insert( $contactus);

 }


        return redirect()->route('contact.us')->withSuccess('Great! Data successfully insert with validation.');
}

     public function  socialmedialink(Request $request){
        return view('admin.dashboard.pages.socialmedialink');
    }
}
