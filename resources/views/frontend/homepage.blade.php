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
                             <div class="col-md-6 slider-text-mod">
                 <!--<h3>TODAY TO WELCOME TO WHOCARES</h3>-->
                 <img src="{{ asset('assets/images/banner-text-img.png') }}" alt="banner text img" class="img-fluid">
                 <h2>We Do. <span>We Care.</span></h2>
                 <p>We are here to offer you complete peace of mind. Our services are focused on two main things: our patients and their requests. We make sure that patients are linked to their family members who can be there for them if needed. Family members and loved ones are benefitting from our services to stay connected with patients, depending on what life event is taking place. Everyone needs time to process grief and joy which is why we are giving your family and friends the right means to be there for you during the big moments of your life. Whether you are going through a tragedy or a milestone, the people you love will be close.</p>
                 <!--<a href="</?php echo base_url('signup')?>">SIGN UP</a>-->

              </div>

           </div>
        </div>
     </div>

     <div class="banner">
        <img src="http://localhost/wc/uploads/home_page/banner-2.jpg" alt="banner image" class="img-fluid"/>
     </div>

     <section class="boxes-absolute">
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                 <div class="boxes box-1">
                   <p>01<span> Childcare</span></p>
                    <p>If you need a pick and drop service for your children, we will provide them. Whether they are going to school, daycare or some other event, we will ensure their safe travel.</p>
                    <a href="http://localhost/wc/signup">SIGNUP NOW</a>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="boxes box-2">
                    <p>02<span> Adult care</span></p>
                    <p>If you are an adult who lives alone and cannot function day to day, we will provide you a caregiver to assist you with any immediate needs you have.</p>
                    <a href="http://localhost/wc/signup">SIGNUP NOW</a>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="boxes box-3">
                    <p>03<span> Donations</span></p>
                    <p>We provide you with cash money, gift cards, food, musical services and any other donations that you need for your big event or tragedy.</p>
                    <a href="http://localhost/wc/signup">SIGNUP NOW</a>
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
                 <p>We are a free service for your community. The assistance we provide ranges from one family to another. This is a safe space for people to extend their help and support to their friends and family members in their time of need, whether it is a happy or sad occasion. We cater to: - People who are celebrating their birthdays or the holidays - People who are facing an unexpected hindrance in their routine life - People afflicted with terminal illnesses or conditions which impact their living quality</p>
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
                    <img src="http://localhost/wc/uploads/home_page/tree-img.png" alt="tree image" class="img-fluid m-width width-none">
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
                 <img src="http://localhost/wc/assets/front/images/test-1.png" alt="test 1" class="img-fluid" style="position: relative;"/>
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
                                   <div class="col-md-3">
                                      <img src="http://localhost/wc/assets/front/images/test-img-1.png" alt="" class="img-fluid"/>
                                   </div>
                                   <div class="col-md-9">
                                      <h4>Jan Levinson</h4>
                                      <P>“Who Cares helped me with my dog when I was severely ill. They made sure he was well fed and groomed until I could resume my responsibilities. Thanks guys!”.</P>
                                   </div>
                                </div>
                             </div>
                             <div class="col-md-12">
                                <div class="row test-slide">
                                   <div class="col-md-3">
                                      <img src="http://localhost/wc/assets/front/images/test-img-2.png" alt="" class="img-fluid"/>
                                   </div>
                                   <div class="col-md-9">
                                      <h4>Melody Summers</h4>
                                      <P>“I was so worried for my baby shower that I did not have time to make a registry. Who Cares really came through for me and I got some great items from my guests.”.</P>
                                   </div>
                                </div>
                             </div>
                             <div class="col-md-12">
                                <div class="row test-slide">
                                   <div class="col-md-3">
                                      <img src="http://localhost/wc/assets/front/images/test-img-3.png" alt="" class="img-fluid"/>
                                   </div>
                                   <div class="col-md-9">
                                      <h4>Edward Gardner</h4>
                                      <P>“It was a difficult time for me when my wife died. Who Cares linked me to a well-known counselling service and I have been doing much better because of their help.”.</P>
                                   </div>
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
