@extends('admin.dashboard.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                  <div>
                    <h1 style="display:inline-block;">
                      About-us Page      </h1>
                    <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
                  </div>
                  <div class="col-md-6">
                    <form role="form" action="{{ route('submit-aboutus') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="box-body">

                        <div class="row base-img-sec">
                            <div class="col-xl-4 col-lg-6">
                               <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                                  <label>Banner About-us Image</label>
                               </div>

                               <img id="base_image" style="width:30%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#aboutus_image').click()"
                                  src="{{asset('storage/media/'.$a=isset($aboutus[0]->aboutus_img)?$aboutus[0]->aboutus_img:Null)}}" alt="">
                               <input type="file" onchange="getFile(this)" name="aboutus_image"  class="hidden"   id="aboutus_image">
                               <span class="text-danger">{{ $errors->first('aboutus_image') }}</span>
                            </div>
                         </div>

                        <div class="form-group">
                          <label> Banner About-us Heading</label>
                          <input type="name" class="form-control" id="aboutus_heading" name="aboutus_heading" value="{{ isset($aboutus[0]->aboutus_heading)?$aboutus[0]->aboutus_heading:NULL }}" >
                          <span class="text-danger">{{ $errors->first('aboutus_image') }}</span>
                        </div>

                        <div class="form-group">
                          <label>Banner About-us Text </label>
                          <textarea class="editor form-control" rows="3" id="aboutus_text" name="aboutus_text" value="" >
                           {{ isset($aboutus[0]->aboutus_text)?$aboutus[0]->aboutus_text:NULL}}
                          </textarea>
                          <span class="text-danger">{{ $errors->first('aboutus_text') }}</span>
                                    </div>

                      </div>
                      <div class="box-footer">
                        <input type="hidden" name="id" value="<?php if(isset($aboutus[0]->id)){ echo $aboutus[0]->id;}?>">
                        <button type="submit" class="btn btn-primary"><?php if(isset($aboutus[0]->id)){echo "UPDATE";}else{echo "Submit";}?></button>
                        <a href="{{ route('dashboard') }}" class="btn btn-danger">Dashboard</a>
                      </div>
                    </form>
                  </div>
                </div>
        </div>
	</div>
@endsection
