@extends('admin.dashboard.master')

@section('content')

    <div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        Features      </h1>
      <h3 class="box-title" style="display:inline-block;">List</h3>
    </div>
    <a class="btn btn-info" href="http://myprojectstaging.com/custom/whocares_dev/admin/features/add">Add New</a>
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

          <tr>
            <td style="text-align: center;">1</td>
            <td style="text-align: center;">We are a free service</td>
            <td style="text-align: center;"><p>We provide all our services at no cost to you or to your family and friends.&nbsp;<span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,sans-serif"><span georgia="" lang="EN" style="font-family:"> </span></span></span></span></p>
</td>
            <td style="text-align: center;">
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/edit/1"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/delete/1"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
            </td>
          </tr>

          <tr>
            <td style="text-align: center;">2</td>
            <td style="text-align: center;">We care about your loved ones</td>
            <td style="text-align: center;"><p>We are not a company that cares about profits and success: we are here for your loved ones and the big moments in their lives.&nbsp;</p>
</td>
            <td style="text-align: center;">
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/edit/2"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/delete/2"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
            </td>
          </tr>

          <tr>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">Our help is not limited</td>
            <td style="text-align: center;"><p>From our services you will see that there is no limit to what we can help you with. Whatever you need, you will receive.</p>
</td>
            <td style="text-align: center;">
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/edit/3"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/delete/3"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
            </td>
          </tr>

          <tr>
            <td style="text-align: center;">4</td>
            <td style="text-align: center;">We build a community</td>
            <td style="text-align: center;"><p>What we offer is not only bringing families together but is also ensuring that a tight knit community is being created.</p>
</td>
            <td style="text-align: center;">
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/edit/4"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/delete/4"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
            </td>
          </tr>

          <tr>
            <td style="text-align: center;">5</td>
            <td style="text-align: center;">We believe in better living</td>
            <td style="text-align: center;"><p>Life should not just be one miserable day after another. We want you to live better, every day, no matter what you situation is.</p>
</td>
            <td style="text-align: center;">
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/edit/5"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/delete/5"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
            </td>
          </tr>

          <tr>
            <td style="text-align: center;">6</td>
            <td style="text-align: center;">We are diverse and adaptive </td>
            <td style="text-align: center;"><p>Diversity is a key focus of our service as we cater to all kinds of individuals and are able to tailor our assistance accordingly.</p>
</td>
            <td style="text-align: center;">
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/edit/6"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/delete/6"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
            </td>
          </tr>

          <tr>
            <td style="text-align: center;">7</td>
            <td style="text-align: center;">Any time, any event</td>
            <td style="text-align: center;"><p>Whether you are going through a tough time or a celebration, we will be here for you with any help you require.</p>
</td>
            <td style="text-align: center;">
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/edit/7"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
              <a href="http://myprojectstaging.com/custom/whocares_dev/admin/features/delete/7"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
            </td>
          </tr>

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
