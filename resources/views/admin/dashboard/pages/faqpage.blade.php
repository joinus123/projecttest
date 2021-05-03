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
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert">×</button>
                     <strong>{{ $message }}</strong>
                    </div>
                     <br>
                    @endif
                  </div>
                  <div class="col-md-6">
                    <form role="form" action="{{ route('submit-faqpage') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="box-body">

                        <div class="form-group">
                          <label>faq_heading</label>
                          <input type="name" class="form-control" id="faq_heading" name="faqpage_heading" value="{{ $faqpage[0]->faqpage_heading }}" >
                          <span class="text-danger">{{ $errors->first('faqpage_heading') }}</span>
                         </div>
                         <div class="row base-img-sec">
                            <div class="col-xl-4 col-lg-6">
                               <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                                  <label>Section One Logo Image</label>
                               </div>
                               <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#faqpage_image').click()"
                                  src="{{asset('storage/media/'.$faqpage[0]->faqpage_image)}}" alt="">
                               <input type="file" onchange="getFile(this)" name="faqpage_image"  class="hidden"  id="faqpage_image">
                               <span class="text-danger">{{ $errors->first('faqpage_image') }}</span>
                            </div>
                         </div>


                      </div>

                      <div class="box-footer">
                        <input type="hidden" name="id" value="<?php if(isset($faqpage[0]->id)){ echo $faqpage[0]->id;}?>">
                        <button type="submit" class="btn btn-primary"><?php if(isset($faqpage[0]->id)){echo "UPDATE";}else{echo "Submit";}?></button>
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
