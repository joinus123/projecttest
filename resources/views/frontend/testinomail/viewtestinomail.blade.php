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
             <h4 style="">Testimonials</h4>
          </div>
       </div>
    </div>
 </div>
 <div class="banner-signup">
    <img src="http://myprojectstaging.com/custom/whocares_dev/uploads/faq_page/banner-2.jpg" alt="banner" class="img-fluid">
 </div>
<section class="testimonial features-sec">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <h3>Users <span>Testimonial</span></h3>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12">
             <div id="Carousel" class="carousel slide mt-200">
                <!--<ol class="carousel-indicators">-->
                <!--   <li data-target="#Carousel" data-slide-to="0" class="active" style="background-color: #f5297a !important;-->
                <!--      width: 10px !important;"></li>-->
                <!--   <li data-target="#Carousel" data-slide-to="1" style="background-color: #f5297a !important;-->
                <!--      width: 10px !important;height: 20px !important"></li>-->
                <!--</ol>-->
                <!-- Carousel items -->
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <div class="row">
                        @foreach ($testinomial as $data)
                         <div class="col-md-6">
                            <div class="row test-slide">



                               <div class="col-md-3">
                                  <img src="{{asset('storage/media/'.$data->testinomials_image)}}" alt="" class="img-fluid">
                               </div>
                               <div class="col-md-9">

                                  <h4>{{ $data->testinomials_name }}</h4>
                                  {!! $data->testinomials_text !!}

                               </div>
                            </div>
                         </div>
                         @endforeach

                            </div>
                         </div>
                      </div>
                 </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection
