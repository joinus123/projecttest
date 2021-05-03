@extends('admin.dashboard.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
          Faqs      </h1>
        <h3 class="box-title" style="display:inline-block;">Edit</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{ route('update-faqs',['id' => $faqs->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="box-body">

            <div class="form-group">
              <label>Faqs heading</label>
              <input type="text" class="form-control" id="features_heading"value="{{ $faqs->faqs_heading}}"name="faqs_heading">
                        </div>

            <div class="form-group">
              <label>faqs <span style="color:red;">Text</span> </label>
              <textarea class="editor form-control" rows="3" id="features_description"  name="faqs_description" >
                {{ $faqs->faqs_description}}
  </textarea>
                        </div>

          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('dashboard') }}" class="btn btn-danger">Dashboard</a>
            <a href="{{ route('faqs') }}" class="btn btn-info">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
