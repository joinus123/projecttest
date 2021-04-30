@extends('admin.dashboard.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
          Testimonials      </h1>
        <h3 class="box-title" style="display:inline-block;">Add</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{ route('submit-testinomial') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

            <div class="form-group">
              <label> Testimonial <span class="dls">Name</span> </label>
              <input type="name" class="form-control" id="testimonials_name" name="testimonials_name" >
              <span class="text-danger">{{ $errors->first('testimonials_name') }}</span>
            </div>

            <div class="form-group">
              <label>Testimonial<span class="dls"> Descripition</span> </label>
              <textarea class="editor form-control" rows="3" id="testimonials_text" name="testimonials_text" required="true"></textarea>
              <span class="text-danger">{{ $errors->first('testimonials_text') }}</span>
             </div>

                        <div class="row base-img-sec">
                            <div class="col-xl-4 col-lg-6">
                               <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                                  <label>Testinomial Image</label>
                               </div>
                               <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#testinomial_image').click()"
                                  src="{{asset('admin/assets/img/Add-Property_06.jpg')}}" alt="">
                               <input type="file" onchange="getFile(this)" name="testinomials_image"  class="hidden"  id="testinomial_image">
                               <span class="text-danger">{{ $errors->first('testinomials_image') }}</span>
                            </div>
                         </div>

        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{ route('dashboard') }}" class="btn btn-danger">Dashboard</a>
          <a href="{{ route('testinomial') }}" class="btn btn-info">Cancel</a>
        </div>
      </form>
    </div>
  </div>
  </div>
@endsection
