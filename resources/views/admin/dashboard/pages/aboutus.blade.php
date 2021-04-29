@extends('admin.dashboard.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                  <div>
                    <h1 style="display:inline-block;">
                      About-us Page      </h1>
                    <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
                  </div>
                  <div class="col-md-6">
                    <form role="form" action="http://myprojectstaging.com/custom/whocares_dev/admin/registry_page/index" method="post" enctype="multipart/form-data">
                      <div class="box-body">

                        <div class="form-group">
                          <label> Banner About-us Image</label>
                          <div class="input-group-btn">
                            <div class="image-upload">
                              <img class="imgpath" src="http://myprojectstaging.com/custom/whocares_dev/uploads/registry_page/banner-2.jpg">
                              <div class="file-btn">
                                <input type="text" class="imageselect btn" id="banner_image" data-toggle="modal" data-target="#exampleModal" name="banner_image" value="banner-2.jpg" readonly>
                                <label for="banner_image" class="btn btn-info">Upload</label>
                              </div>
                            </div>
                          </div>
                                    </div>

                        <div class="form-group">
                          <label> Banner About-us Heading</label>
                          <input type="name" class="form-control" id="banner_heading" name="banner_heading" value="REGISTRATION" required>
                                    </div>

                        <div class="form-group">
                          <label>Banner About-us Text </label>
                          <textarea class="editor form-control" rows="3" id="banner_text" name="banner_text" required><p>We give you a list of online stores with the relevant gift registries. You can thus order online for your baby shower, wedding or any other event. </p></textarea>
                                    </div>

                      </div>
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="http://myprojectstaging.com/custom/whocares_dev/admin" class="btn btn-danger">Dashboard</a>
                      </div>
                    </form>
                  </div>
                </div>
        </div>
	</div>
@endsection
