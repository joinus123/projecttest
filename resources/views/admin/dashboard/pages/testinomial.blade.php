@extends('admin.dashboard.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                  <div>
                    <h1 style="display:inline-block;">
                      Testimonials      </h1>
                    <h3 class="box-title" style="display:inline-block;">List</h3>
                  </div>
                  <a class="btn btn-info" href="{{ route('add-testinomial') }}">Add New</a>
                  <hr style="border-top: 1px solid #504444;">
                  <div class="col-md-12">
                    <div class="box-body">

                     <table id="table_id" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <td>S.no</td>
                          <td>Testimonial Name</td>
                          <td>Testimonial Descripition</td>
                          <td>Testimonial Image</td>
                          <td>Actions</td>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach ($testinomial as $views)


                        <tr>
                          <td>{{ $views->id }}</td>
                          <td> {{ $views->testinomials_name }}</td>
                          <td><section>{{ $views->testinomials_text }} </section>
                         </td>
                          <td><img style="width: 100px;" src="{{asset('storage/media/'.$views->testinomials_image)}}"></td>
                          <td>
                            <a href="{{ route('edit-testinomial',[$views->id]) }}"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
                            <a href="{{ route('delete-testinomial',[$views->id]) }}"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
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
        </div>
	</div>
@endsection
