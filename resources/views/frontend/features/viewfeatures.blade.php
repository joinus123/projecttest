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

             <div class="single_service">
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
    </div>
 </section>

@endsection
