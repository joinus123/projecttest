@extends('admin.dashboard.master')

@section('content')
    <div class="content">

                <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Edit Profile</h4>
                                </div>
                                <div class="content">
                                    <form role="form" action="http://myprojectstaging.com/custom/whocares_dev/admin/dashboard/update_profile" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Bussniess Name</label>
                                                    <input type="text" name="master_admin_bussniess" class="form-control" placeholder="Bussniess" value="Who Cares">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="master_admin_name" class="form-control" placeholder="Username" value="john smith">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" name="master_admin_email" class="form-control" placeholder="Email" value="admin@demo.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="master_admin_address" class="form-control" placeholder="Home Address" value="968  Elm Drive, New York, NY.s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                     <div class="form-group">
                                    <label>Profile Picture<br/> (<span class="text-danger">Use Good Quality Images</span>)</label>
                                    <div class="input-group-btn">
                                      <div class="image-upload">
                                        <img class="imgpath" src="http://myprojectstaging.com/custom/whocares_dev/uploads/testimonials/test-img-3.png">
                                        <div class="file-btn">
                                          <input type="text" class="imageselect btn" id="master_admin_image" data-toggle="modal" data-target="#exampleModal" name="master_admin_image" value="client-img-2.png" readonly>
                                          <label for="master_admin_image" class="btn btn-info">Upload</label>
                                        </div>
                                      </div>
                                    </div>
                                                          </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="image">
                            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
                        </div>
                        <div class="content">
                            <div class="author">
                               <a href="#">
                                <img class="avatar border-gray" src="http://myprojectstaging.com/custom/whocares_dev/uploads/testimonials/test-img-3.png" alt="...">

                                <h4 class="title">john smith<br>
                                </h4>
                            </a>
                        </div>
                        <p class="description text-center">admin@demo.com<br>
                        </p>
                    </div>
                    <hr>
                    <div class="text-center">
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Update Password</h4>
                    </div>
                    <div class="content">
                        <form role="form" action="http://myprojectstaging.com/custom/whocares_dev/admin/dashboard/update_password" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="new_password" class="form-control" placeholder="New Password" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Confirm Password</label>
                                        <input type="password" name="cnf_password" class="form-control" placeholder="Confirm New Password" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Password</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

            </div>
            </div>
        </div>
	</div>
@endsection
