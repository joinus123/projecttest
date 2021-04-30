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
             <h4 style="">Features</h4>
          </div>
       </div>
    </div>
 </div>
 <div class="banner-signup">
    <img src="http://myprojectstaging.com/custom/whocares_dev/uploads/faq_page/banner-2.jpg" alt="banner" class="img-fluid">
 </div>
<section class="features features-sec">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <h3></h3><h3>Our <span class="green-cl">Distinct</span> <span>Features</span></h3>

          </div>
       </div>
       <div class="row">
              <div class="col-md-4 offset-md-4">
             <h4>Any time, any event</h4>
             <p>Whether you are going through a tough time or a celebration, we will be here for you with any help you require.</p>
          </div>
                                                                                                                                                                                                                            </div>
       <div class="row">

         <div class="col-md-3 col-sm-12">
               <div class="single_service service_right">
                <h4>We are diverse and adaptive </h4>
                <p>Diversity is a key focus of our service as we cater to all kinds of individuals and are able to tailor our assistance accordingly.</p>
             </div>
                                                              <div class="single_service service_right">
                <h4>We believe in better living</h4>
                <p>Life should not just be one miserable day after another. We want you to live better, every day, no matter what you situation is.</p>
             </div>
                                                              <div class="single_service service_right">
                <h4>We build a community</h4>
                <p>What we offer is not only bringing families together but is also ensuring that a tight knit community is being created.</p>
             </div>

          </div>
          <div class="col-md-6 col-sm-12 text-center">
             <div class="single_mid">
                <img src="http://myprojectstaging.com/custom/whocares_dev/uploads/home_page/tree-img.png" alt="tree image" class="img-fluid m-width width-none">
             </div>
          </div>
          <div class="col-md-3 col-sm-12">

             <div class="single_service">
                <h4>Our help is not limited</h4>
                <p>From our services you will see that there is no limit to what we can help you with. Whatever you need, you will receive.</p>
             </div>

             <div class="single_service">
                <h4>We care about your loved ones</h4>
                <p>We are not a company that cares about profits and success: we are here for your loved ones and the big moments in their lives.&nbsp;</p>
             </div>

             <div class="single_service">
                <h4>We are a free service</h4>
                <p>We provide all our services at no cost to you or to your family and friends.&nbsp;<span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,sans-serif"><span georgia="" lang="EN" style="font-family:"> </span></span></span></span></p>
             </div>

          </div>
       </div>
    </div>
 </section>

@endsection
