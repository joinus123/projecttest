@extends('admin.dashboard.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
          FAQS     </h1>
        <h3 class="box-title" style="display:inline-block;">Add</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{ route('submit-faqs') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

            <div class="form-group">
              <label>Faqs <span style="color:red;">Heading</span> </label>
              <input type="name" class="form-control" id="faqs_heading"  name="faqs_heading" >
              <span class="text-danger">{{ $errors->first('faqs_heading') }}</span>
             </div>

            <div class="form-group">
              <label>Faqs <span style="color:red;">Text</span> </label>
              <textarea class="editor form-control" rows="3" id="faqs_description" name="faqs_description" ></textarea>
              <span class="text-danger">{{ $errors->first('faqs_description') }}</span>
            </div>


        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{ route('dashboard') }}" class="btn btn-danger">Dashboard</a>
        </div>
      </form>
    </div>
  </div>
@endsection
