@extends('frontend.layout')
@section('content')

<div class="overlay">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <input type="text" placeholder="enter search and press icon again" id="searchString" />
             <!--<input id="submitSearch" type="submit" value="" />-->
             <button class="sear-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
       </div>
    </div>
    <button type="button" class="search-close search-form_close close"><i class="fa fa-times"></i></button>
 </div>
 <div class="banner-text banner-text-reg">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <h4 style="">POST</h4>
          </div>
       </div>
    </div>
 </div>
 <div class="banner-signup">
    <img src="http://myprojectstaging.com/custom/whocares_dev/assets/front/images/banner-2.jpg" alt="banner" class="img-fluid">
 </div>

 <section class="reg-form">
    <div class="container">
       <div class="row">
          <div class="col-md-8 offset-md-2">
             <div class="row form-group align-items-center align-content-center">
                <div class="col-md-3">
                   <label for="name">Title: </label>
                </div>
                <div class="col-md-9">
                   <input type="name" class="form-control reg-form-input" id="name" placeholder="Enter Title" name="name">
                </div>
             </div>
             <div class="row form-group align-items-center align-content-center">
                <div class="col-md-3">
                   <label for="r_sex">Type Of Service:</label>
                </div>
                <div class="col-md-9">
                   <select class="form-control reg-form-input" id="r_sex" name="r_sex">
                      <option value="" selected disabled>Please select</option>
                      <option>Child Care</option>
                      <option>Adult Care</option>
                      <option>Lawn Services</option>
                      <option>Visiting Preferences</option>
                      <option>Meals</option>
                      <option>Transportation</option>
                      <option>Donations</option>
                      <option>Gifts</option>
                   </select>
                </div>
             </div>
             <div class="row form-group align-items-center align-content-center">
                <div class="col-md-3">
                   <label for="name">Text: </label>
                </div>
                <div class="col-md-9">
                   <textarea class="form-control reg-form-input" rows="5" id="comment" placeholder="Enter Text"></textarea>
                </div>
             </div>
             <div class="row form-group align-items-center align-content-center">
                <div class="col-md-3">
                   <label for="name">Upload Video: </label>
                </div>
                <div class="col-md-9">
                   <input type="file" class="fileuploader" style="display: none;"><button class="fileuploader-btn"><i class="fa fa-video-camera" aria-hidden="true"></i> Select a Video File</button><br>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12 text-right">
             <button type="submit" class="btn-create">UPLOAD</button>
          </div>
       </div>
    </div>
 </section>
@endsection
