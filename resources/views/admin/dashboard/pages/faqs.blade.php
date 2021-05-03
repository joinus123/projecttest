@extends('admin.dashboard.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                  <div>
                    <h1 style="display:inline-block;">
                      FAQS
                     </h1>
                     @if ($message = Session::get('success'))
                     <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                     </div>
                      <br>
                     @endif
                    <h3 class="box-title" style="display:inline-block;">List</h3>
                  </div>
                  <a class="btn btn-info" href="{{ route('addform-faqs') }}">Add New</a>
                  <hr style="border-top: 1px solid #504444;">
                  <div class="col-md-12">
                    <div class="box-body">
                     <table id="table_id" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <td style="text-align: center;">S.no</td>
                          <td style="text-align: center;">Faqs Heading</td>
                          <td style="text-align: center;">Faqs Description</td>
                          <td style="text-align: center;">Actions</td>
                        </tr>
                      </thead>
                      <tbody>


                    @foreach ($faqs as $faq)

                        <tr>
                          <td style="text-align: center;">{{ $faq->id }}</td>
                          <td style="text-align: center;">{{ $faq->faqs_heading }}</td>
                          <td style="text-align: center;"><p>{{ $faq->faqs_description }}</p>
              </td>
                          <td style="text-align: center;">
                            <a href="{{ route('edit-faqs',[$faq->id]) }}"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
                            <a href="{{ route('delete-faqs',[$faq->id]) }}"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
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
