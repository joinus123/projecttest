@extends('admin.dashboard.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                  <div>
                    <h1 style="display:inline-block;">
                      Faq Page      </h1>
                    <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
                  </div>
                  <div class="col-md-6">
                    <form role="form" action="http://myprojectstaging.com/custom/whocares_dev/admin/faq_page/update" method="post" enctype="multipart/form-data">
                      <div class="box-body">

                        <div class="form-group">
                          <label>faq_heading</label>
                          <input type="name" class="form-control" id="faq_heading" name="faq_heading" value="FAQ" required>
                                    </div>

                        <div class="form-group">
                          <label>Background Image</label>
                          <div class="input-group-btn">
                            <div class="image-upload">
                              <img class="imgpath" src="http://myprojectstaging.com/custom/whocares_dev/uploads/faq_page/banner-2.jpg">
                              <div class="file-btn">
                                <input type="text" class="imageselect btn" id="faq_background_image" data-toggle="modal" data-target="#exampleModal" name="faq_background_image" value="banner-2.jpg" readonly>
                                <label for="faq_background_image" class="btn btn-primary">Upload</label>
                              </div>
                            </div>
                          </div>
                                    </div>

                      </div>

                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="http://myprojectstaging.com/custom/whocares_dev/admin" class="btn btn-danger">Dashboard</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div> <footer class="footer">
                <div class="container-fluid">
                  <nav class="pull-left">
                  </nav>
                  <p class="copyright pull-right">
                    © 2019 WHO CARES | All Rights Reserved    </p>
                </div>
              </footer>

              </div>
              </div>
        </div>
	</div>
@endsection
