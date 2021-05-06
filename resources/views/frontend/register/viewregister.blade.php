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
 <div class="banner-text banner-text-reg text-center">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <h4 style="">REGISTRATION</h4>
               <p>We give you a list of online stores with the relevant gift registries. You can thus order online for your baby shower, wedding or any other event. </p>               </div>

       </div>
    </div>
 </div>
 <div class="banner-signup">
    <img src="http://myprojectstaging.com/custom/whocares_dev/uploads/registry_page/banner-2.jpg" alt="banner" class="img-fluid">
 </div>

 <section class="reg-form">
    <div class="container">
       <div class="row">
          <div class="col-md-8 offset-md-2">
             <div class="row form-group align-items-center align-content-center">
                <div class="col-md-3">
                   <label for="name">Name:</label>
                </div>
                <div class="col-md-9">
                   <input type="name" class="form-control reg-form-input" id="name" placeholder="Enter Name" name="name">
                </div>
             </div>
             <div class="row form-group align-items-center align-content-center">
                <div class="col-md-3">
                   <label for="email">Email Address:</label>
                </div>
                <div class="col-md-9">
                   <input type="email" class="form-control reg-form-input" id="email" placeholder="Enter Email Address" name="email">
                </div>
             </div>
             <div class="row form-group align-items-center align-content-center">
                <div class="col-md-3">
                   <label for="email">Date Of Birth:</label>
                </div>
                <div class="col-md-9">
                   <input type="Date" class="form-control reg-form-input" name="birthday" />
                </div>
             </div>
             <div class="row form-group align-items-center align-content-center">
                <div class="col-md-3">
                   <label for="r_sex">Sex:</label>
                </div>
                <div class="col-md-9">
                   <select class="form-control reg-form-input" id="r_sex" name="r_sex">
                      <option value="" selected disabled>Please select</option>
                      <option>Male</option>
                      <option>Female</option>
                      <option>Others</option>
                   </select>
                </div>
             </div>
             <div class="row form-group align-items-center align-content-center">
                <div class="col-md-3">
                   <label for="cell_phone">Cell Phone:</label>
                </div>
                <div class="col-md-9">
                   <input type="number" class="form-control reg-form-input" id="" placeholder="Enter Cell Number" name="cell_phone">
                </div>
             </div>
             <div class="row form-group align-items-center align-content-center">
                <div class="col-md-3">
                   <label for="h_number">Home Number:</label>
                </div>
                <div class="col-md-9">
                   <input type="text" class="form-control reg-form-input" id="h_number" placeholder="Enter Home Number" name="h_number">
                </div>
             </div>
             <div class="row form-group align-items-center align-content-center">
                <div class="col-md-3">
                   <label for="h_address">Home Address:</label>
                </div>
                <div class="col-md-9">
                   <input type="text" class="form-control reg-form-input" id="h_address" placeholder="Enter Home Address" name="h_address">
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12 text-right">
             <button type="submit" class="btn-create">SUBMIT</button>
          </div>
       </div>
    </div>
 </section>

@endsection
