@extends('admin.dashboard.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
          Testimonials      </h1>
        <h3 class="box-title" style="display:inline-block;"> Edit Data</h3>
      </div>

      <div class="col-md-6">
        <form role="form" action="{{ route('update-testinomial',['id' => $testinomial->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

            <div class="form-group">
              <label> Testimonial <span class="dls">Name</span> </label>
              <input type="name" class="form-control" id="testimonials_name" value="{{ $testinomial->testinomials_name}}" name="testimonials_name" >
            </div>

            <div class="form-group">
              <label>Testimonial<span class="dls"> Descripition</span> </label>
              <textarea class="editor form-control" rows="3" id="testimonials_text"  name="testimonials_text" required >
             {{ $testinomial->testinomials_text}}
              </textarea>
            </div>
            <div class="row base-img-sec">
                <div class="col-xl-4 col-lg-6">
                   <div class="d-flex justify-content-between base-{{asset('backend/assets')}}/images-sec">
                      <label>Testinomial Image</label>
                   </div>
                   <img id="base_image" style="width:50%"class="cursor-pointer base_img  img-rounded " onclick="document.querySelector('#testinomials_image').click()"
                      src=" {{asset('storage/media/'.$testinomial->testinomials_image)}}" alt="">
                   <input type="file" onchange="getFile(this)" name="testinomials_image"  class="hidden"  id="testinomials_image">

                </div>
             </div>



        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('dashboard') }}" class="btn btn-danger">Dashboard</a>
          <a href="{{ route('testinomial') }}" class="btn btn-info">Cancel</a>
        </div>
      </form>
    </div>
  </div>
  </div>
@endsection
