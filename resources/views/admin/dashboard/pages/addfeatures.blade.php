@extends('admin.dashboard.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
          Features      </h1>
        <h3 class="box-title" style="display:inline-block;">Add</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{ route('sumbit-features') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

            <div class="form-group">
              <label>Features <span style="color:red;">Heading</span> </label>
              <input type="name" class="form-control" id="features_heading"  name="features_heading" >
              <span class="text-danger">{{ $errors->first('features_heading') }}</span>
             </div>

            <div class="form-group">
              <label>Description <span style="color:red;">Text</span> </label>
              <textarea class="editor form-control" rows="3" id="features_description" name="features_description" ></textarea>
              <span class="text-danger">{{ $errors->first('features_description') }}</span>
            </div>


        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="http://myprojectstaging.com/custom/whocares_dev/admin" class="btn btn-danger">Dashboard</a>
        </div>
      </form>
    </div>
  </div>
@endsection
