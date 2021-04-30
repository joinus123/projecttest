@extends('admin.dashboard.master')

@section('content')

    <div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        Features      </h1>
      <h3 class="box-title" style="display:inline-block;">List</h3>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <strong>{{ $message }}</strong>
    </div>
     <br>
    @endif
    <a class="btn btn-info" href="{{ route('add-features') }}">Add New</a>
    <hr style="border-top: 1px solid #504444;">
    <div class="col-md-12">
      <div class="box-body">
       <table id="table_id" class="table table-bordered table-striped">
        <thead>
          <tr>
            <td style="text-align: center;">S.no</td>
            <td style="text-align: center;">Feature Heading</td>
            <td style="text-align: center;">Feature Description</td>
            <td style="text-align: center;">Actions</td>
          </tr>
        </thead>
        <tbody>
         @foreach ($view as $views)


          <tr>
            <td style="text-align: center;">{{ $views->id }}</td>
            <td style="text-align: center;">{{ $views->feature_heading }}</td>

            <td style="text-align: center;">{{ $views->features_description }}</td>
            <td style="text-align: center;">
              <a href="{{ route('edit-features',['id'=>$views->id]) }}"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
              <a href="{{ route('delete-features',['id'=>$views->id]) }}"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
            </td>
          </tr>
 @endforeach
  </tbody>
      </table>
    </div>
    <div class="box-footer">
      <a href="http://myprojectstaging.com/custom/whocares_dev/admin" class="btn btn-danger">Dashboard</a>
    </div>
  </div>
</div>
</div>
@endsection
