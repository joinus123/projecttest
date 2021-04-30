@extends('admin.dashboard.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
          Features      </h1>
        <h3 class="box-title" style="display:inline-block;">Edit</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{ route('update-features',['id' => $edit->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="box-body">

            <div class="form-group">
              <label>Features Heading</label>
              <input type="text" class="form-control" id="features_heading"value="{{ $edit->feature_heading}}"name="features_heading">
                        </div>

            <div class="form-group">
              <label>Services <span style="color:red;">Text</span> </label>
              <textarea class="editor form-control" rows="3" id="features_text"  name="features_description" >
                {{ $edit->features_description}}
  </textarea>
                        </div>

          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="http://myprojectstaging.com/custom/whocares_dev/admin" class="btn btn-danger">Dashboard</a>
            <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features" class="btn btn-info">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
