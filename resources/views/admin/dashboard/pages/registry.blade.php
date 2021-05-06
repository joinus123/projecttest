@extends('admin.dashboard.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                  <div>
                    <h1 style="display:inline-block;">
                      Registry Page      </h1>
                    <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
                  </div>
                  <div class="col-md-6">
                    <form role="form" action="{{ route('update-register') }}" method="post" enctype="multipart/form-data">
                        @csrf

                      <div class="box-body">

                        <div class="row base-img-sec">
                            <div class="col-xl-4 col-lg-6">
                               <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                                  <label>Register Image</label>
                               </div>
                               <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#register_image').click()"
                                  src="{{asset('storage/media/'.$a=isset($register[0]->register_banner_image)?$register[0]->register_banner_image:Null)}}" alt="">
                               <input type="file" onchange="getFile(this)" name="register_banner_image"  class="hidden"  id="register_image">
                               <span class="text-danger">{{ $errors->first('testinomials_image') }}</span>
                            </div>
                         </div>

                        <div class="form-group">
                          <label> Banner Heading</label>
                          <input type="name" class="form-control" id="register_heading" name="register_heading" value="{{ isset($register[0]->register_heading)?$register[0]->register_heading:NULL }}">
                        </div>

                        <div class="form-group">
                          <label>Banner Text </label>
                          <textarea class="editor form-control" rows="3" id="register_text" name="register_text" >{{ isset($register[0]->register_text)?$register[0]->register_text:NULL }}</textarea>
                                    </div>

                      </div>
                      <div class="box-footer">
                        <input type="hidden" name="id" value="<?php if(isset($register[0]->id)){ echo $register[0]->id;}?>">
                        <button type="submit" class="btn btn-primary"><?php if(isset($register[0]->id)){echo "UPDATE";}else{echo "Submit";}?></button>
                        <a href="{{ route('dashboard') }}" class="btn btn-danger">Dashboard</a>
                      </div>
                    </form>
                  </div>
                </div>
        </div>
	</div>
@endsection
