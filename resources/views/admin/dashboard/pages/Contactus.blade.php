@extends('admin.dashboard.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                  <div>
                    <h1 style="display:inline-block;">
                      Contact us      </h1>
                    <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
                  </div>
                  <div class="col-md-6">
                    <form role="form" action="{{ route('update-contact') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="box-body">

                        <div class="row base-img-sec">
                            <div class="col-xl-4 col-lg-6">
                               <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                                  <label>Contact-us Image</label>
                               </div>
                               <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#contact_image').click()"
                                  src="{{asset('storage/media/'.$a=isset($contact[0]->contact_image)?$contact[0]->contact_image:Null)}}" alt="">
                               <input type="file" onchange="getFile(this)" name="contact_image"  class="hidden"  id="contact_image">
                               <span class="text-danger">{{ $errors->first('contact_image') }}</span>
                            </div>
                         </div>

                        <div class="form-group">
                          <label> Banner TextBox1 Heading </label>
                          <input type="name" class="form-control" id="contact_banner_heading" name="contact_banner_heading" value="{{ isset($contact[0]->contact_banner_heading)?$contact[0]->contact_banner_heading:NULL }}">
                        </div>

                         <div class="form-group">
                            <label> Banner TextBox2 Heading </label>
                            <input type="name" class="form-control" id="banner_heading" name="contact_heading"  value="{{ isset($contact[0]->contact_heading)?$contact[0]->contact_heading:NULL }}" >
                         </div>

                        <div class="form-group">
                          <label>Banner Text </label>
                          <textarea class="editor form-control" rows="3" id="contact_text" name="contact_text" >{{ isset($contact[0]->contact_text)?$contact[0]->contact_text:NULL }}</textarea>
                                    </div>

                      </div>
                      <div class="box-footer">
                        <input type="hidden" name="id" value="<?php if(isset($contact[0]->id)){ echo $contact[0]->id;}?>">
                        <button type="submit" class="btn btn-primary"><?php if(isset($contact[0]->id)){echo "UPDATE";}else{echo "Submit";}?></button>
                        <a href="{{ route('dashboard') }}" class="btn btn-danger">Dashboard</a>
                      </div>
                    </form>
                  </div>
                </div>
        </div>
	</div>
@endsection
