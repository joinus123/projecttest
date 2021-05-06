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
     <!--<div class="ring-0"></div>-->
     <div class="banner-text">
        <div class="container">
           <div class="row">
               {{-- {{dd($homepage)}} --}}
                             <div class="col-md-6 slider-text-mod">
                 <!--<h3>TODAY TO WELCOME TO WHOCARES</h3>-->
                 <img src="{{asset('storage/media/'.$homepage[0]->section_one_logo)}}" alt="banner text img" class="img-fluid">
                 <h2>We Do. <span>We Care.</span></h2>
                 <p>{{ $homepage[0]->section_one_text }}</p>
                 <!--<a href="</?php echo base_url('signup')?>">SIGN UP</a>-->

              </div>

           </div>
        </div>
     </div>

     <div class="banner">
        <img src="{{ asset('storage/media/'.$homepage[0]->section_one_banner) }}" alt="banner image" class="img-fluid"/>
     </div>

     <section class="boxes-absolute">
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                 <div class="boxes box-1">
                   <p><span>{{ $homepage[0]->section_one_box1_heading }}</span></p>
                    {!! $homepage[0]->section_one_box1_text !!}
                    <a href="{{ route('register') }}">SIGNUP NOW</a>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="boxes box-2">
                    <p><span>{{ $homepage[0]->section_one_box2_heading }}</span></p>
                    {!! $homepage[0]->section_one_box2_text !!}
                    <a href="{{ route('register') }}">SIGNUP NOW</a>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="boxes box-3">
                    <p><span>{{ $homepage[0]->section_one_box3_heading }}</span></p>
                    {!! $homepage[0]->section_one_box3_text !!}
                    <a href="{{ route('register') }}">SIGNUP NOW</a>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="about p-tb-13">
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                 <h2>What is<br> <span> Who Cares?</span></h2>
              </div>
              <div class="col-md-8">
                 <p>{{ $homepage[0]->section_two_text }}</p>
              </div>
           </div>
        </div>
     </section>
     <div class="ring-1"></div>
     <section class="features">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <h3><h3>Our <span class="green-cl">Distinct</span> <span>Features</span></h3>
</h3>
              </div>
           </div>
<div class="row">

<div class="col-md-4 offset-md-4">

<h4>{{$features[0]->feature_heading}}</h4>
    {!! $features[0]->features_description !!}
</div>


                                                                                                                                                                                               </div>
<div class="row">
<div class="col-md-3 col-sm-12">
@foreach ($features as $key => $feature)
<?php if($key > 0 && $key <=3 ):?>
<div class="single_service service_right">
<h4>{{$feature->feature_heading}} </h4>
{!! $feature->features_description !!}
</div>
<?php endif;?>
@endforeach
</div>
<div class="col-md-6 col-sm-12 text-center">
<div class="single_mid">
<img src="{{ asset('storage/media/'.$homepage[0]->section_three_image) }}" alt="tree image" class="img-fluid m-width width-none">
</div>
</div>
<div class="col-md-3 col-sm-12">
 @foreach ($features as $key => $feature)
 <?php if($key > 3 && $key <=6 ):?>
<div class="single_service">
    <h4>{{$feature->feature_heading}} </h4>
    {!! $feature->features_description !!}
</div>
<?php endif;?>
@endforeach
</div>

</div>
</div>
     </section>
     <div class="ring-2"></div>
     <div class="ring-3"></div>
     <section class="testimonial pb-45">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <h3>Users <span>Testimonial</span></h3>
              </div>
           </div>
           <div class="row">
              <div class="col-md-6">
                 <img src="{{ asset('storage/media/CK4ona5dkyUPwGbJ2jHteTF8QTA36Wr8GJoYxLFW.png') }}" alt="test 1" class="img-fluid" style="position: relative;"/>
                 <div class="test-box">
                    <h4>Jan Levinson</h4>
                    <i class="fa fa-quote-right qoute-right"></i>
                    <p class="test-desig">The CEO of Who Cares</p>
                    <p class="test-desc">“I started this service to meet a human need in the surrounding community. Only in the highest and lowest points of our lives we need extra support, which is what my company strives to give.”.</p>
                 </div>
              </div>
              <div class="col-md-6">
                 <div id="Carousel" class="carousel slide mt-200">
                    <ol class="carousel-indicators">
                       <li data-target="#Carousel" data-slide-to="0" class="active" style="background-color: #f5297a !important;
                          width: 10px !important;"></li>
                       <li data-target="#Carousel" data-slide-to="1" style="background-color: #f5297a !important;
                          width: 10px !important;height: 20px !important"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                       <div class="carousel-item active">
                          <div class="row">
                             <div class="col-md-12">

                                 <div class="row test-slide">
                                    @foreach ($testinomial as $data)
                                   <div class="col-md-3">
                                      <img src="{{asset('storage/media/'.$data->testinomials_image)}}" alt="" class="img-fluid"/>
                                   </div>
                                   <div class="col-md-9">
                                      <h4>{{ $data->testinomials_name }}</h4>
                                      <P>{!!   $data->testinomials_text !!}</P>
                                   </div>
                                   @endforeach
                                </div>

                             </div>
                            </div>
                          <!--.row-->
                       </div>

                    </div>
                    <!--.carousel-inner-->
                 </div>
                 <!--.Carousel-->
              </div>
           </div>
        </div>
     </section>
     <div class="ring-4"></div>
@endsection
